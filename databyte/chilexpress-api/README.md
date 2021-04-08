# Paquete Chilexpress API

Package Chilexpress API Connection

Instalación:

1. Agregar al composer.json:
~~~
"require": {
	"databyte/chilexpresss-api": "dev-master"
},
~~~
~~~
"repositories": [
	{
		"type": "path",
		"url": "./packages/databyte/chilexpress-api/"
	}
]
~~~

Nota: Reemplazar "databyte/chilexpress-api": "dev-master" por "databyte/chilexpress-api": "dev-develop" o "databyte/chilexpress-api": "@dev" para entorno de desarrollo.

2. Ejecutar en consola el comando `composer update`

3. Ejecutar en consola el comando `php artisan vendor publish` - publicar la configuración del paquete chilexpress-api. Revisar que el archivo chilexpress-api.php se encuentre en la carpeta config del proyecto luego de ejecutar el comando.

4. Ejecutar en consola el comando `php artisan migrate`
