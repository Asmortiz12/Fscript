<?php

namespace FacturaScripts\Plugins\ApiPrueba;

use FacturaScripts\Core\Template\InitClass;
use FacturaScripts\Core\Kernel;
use FacturaScripts\Core\Controller\ApiRoot;

/**
 * Los plugins pueden contener un archivo Init.php en el que se definen procesos a ejecutar
 * cada vez que carga FacturaScripts o cuando se instala o actualiza el plugin.
 *
 * https://facturascripts.com/publicaciones/el-archivo-init-php-307
 */
class Init extends InitClass
{
    public function init(): void
    {
        // se ejecuta cada vez que carga FacturaScripts (si este plugin está activado).
        Kernel::addRoute('/api/3/listado-productos', 'ApiListadoProductos', -1);
        ApiRoot::addCustomResource('listado-productos');
    }

    public function uninstall(): void
        {
            // se ejecuta cada vez que se desinstale el plugin. Primero desinstala y luego ejecuta el uninstall.
        }

    public function update(): void
    {
        // se ejecuta cada vez que se instala o actualiza el plugin
    }
}
