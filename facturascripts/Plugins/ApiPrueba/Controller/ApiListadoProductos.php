<?php
namespace FacturaScripts\Plugins\ApiPrueba\Controller;

use FacturaScripts\Core\Template\ApiController;
use FacturaScripts\Dinamic\Model\Producto;
use FacturaScripts\Dinamic\Model\ProductoImagen;
use FacturaScripts\Dinamic\Model\AttachedFile;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Base\MyFilesToken;

class ApiListadoProductos extends ApiController
{
    protected function runResource(): void
    {
        // Obtener el término de búsqueda de los parámetros de la solicitud
        $searchTerm = $this->request->get('search', '');
        
        if (!empty($searchTerm)) {
            // Si hay un término de búsqueda, filtrar productos
            $this->response->setContent(json_encode($this->getFilteredProductos($searchTerm)));
        } else {
            // Si no hay término de búsqueda, devolver todos los productos
            $this->response->setContent(json_encode($this->getProductos()));
        }
    }

    /**
     * Obtiene un listado de productos con sus imágenes
     *
     * @return array
     */
    private function getProductos(): array
    {
        $productos = [];
        $productoModel = new Producto();
        $productoImagenModel = new ProductoImagen();
        $attachedFileModel = new AttachedFile();
        
        // Obtener todos los productos
        $allProductos = $productoModel->all([], [], 0, 0);
        
        foreach ($allProductos as $producto) {
            $productos[] = $this->formatProductData($producto, $productoImagenModel, $attachedFileModel);
        }
        
        return $productos;
    }
    
    /**
     * Filtra productos por ID, referencia, nombre o descripción
     * 
     * @param string $searchTerm
     * @return array
     */
    private function getFilteredProductos(string $searchTerm): array
    {
        $productos = [];
        $productoModel = new Producto();
        $productoImagenModel = new ProductoImagen();
        $attachedFileModel = new AttachedFile();
        
        // Primero intentamos buscar por ID exacto
        if (is_numeric($searchTerm)) {
            $producto = $productoModel->get($searchTerm);
            if ($producto) {
                return [$this->formatProductData($producto, $productoImagenModel, $attachedFileModel)];
            }
        }
        
        // Luego intentamos buscar por referencia exacta
        $whereRef = [new DataBaseWhere('referencia', $searchTerm)];
        $productosByRef = $productoModel->all($whereRef, [], 0, 0);
        if (count($productosByRef) > 0) {
            foreach ($productosByRef as $producto) {
                $productos[] = $this->formatProductData($producto, $productoImagenModel, $attachedFileModel);
            }
            return $productos;
        }
        
        // Si no encontramos coincidencias exactas, buscamos parciales en nombre y descripción
        $whereNombre = [new DataBaseWhere('descripcion', '%' . $searchTerm . '%', 'LIKE')];
        $productosByNombre = $productoModel->all($whereNombre, [], 0, 0);
        
        $whereDesc = [new DataBaseWhere('observaciones', '%' . $searchTerm . '%', 'LIKE')];
        $productosByDesc = $productoModel->all($whereDesc, [], 0, 0);
        
        // Combinar resultados (evitando duplicados por ID)
        $processedIds = [];
        
        foreach ($productosByNombre as $producto) {
            if (!in_array($producto->idproducto, $processedIds)) {
                $productos[] = $this->formatProductData($producto, $productoImagenModel, $attachedFileModel);
                $processedIds[] = $producto->idproducto;
            }
        }
        
        foreach ($productosByDesc as $producto) {
            if (!in_array($producto->idproducto, $processedIds)) {
                $productos[] = $this->formatProductData($producto, $productoImagenModel, $attachedFileModel);
                $processedIds[] = $producto->idproducto;
            }
        }
        
        return $productos;
    }
    
    /**
     * Formatea los datos de un producto incluyendo sus imágenes
     * 
     * @param Producto $producto
     * @param ProductoImagen $productoImagenModel
     * @param AttachedFile $attachedFileModel
     * @return array
     */
    private function formatProductData(Producto $producto, ProductoImagen $productoImagenModel, AttachedFile $attachedFileModel): array
    {
        // Datos básicos del producto
        $productoData = [
            'id' => $producto->idproducto,
            'referencia' => $producto->referencia,
            'nombre' => $producto->descripcion,
            'precio' => $producto->precio,
            'descripcion' => $producto->observaciones,
            'imagenes' => []
        ];
        
        // Buscar imágenes asociadas al producto
        $where = [new DataBaseWhere('idproducto', $producto->idproducto)];
        $imagenes = $productoImagenModel->all($where, [], 0, 0);
        
        foreach ($imagenes as $imagen) {
            // Obtener detalles del archivo adjunto
            $whereFile = [new DataBaseWhere('idfile', $imagen->idfile)];
            $file = $attachedFileModel->all($whereFile, [], 0, 1);
            
            if (count($file) > 0) {
                $file = $file[0];
                
                // Obtener la URL base de la imagen
                $baseUrl = $this->getImageUrl($file->path);
                
                // Añadir el token de seguridad para acceso a los archivos
                $token = MyFilesToken::get($file->path, true);
                $fileUrl = $baseUrl . '?myft=' . $token;
                
                $productoData['imagenes'][] = [
                    'id' => $imagen->id,
                    'filename' => $file->filename,
                    'url' => $fileUrl,
                    'mimetype' => $file->mimetype
                ];
            }
        }
        
        return $productoData;
    }
    
    /**
     * Genera la URL completa para la imagen
     *
     * @param string $path
     * @return string
     */
    private function getImageUrl(string $path): string
    {
        // Construir la URL base del sitio
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
        $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
        $baseUrl = $protocol . $host;
        
        // Devolver la URL completa a la imagen
        return $baseUrl . '/' . $path;
    }
}
