<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
<p align="center">
    <img src="https://iupac.org/wp-content/uploads/2021/02/ITSX-Logo.png" height="120">
</p>

# API para la Comisión Estatal de Busqueda del estado de Veracruz.
## Descripción breve.
Esta es una API que prestara servicios a una aplicacion de escritorio y a una aplicacion movil para la Comision Estatal de Busqueda del estado de Veracruz, cuya finalidad es buscar y encontrar personas desaparecidas.

## Cómo correr el proyecto.
Para cualquiera de los casos descritos debajo, el desarrollador debe tener su propio archivo `.env` en la raíz del proyecto. Este archivo es privado entre los desarrolladores y sus entornos de desarrollo. El proyecto incluye el archivo `.env.example` que brinda una configuración de ejemplo.

**La siguiente guia esta pensada para poder ser instalada corriendo los comandos desde PhpStorm en el visualizador de markdown, pero sin problemas se pueden copiar y pegar los comandos.**

### Docker.
Se recomienda utilizar docker ya que está compartimentalizado del sistema operativo del desarrollador, permitiéndole trabajar en un entorno funcional de manera muy rápida y sin afectar las configuraciones que este pueda tener en su computadora localmente.

#### Archivo `.env`.
Se recomienda utilizar la configuracion de ejemplo provista en `.env.example`:
```bash
cp .env.example .env
```
De utilizarse una instalacion local o de desplegar en servidor, utilizar la direccion IP o dominio correspondiente de donde se encuentre la base de datos.

#### Inicializar el entorno de desarrollo.
Si se utiliza windows, se debe instalar [wsl](https://learn.microsoft.com/en-us/windows/wsl/install) (seguir **TODO** el proceso de instalación hasta el final, generando un usuario y contraseña) y posteriormente [docker](https://docs.docker.com/get-docker/). En caso de utilizar Windows y WSL, se recomienda clonar el proyecto dentro del sistema de archivos de WSL y no en las carpetas de Windows:
```bash
peloponeso@desktop:/mnt/c/Users/tanil$ cd #aqui no
peloponeso@desktop:~$ #aqui
```

Usualmente no se menciona, pero en caso de WSL y Windows, al instalarse docker, hay que asegurarse que la casilla ubicada en `Settings > Resources > WSL Integration > Enable integration with my default WSL distro` esté marcada.

Se recomienda también agregar el alias de la herramienta `sail` para interactuar con docker y el proyecto de manera más fácil. Se dará por hecho que este alias existe en lo que resta de este documento. Este alias solo funciona dentro de la carpeta del proyecto. En caso de bash:
```bash
echo "alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'" >> ~/.bashrc
```

Debido a la frecuencia del uso de este comando, tambien se recomienda agregar el siguiente alias:
```bash
echo "alias migrate='sail artisan migrate:fresh --seed'" >> ~/.bashrc
```

Y por ultimo, se debe recargar el archivo de configuracion de bash.
```bash
source ~/.bashrc
```

Una vez clonado el proyecto, y con una terminal abierta dentro del directorio del proyecto clonado, se da el siguiente comando:
```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```

Una vez este clonado el proyecto, exista un archivo `.env`, este el alias del sail configurado correctamente, y se haya terminado de ejecutar el anterior comando, se da el comando desde la raiz del proyecto:
```sh
sail up
```

Los dos anteriores comandos tardan un poco de tiempo en ejecutarse.

Cuando el anterior termina de ejecutarse (empiezan a salir logs de sistema), quiere decir que la aplicación se está ejecutando de manera exitosa.

Se genera una llave para la aplicacion:
```sh
sail artisan generate:key
```

Se ejecutan las migraciones:
```sh
migrate
```
Refiérase a la documentación de [sail](https://laravel.com/docs/10.x/sail) para saber mas al respecto sobre el proceso de replicacion del proyecto.

Y el proyecto estara listo para el desarrollo y prueba, puede generar una api key en la ruta `localhost/api/token`, ya sea por metodo GET o POST con los siguentes parametros:

|campo|valor|
|-|-|
|email|test@example.com|
|password|password|
|token_name|Arbitrario, puede utilizar cualquier cadena de texto|

El valor del campo `plainTextToken` debera ser enviado por el header HTTP de `Authorization` como un `Bearer` token para realizar llamadas autenticadas a la API.
