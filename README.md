<h2 align="center">Learn CRUD PHP</h2>


A continuación crearemos un proyecto completo de CRUD con PHP y MYSQL, luego gestionaremos el acceso con sesiones desde la tabla usuario.
Realizando CRUD (Create, Read, Update and Delete)

## Creación de la base de datos

```
CREATE DATABASE php_mysql_crud;

use php_mysql_crud;

CREATE TABLE task(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE task;

```


## Conexión a la base de datos

```
<?php
// Conexion con la base de datos
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'php_mysql_crud'
)or die(mysqli_error($mysqli));


```



![image](https://github.com/NevarezOrtegaEdna/UIII_CRUDV2_Inmobiliaria/assets/143743281/9f0c50d3-5fc2-4cfb-a860-fbbaa09423c0)
![image](https://github.com/NevarezOrtegaEdna/UIII_CRUDV2_Inmobiliaria/assets/143743281/5545bbcb-02ab-4f41-b592-1d0879f6b1d9)
![image](https://github.com/NevarezOrtegaEdna/UIII_CRUDV2_Inmobiliaria/assets/143743281/d6843ef5-fdf4-4e33-b898-4f2c4b4d8431)
![image](https://github.com/NevarezOrtegaEdna/UIII_CRUDV2_Inmobiliaria/assets/143743281/9eb922f1-9b4f-4c7c-81bf-3ab9ba8d12af)
![image](https://github.com/NevarezOrtegaEdna/UIII_CRUDV2_Inmobiliaria/assets/143743281/83d12568-b12d-4a31-a5dc-837120d66218)
![image](https://github.com/NevarezOrtegaEdna/UIII_CRUDV2_Inmobiliaria/assets/143743281/72054686-992a-45b2-a0dc-9f96c1060a52)
![image](https://github.com/NevarezOrtegaEdna/UIII_CRUDV2_Inmobiliaria/assets/143743281/eca7451c-3ed2-4599-a9ab-1de2647ce01b)







