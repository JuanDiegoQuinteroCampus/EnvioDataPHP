# Headers

#### Header host

El encabezado "Host" es un campo requerido en las solicitudes HTTP/1.1. Su propósito principal es especificar el nombre de host o la dirección IP del servidor al que se está enviando la solicitud.

Estructura del encabezado:

```
javascript
Host: <nombre de host o dirección IP>
```

Características clave:

- El campo "Host" debe estar presente en todas las solicitudes HTTP/1.1.
- Puede contener el nombre de dominio completo o solo el nombre de host.
- Si se especifica solo el nombre de host, el servidor debe utilizar su dirección IP asociada para procesar la solicitud.
- Si el puerto no se especifica en el campo "Host", se utilizará el puerto predeterminado para el protocolo (puerto 80 para HTTP, puerto 443 para HTTPS).
- Si la solicitud se envía a través de un proxy, el campo "Host" contendrá el nombre de host o la dirección IP del servidor final, no del proxy.

Importancia:

- El campo "Host" permite a los servidores alojar múltiples sitios web en la misma dirección IP, diferenciándolos por el nombre de host.
- Es esencial para que el servidor pueda determinar a qué sitio web o aplicación debe dirigir la solicitud entrante.

Ejemplo de solicitud HTTP con el encabezado "Host":

```
GET /ruta/ejemplo HTTP/1.1
Host: www.ejemplo.com
```

En resumen, el encabezado "Host" es fundamental para establecer la conexión correcta entre el cliente y el servidor, permitiendo la identificación y enrutamiento adecuados de la solicitud HTTP al destino correspondiente.



#### Header Connection

El encabezado "Connection" es un campo de encabezado utilizado en las solicitudes y respuestas HTTP para controlar la gestión de la conexión entre el cliente y el servidor. Este encabezado puede contener varios valores que indican cómo se debe manejar la conexión.

Estructura del encabezado:

```
php
Connection: <valor1>, <valor2>, ...
```

Valores comunes utilizados en el encabezado "Connection":

- "Keep-Alive": Indica que la conexión debe mantenerse abierta después de completar la solicitud actual. Esto permite que se realicen solicitudes adicionales en la misma conexión, lo que puede mejorar la eficiencia al evitar la apertura y cierre repetitivos de conexiones.
- "Close": Indica que la conexión debe cerrarse después de completar la solicitud actual. Esto significa que no se realizarán más solicitudes en la misma conexión.
- Otros valores específicos de extensiones o protocolos pueden ser utilizados según las necesidades.

Es importante tener en cuenta que el encabezado "Connection" puede ser enviado tanto por el cliente como por el servidor, y su interpretación puede variar según el contexto de la solicitud y la implementación del servidor.

Ejemplo de solicitud HTTP con el encabezado "Connection":

```
GET /ruta/ejemplo HTTP/1.1
Host: www.ejemplo.com
Connection: keep-alive
```

En resumen, el encabezado "Connection" se utiliza para controlar el manejo de la conexión entre el cliente y el servidor, permitiendo indicar si se debe mantener abierta o cerrar la conexión después de la solicitud actual.



#### Header Content-Length

El encabezado "Content-Length" se utiliza en las solicitudes y respuestas HTTP para indicar la longitud en bytes del cuerpo del mensaje. Proporciona información sobre el tamaño del contenido para que el receptor pueda leer y procesar correctamente la información recibida.

La estructura del encabezado "Content-Length" es la siguiente:

```
Content-Length: <longitud>
```

En el caso de una respuesta del servidor, también se puede incluir el encabezado "Content-Length" para indicar la longitud del cuerpo de la respuesta. Por ejemplo:

```
HTTP/1.1 200 OK
Content-Type: text/html
Content-Length: 240

<!DOCTYPE html>
<html>
<head>
  <title>Página de ejemplo</title>
</head>
<body>
  <h1>Bienvenido</h1>
  <p>Esta es una página de ejemplo.</p>
</body>
</html>
```

Aquí, el encabezado "Content-Length" indica que el cuerpo de la respuesta tiene una longitud de 240 bytes. El cliente utilizará esta información para asegurarse de leer y procesar la respuesta completa correctamente.

En resumen, el encabezado "Content-Length" se utiliza en las solicitudes y respuestas HTTP para indicar la longitud en bytes del cuerpo del mensaje. Esto permite al receptor saber cuántos bytes esperar y así leer y procesar adecuadamente el contenido.



#### Header sec-ch-ua

El encabezado "sec-ch-ua" se utiliza para proporcionar información adicional sobre el agente de usuario del cliente en las solicitudes HTTP. Esto puede ayudar al servidor a personalizar y adaptar el contenido según las características y capacidades del cliente.

Ejemplo de solicitud HTTP con el encabezado "sec-ch-ua":

```
GET /ruta/ejemplo HTTP/1.1
Host: www.ejemplo.com
sec-ch-ua: "Google Chrome";v="94", "Chromium";v="94", ";Not A Brand";v="99"
```

En este ejemplo, el encabezado "sec-ch-ua" indica que el agente de usuario del cliente es "Google Chrome" versión 94, "Chromium" versión 94 y ";Not A Brand" versión 99. Estas directivas proporcionan información adicional sobre el cliente al servidor, lo que puede ayudar al servidor a personalizar y adaptar el contenido en función de las capacidades y características del cliente.



#### Header sec-ch-ua-platform

El encabezado "sec-ch-ua-platform" se utiliza para proporcionar información sobre la plataforma del agente de usuario del cliente en las solicitudes HTTP. Esto puede ayudar al servidor a adaptar y personalizar el contenido en función de las características y peculiaridades de esa plataforma específica.

Ejemplo de solicitud HTTP con el encabezado "sec-ch-ua-platform":

```
GET /ruta/ejemplo HTTP/1.1
Host: www.ejemplo.com
sec-ch-ua-platform: "Windows"
```

En este ejemplo, el encabezado "sec-ch-ua-platform" indica que el cliente está utilizando la plataforma "Windows". Esta información puede ser útil para el servidor al personalizar o adaptar el contenido en función de las características y peculiaridades de esa plataforma específica.



#### Header sec-ch-ua-mobile

El encabezado "Sec-CH-UA-Mobile" es un campo de encabezado HTTP que se utiliza para indicar al servidor si el agente de usuario (user agent) que realiza la solicitud es un dispositivo móvil o no. Este encabezado forma parte del conjunto de políticas de origen cruzado seguras (Secure Cross-Origin Resource Sharing - CORS) conocido como "Sec-CH-UA" que proporciona información sobre el agente de usuario.

```
GET /ejemplo HTTP/1.1
Host: www.ejemplo.com
Sec-CH-UA-Mobile: 1
User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 14_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1 Mobile/15E148 Safari/604.1
```

En este ejemplo, se realiza una solicitud GET a "[www.ejemplo.com](http://www.ejemplo.com/)" indicando que el agente de usuario es un dispositivo móvil a través del encabezado "Sec-CH-UA-Mobile: 1". El campo "User-Agent" también proporciona información adicional sobre el agente de usuario, confirmando que se trata de un dispositivo iPhone con iOS 14.5 y utilizando el navegador Safari Mobile.

#### Header User-Agent

El encabezado "User-Agent" es un campo de encabezado HTTP que se utiliza para identificar el navegador web o el agente de usuario que realiza la solicitud. Proporciona información sobre el software y el dispositivo desde el cual se envía la solicitud.

El valor del encabezado "User-Agent" suele incluir el nombre y la versión del navegador, el sistema operativo y otra información relevante. Esto permite que el servidor ajuste la respuesta o proporcione contenido específico según las características del agente de usuario.

```
User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36
```

En este ejemplo, el valor del encabezado indica que el agente de usuario es un navegador Chrome en una computadora con Windows 10 de 64 bits. Además, muestra la versión específica del navegador y la información relacionada con el motor de renderizado WebKit.

#### Header content-type

El encabezado "Content-Type" es un campo de encabezado HTTP que se utiliza para especificar el tipo de contenido que se envía o se espera recibir en la respuesta del servidor. Indica el formato del cuerpo del mensaje HTTP.

El valor del encabezado "Content-Type" se compone de un tipo de medios y, en algunos casos, un subtipo y otros parámetros. Los tipos de medios más comunes incluyen "text/html" para contenido HTML, "application/json" para contenido JSON, "image/jpeg" para imágenes JPEG, entre otros.

```
Content-Type: application/json
```

En este ejemplo, el encabezado "Content-Type" indica que el cuerpo del mensaje contiene datos en formato JSON. Este encabezado permite que el servidor y el cliente se comuniquen y comprendan qué tipo de datos se están intercambiando, lo que es esencial para una interpretación y procesamiento adecuados del contenido.

#### Header Accept

El encabezado "Content-Type" es un campo de encabezado HTTP que se utiliza para especificar el tipo de contenido que se envía o se espera recibir en la respuesta del servidor. Indica el formato del cuerpo del mensaje HTTP.

El valor del encabezado "Content-Type" se compone de un tipo de medios y, en algunos casos, un subtipo y otros parámetros. Los tipos de medios más comunes incluyen "text/html" para contenido HTML, "application/json" para contenido JSON, "image/jpeg" para imágenes JPEG, entre otros.

```
Content-Type: application/json
```

En este ejemplo, el encabezado "Content-Type" indica que el cuerpo del mensaje contiene datos en formato JSON. Este encabezado permite que el servidor y el cliente se comuniquen y comprendan qué tipo de datos se están intercambiando, lo que es esencial para una interpretación y procesamiento adecuados del contenido.

#### Header Origin

El encabezado "Origin" es un campo de encabezado HTTP que se utiliza en el contexto de las políticas de origen cruzado (Cross-Origin Resource Sharing - CORS). Indica el origen del recurso o documento que realiza la solicitud HTTP. El origen generalmente está compuesto por el protocolo, el dominio y el puerto del sitio web que realiza la solicitud.

El propósito principal del encabezado "Origin" es permitir al servidor validar si una solicitud de recursos desde un origen específico debe ser permitida según las políticas CORS establecidas. El servidor utiliza este encabezado para determinar si la solicitud es segura y si el recurso solicitado puede ser compartido con el origen de la solicitud.

```
Origin: https://www.ejemplo.com
```

En este ejemplo, el encabezado "Origin" indica que la solicitud se originó desde el sitio web "[https://www.ejemplo.com](https://www.ejemplo.com/)". Cuando se realiza una solicitud a un recurso de otro origen, es decir, un dominio o puerto diferente al del sitio web actual, el navegador enviará automáticamente el encabezado "Origin" con la solicitud.



#### Header Sec-Fetch-Site

El encabezado "Sec-Fetch-Site" es un campo de encabezado HTTP utilizado para indicar el contexto de seguridad de la solicitud. Este encabezado se utiliza en navegadores modernos para ayudar a los servidores a comprender desde qué contexto o sitio se originó la solicitud.

El valor del encabezado "Sec-Fetch-Site" puede ser uno de los siguientes:

- "same-origin": Indica que la solicitud se originó desde el mismo origen (dominio, protocolo y puerto) que el recurso actualmente cargado. Esto significa que la solicitud proviene del mismo sitio web.
- "cross-site": Indica que la solicitud se originó desde un origen diferente al del recurso actualmente cargado. Esto significa que la solicitud proviene de otro sitio web.

```
Sec-Fetch-Site: same-origin
```

En este ejemplo, el encabezado "Sec-Fetch-Site" indica que la solicitud se originó desde el mismo sitio web que el recurso actualmente cargado. Esto puede ser útil para que el servidor comprenda el contexto de la solicitud y tome decisiones basadas en ello.



#### Header Sec-Fetch-Mode

El encabezado "Sec-Fetch-Mode" es un campo de encabezado HTTP utilizado para indicar el modo en que se realiza una solicitud y cómo se manejarán los datos en la respuesta. Este encabezado se utiliza principalmente en navegadores modernos y está relacionado con la seguridad y el control de recursos entre diferentes orígenes.

El valor del encabezado "Sec-Fetch-Mode" puede ser uno de los siguientes:

- "navigate": Indica que la solicitud se realiza para navegar a una nueva página o recurso. Se utiliza para solicitudes de navegación estándar, como hacer clic en un enlace o escribir una URL en la barra de direcciones del navegador.
- "cors": Indica que la solicitud se realiza como parte de una solicitud de origen cruzado (Cross-Origin Resource Sharing - CORS). Se utiliza para solicitudes de recursos desde un origen diferente al del sitio web actual.
- "nested-navigate": Indica que la solicitud se realiza dentro de un recurso solicitado previamente. Se utiliza para solicitudes secundarias o anidadas realizadas por la página o el recurso actual.

```
Sec-Fetch-Mode: cors
```

En este ejemplo, el encabezado "Sec-Fetch-Mode" indica que la solicitud se realiza como parte de una solicitud de origen cruzado (CORS). Esto significa que se está solicitando un recurso desde un origen diferente al del sitio web actual.



#### Header Sec-Fetch-Dest

El encabezado "Sec-Fetch-Dest" es un campo de encabezado HTTP utilizado para indicar el destino o la finalidad de una solicitud. Proporciona información adicional sobre cómo se espera que el navegador maneje la respuesta y el uso previsto del recurso solicitado.

El valor del encabezado "Sec-Fetch-Dest" puede ser uno de los siguientes:

- "document": Indica que la solicitud se realiza para obtener un recurso que se espera que sea un documento HTML completo o una página web.
- "image": Indica que la solicitud se realiza para obtener una imagen.
- "script": Indica que la solicitud se realiza para obtener un archivo de script, como JavaScript.
- "style": Indica que la solicitud se realiza para obtener un archivo de estilo, como CSS.
- "font": Indica que la solicitud se realiza para obtener una fuente tipográfica.
- "media": Indica que la solicitud se realiza para obtener contenido multimedia, como audio o video.

```
Sec-Fetch-Dest: document
```

El valor del encabezado "Sec-Fetch-Dest" puede influir en el comportamiento del navegador y cómo se procesa la respuesta. Por ejemplo, un navegador podría priorizar la carga y renderización de documentos antes que otros recursos, o aplicar diferentes políticas de almacenamiento en caché o seguridad según el destino especificado en el encabezado "Sec-Fetch-Dest".

#### Header Referer

El encabezado "Referer" (también conocido como "Referer") es un campo de encabezado HTTP que se utiliza para indicar la URL de la página web desde la cual se originó la solicitud actual. En otras palabras, proporciona información sobre la página que contiene un enlace o recurso que llevó al usuario a realizar la solicitud actual.

El valor del encabezado "Referer" contiene la URL completa de la página de referencia, incluyendo el protocolo (http:// o https://), el dominio y la ruta.

```
Referer: https://www.ejemplo.com/pagina-anterior.html
```

En este ejemplo, el encabezado "Referer" indica que la solicitud actual se originó desde la página "https://www.ejemplo.com/pagina-anterior.html".



#### Header Accept-Encoding

El encabezado "Accept-Encoding" es un campo de encabezado HTTP que se utiliza para indicar al servidor qué algoritmos de compresión o codificación de contenido puede manejar el cliente. Permite al cliente especificar las opciones de compresión que puede aceptar en la respuesta del servidor.

El valor del encabezado "Accept-Encoding" puede incluir uno o varios algoritmos de compresión separados por comas. Algunos ejemplos comunes son "gzip", "deflate" y "br" (Brotli).

```
Accept-Encoding: gzip, deflate
```

En este ejemplo, el encabezado "Accept-Encoding" indica que el cliente puede aceptar la compresión utilizando los algoritmos "gzip" y "deflate". Esto significa que el servidor tiene la opción de comprimir la respuesta utilizando uno de esos algoritmos antes de enviarla al cliente, lo que puede reducir el tamaño de los datos transferidos y mejorar el rendimiento.



#### Header Accept-Language

El encabezado "Accept-Language" es un campo de encabezado HTTP que se utiliza para indicar al servidor los idiomas preferidos por el cliente para la respuesta. Permite al cliente especificar qué idiomas puede entender y qué idiomas prefiere para el contenido que se enviará desde el servidor.

El valor del encabezado "Accept-Language" puede contener uno o varios códigos de idioma separados por comas, en orden de preferencia. Los códigos de idioma suelen seguir la convención de dos letras del estándar ISO 639-1, como "en" para inglés, "es" para español, "fr" para francés, etc.

```
Accept-Language: en-US,en;q=0.9,es;q=0.8
```

En este ejemplo, el encabezado "Accept-Language" indica que el cliente prefiere recibir la respuesta en inglés de Estados Unidos ("en-US") como primera opción, seguida de inglés en general ("en") con un factor de calidad de 0.9, y español ("es") con un factor de calidad de 0.8. Los factores de calidad indican la preferencia relativa entre los idiomas especificados.