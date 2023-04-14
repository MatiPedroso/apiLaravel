# apiLaravel
Es una api hecha con laravel 8 que consume a la api Rick y Morty.

# Instalacion:
_ Para levantar la api localmente en necesario php v8 y laravel v8
_abrir la carpeta desde una terminal y ejecutar el comando composer install

# Routes:

home:
http://127.0.0.1:8000

characters:
http://127.0.0.1:8000/characters


Episodes:
http://127.0.0.1:8000/episodes

# Tecnologias: 
Se hizo uso principalmente de laravel y sus librerias, php en mayor escala y se dio estilo a las views con Bootstrap.

# Bug: 
Al dirigirse al la ruta http://127.0.0.1:8000/episodes y al hacer click en "Ver protagonistas" arroja error porque tarda demasiado en hacer el curl a la api, pero al refrescar la pagina un par de veces muestra los cambios correctamente.

# Idea para mejorar el rendimiento 
Una idea para mejorar el rendimiento es que al hacer la consulta se guarde los resultados en caché mejorando asi el tiempo de respuesta