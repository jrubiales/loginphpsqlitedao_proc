
# Login PHP con SQLite (paradigma procedural).

Proyecto básico para demostrar el funcionamiento de la clase SQLite3 realizando un login en PHP haciendo uso del paradigma procedural.
La base de datos tiene una tabla llamada "users" donde se almacena la información de los usuarios. El sistema de login hace uso de hashes para almacenar las contraseñas cifradas y que no queden visibles.

## Estructura general del proyecto:

- Directorio "public". En este directorio se almacena código relacionado con la capa de presentación, el frontend de la web. En este caso, un archivo index.php con un formulario y la lógica del procesamiento de la entrada de datos.

- Directorio "resources": Contiene la base de datos en un directorio llamado "database".

- Directorio "src": Contiene los ficheros fuente con la lógica de la app (backend).

## Generación de una password:

    php .\src\generate_hash.php

El hash devuelto debemos introducirlo manualmente en el fichero de base de datos.

## Ejecución del proyecto: 

- Desde el directorio "public", ejecutamos lo siguiente: php -S localhost:8000
- También podemos ejecutar el proyecto desde algún entorno de desarrollo, tipo xampp, docker, etc...

## Datos por defecto: 

- Username: test
- Password: y10b3z$AytrOwz
