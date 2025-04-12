// Este script se ejecuta en segundo plano
chrome.runtime.onInstalled.addListener(() => {
  console.log('API Explorer instalado correctamente');
});

// Manejar solicitudes desde el popup
chrome.runtime.onMessage.addListener((message, sender, sendResponse) => {
  if (message.action === 'fetchResource') {
    fetch(message.url, {
      method: 'GET',
      headers: {
        'Authorization': ` ${message.token}`,
        'Content-Type': 'application/json'
      }
    })
    .then(response => {
      if (!response.ok) {
        throw new Error(`Error ${response.status}: ${response.statusText}`);
      }
      return response.json();
    })
    .then(data => sendResponse({ success: true, data }))
    .catch(error => sendResponse({ success: false, error: error.message }));
    return true; // Indica que la respuesta será asíncrona
  }

  // Manejador para cargar imágenes con token
  if (message.action === 'fetchImageWithToken') {
    console.log('Intentando cargar imagen con token:', message.imageUrl);
    // Primero intentamos obtener el token para la imagen
    const path = message.imageUrl.split('/MyFiles/')[1];
    if (!path) {
      sendResponse({ success: false, error: 'No se pudo determinar la ruta de la imagen' });
      return true;
    }

    // Construir la URL para solicitar el token (endpoint ficticio, debe implementarse en el backend)
    const tokenUrl = `${message.baseUrl}/api/3/get-myfiles-token`;

    // Solicitar el token
    fetch(tokenUrl, {
      method: 'POST',
      headers: {
        'token': message.token,
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ path: `MyFiles/${path}` })
    })
    .then(response => {
      if (!response.ok) {
        throw new Error(`Error ${response.status}: ${response.statusText}`);
      }
      return response.json();
    })
    .then(data => {
      if (!data.token) {
        throw new Error('No se recibió token para la imagen');
      }
      // Construir la URL con el token
      const imageUrlWithToken = `${message.imageUrl}?myft=${data.token}`;
      console.log('URL de imagen con token:', imageUrlWithToken);
      // Cargar la imagen con el token
      return fetch(imageUrlWithToken);
    })
    .then(response => {
      if (!response.ok) {
        throw new Error(`Error ${response.status}: ${response.statusText}`);
      }
      return response.blob();
    })
    .then(blob => {
      // Convertir blob a data URL
      const reader = new FileReader();
      reader.onloadend = function() {
        sendResponse({ success: true, dataUrl: reader.result });
      };
      reader.readAsDataURL(blob);
    })
    .catch(error => {
      console.error('Error al cargar imagen con token:', error);
      // Si falla, intentar una solución alternativa: mostrar la imagen en una nueva pestaña
      sendResponse({ success: false, error: error.message, originalUrl: message.imageUrl });
    });
    return true; // Indica que la respuesta será asíncrona
  }

  // Manejador para compartir en WhatsApp
  if (message.action === 'shareOnWhatsApp') {
    console.log('Compartiendo en WhatsApp:', message.data);
    try {
      // Construir la URL de WhatsApp
      const whatsappUrl = `https://wa.me/${message.phoneNumber}?text=${encodeURIComponent(message.message)}`;
      
      // Abrir WhatsApp Web en una nueva pestaña
      chrome.tabs.create({ url: whatsappUrl }, (tab) => {
        console.log('WhatsApp Web abierto en nueva pestaña:', tab.id);
      });
      sendResponse({ success: true });
    } catch (error) {
      console.error('Error al compartir en WhatsApp:', error);
      sendResponse({ success: false, error: error.message });
    }
    return true; // Indica que la respuesta será asíncrona
  }

  // Manejador para descargar imagen
  if (message.action === 'downloadImage') {
    console.log('Descargando imagen:', message.imageUrl);
    try {
      // Descargar la imagen
      chrome.downloads.download({
        url: message.imageUrl,
        filename: message.filename || 'imagen.jpg',
        saveAs: message.saveAs || false
      }, (downloadId) => {
        if (chrome.runtime.lastError) {
          sendResponse({ success: false, error: chrome.runtime.lastError.message });
        } else {
          sendResponse({ success: true, downloadId });
        }
      });
    } catch (error) {
      console.error('Error al descargar imagen:', error);
      sendResponse({ success: false, error: error.message });
    }
    return true; // Indica que la respuesta será asíncrona
  }
  
  // Manejador para guardar credenciales
  if (message.action === "saveCredentials") {
    chrome.storage.local.set(
      { apiUrl: message.apiUrl, apiKey: message.apiKey },
      function () {
        sendResponse({ status: "success" });
      }
    );
    return true;
  }
  
  // Manejador para obtener credenciales
  if (message.action === "getCredentials") {
    chrome.storage.local.get(["apiUrl", "apiKey"], function (result) {
      sendResponse(result);
    });
    return true;
  }
});

// Manejar eventos de navegación para detectar cuando se abre WhatsApp Web
chrome.tabs.onUpdated.addListener((tabId, changeInfo, tab) => {
  if (changeInfo.status === 'complete' && tab.url && tab.url.includes('web.whatsapp.com')) {
    console.log('WhatsApp Web detectado en la pestaña:', tabId);
    
    // Esperar a que WhatsApp Web cargue completamente
    setTimeout(() => {
      // Verificar si chrome.scripting está disponible
      if (chrome.scripting) {
        // Inyectar script para ayudar a adjuntar la imagen
        chrome.scripting.executeScript({
          target: { tabId },
          function: () => {
            // Este código se ejecutará en la página de WhatsApp Web
            console.log('Script inyectado en WhatsApp Web');
            
            // Aquí puedes añadir código para ayudar con la interacción en WhatsApp Web
            // Pero ten en cuenta que WhatsApp Web tiene protecciones contra scripts externos
          }
        }).catch(error => {
          console.error('Error al inyectar script en WhatsApp Web:', error);
        });
      } else {
        console.warn('chrome.scripting no está disponible. Asegúrate de usar Manifest V3 y tener el permiso "scripting".');
      }
    }, 2000);
  }
});
