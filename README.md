# Delikat
Proyecto desarrollado por CST con el framework [CodeIgniter](https://www.codeigniter.com/).

## Configuración
Al descargar el proyecto cambie el nombre del archivo `env` a `.env`, dentro de ese archivo se encuentra la configuración del proyecto, solo se configura la base de datos.
```
#-------------------------------------
# DATABASE
#-------------------------------------

database.default.hostname = localhost
database.default.database = database
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
```
Si desea conectarse con la base de datos del servidor la configuración se encuentra en [Trello]( https://trello.com/c/Xf4Ms3jk/16-proyecto).

## Ejecutar el proyecto
Abre el archivo `run.bat` o en consola ubicado en la carpeta del proyecto ejecute `php spark serve`, posteriormente el proyecto se iniciará en `http://localhost:8080/`

### Ejecutar con otro puerto
Si desea cambia el puerto deberá configurar `baseURL` en el archivo `.env`
```
#-----------------------------------------
# APP
#-----------------------------------------

app.baseURL = 'http://localhost:[Puerto]/'
```

Posteriormente en consola ubicado en la carpeta del proyecto ejecute `php spark serve --port [Puerto]` o edite el puerto en el archivo `run.bat`
```
start "" http://localhost:[Puerto]/
php spark serve --port [Puerto]
```