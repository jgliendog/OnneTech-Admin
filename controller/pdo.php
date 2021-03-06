<?php 

class Conexion{
	
	public function get_conexion()	{
          $host_name = 'localhost';
          $database = 'akirapos';
          $user_name = 'root';
          $password = '1234';

          $conexion = null;
          try {
            $conexion = new PDO("mysql:host=$host_name; dbname=$database;charset=utf8", $user_name, $password);
            // echo "Conexión Establecida";
            return $conexion;
          } catch (PDOException $e) {
            echo "Error!: " . $e->getMessage() . "<br/>";
            die();
          }
		$conexion = null;
}

}
