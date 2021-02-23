# Delikat
Proyecto desarrollado por CST con el framework [CodeIgniter](https://www.codeigniter.com/).

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
Abre el archivo `run.bat` o en consola ubicado en la carpeta raíz ejecute `php spark serve --port 8088`, posteriormente el proyecto se iniciará en `http://localhost:8088/`

Si desea cambia el puerto deberá configurar `baseURL` el archivo `.env` y ejecutar `php spark serve --port [Puerto]`
```
#---------------------------------------
# APP
#---------------------------------------

  app.baseURL = 'http://localhost:[Puerto]/'
```
