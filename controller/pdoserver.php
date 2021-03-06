<?php 

class Conexion{
	
	public function get_conexion()	{
          $conexion = null;	
		$host_name = 'db745264308.db.1and1.com';
	  	$database = 'db745264308';
	  	$user_name = 'dbo745264308';
	  	$password = 'Q89jl1903.';

          $conexion = null;
          try {
            $conexion = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
            echo "Conexión Establecida";
            return $conexion;
          } catch (PDOException $e) {
            echo "Error!: " . $e->getMessage() . "<br/>";
            die();
          }
		$conexion = null;
}

}