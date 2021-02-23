# Delikat
Proyecto desarrollado con el framework [CodeIgniter](https://www.codeigniter.com/)  por CST.

## Configuración
Al descargar el proyecto cambie el nombre del archivo `env` a `.env`, dentro de ese archivo se encuentra la configuración del proyecto, solo se configura la base de datos.
```
#---------------------------------------
# DATABASE
#---------------------------------------

  database.default.hostname = localhost
  database.default.database = database
  database.default.username = root
  database.default.password = 
  database.default.DBDriver = MySQLi
```

## Ejecutar el proyecto
Abre el archivo `run.bat` o en consola ubicado en la carpeta raíz ejecute `php spark serve --port 8088` y el proyecto se iniciará en `http://localhost:8088/`

Si desea cambia el puerto deberá configurar el archivo `.env`
```
#---------------------------------------
# APP
#---------------------------------------

  app.baseURL = 'http://localhost:8088/'
```
