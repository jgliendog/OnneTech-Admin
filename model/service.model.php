<?php 
include('controller/method.controller.php');
include_once('controller/setting.controller.php');

$ListTable = new ListData($conexion);


$Vista = $ListTable->ListResultFile($conexion, 'fservice');
$row = count($Vista);

include('views/service.view.php');