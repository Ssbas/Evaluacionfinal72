<?php

require('conector.php');

$con = new ConectorBD();
$con->initConexion('agenda');

$hash = password_hash('123456', PASSWORD_DEFAULT);

$data['username']= '"user1@gmail.com"';
$data['password']= '"'.$hash.'"';
$data['nombre']='"sebastian"';
$data['fecha_nacimiento']='"1984-01-01"';

$con->insertData('usuarios', $data);
$hash = password_hash('123456', PASSWORD_DEFAULT);

$data['username']= '"user2@gmail.com"';
$data['password']= '"'.$hash.'"';
$data['nombre']='"Carlos"';
$data['fecha_nacimiento']='"1994-01-01"';

$con->insertData('usuarios', $data);
$hash = password_hash('123456', PASSWORD_DEFAULT);

$data['username']= '"user3@gmail.com"';
$data['password']= '"'.$hash.'"';
$data['nombre']='"Luis"';
$data['fecha_nacimiento']='"1994-01-01"';

$con->insertData('usuarios', $data);




?>
