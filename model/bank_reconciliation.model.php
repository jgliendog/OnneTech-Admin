<?php 
include('controller/method.controller.php');
include_once('controller/setting.controller.php');

$ListTable = new ListData($conexion);


$Vista = $ListTable->ListResultFile($conexion, 'fbank');
$row = count($Vista);

include('views/bank_transactions.view.php');