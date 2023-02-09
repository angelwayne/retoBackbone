## Así resolví el reto:

Para este micro desarrollo , utilice [Laravel](https://laravel.com) en su versión 9, sin ningún método de autenticación únicamente agregue una pequeña validación por si el usuario proporciona un zip_code no encontrado o un formato diferente al de un zip_code.

Utilice [Laravel Sanctum](https://laravel.com/docs/9.x/sanctum#main-content) permite que cada usuario de su aplicación genere múltiples tokens de API para su cuenta. A estos tokens se les pueden otorgar habilidades / ámbitos que especifican qué acciones pueden realizar los tokens. 

Puede instalar Laravel Sanctum a través del administrador de paquetes Composer:

- composer require laravel/sanctum

A continuación, debe publicar los archivos de configuración y migración de Sanctum mediante el vendor:publishcomando Artisan. El sanctumarchivo de configuración se colocará en el configdirectorio de su aplicación:

- php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"

Finalmente, debe ejecutar las migraciones de su base de datos. Sanctum creará una tabla de base de datos en la que almacenar tokens API:

- php artisan migrate

La información proporcionada en el portal del [Servicio Postal de México]( https://www.correosdemexico.gob.mx/SSLServicios/ConsultaCP/CodigoPostal_Exportar.aspx) fue cargada a una base de datos de Mysql.

- Únicamente busca en el catálogo de ‘Zip_codes’ del Distrito Federal.
- Para probar mis tiempos en ambiente local utilice la herramienta [Postman](https://www.postman.com/).
- La versión de [PHP]( https://www.php.net/downloads) que necesitas para replicar este proyecto es  8.1 o superior
- La base de datos para pruebas locales la puedes descargar [aquí]( https://drive.google.com/file/d/1mMGPdCwWYB2hUH0peZ6xOUmRC0m1DAlO/view?usp=sharing) 


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a><a href="https://www.mysql.com" target="_blank"><img src="https://www.logo.wine/a/logo/MySQL/MySQL-Logo.wine.svg" width="300" alt="Mysql Logo"></a></p>


## Genera tu propia clave:

Recomiendo crear tu propia clave para tu ambiente de desarrollo con el siguiente comando

- php artisan key:generate
