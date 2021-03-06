<?php 
include('controller/method.controller.php');
include_once('controller/setting.controller.php');

$ListTable = new ListData($conexion);

$Storage = $ListTable->ListResultFile($conexion,'fdepartament','FCT_ID');
$System =$ListTable->ListResultFile($conexion,'fsystem','FS_AUTOINCREMENT');





include('views/transfer.view.php');