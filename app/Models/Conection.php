<?php namespace App\Models;

class Conection{

	private $conection;

	public function __construct(){

		$this->conection = new \mysqli(
							PARAMS_DB['host'],
							PARAMS_DB['user'],
							PARAMS_DB['pwd'],
							PARAMS_DB['db']
							);		
		/*verificar la conexion*/

		if($this->conection->connect_errno){
			echo "Hubo un error en la conexión a la BD.<br>";
			echo 'Codigo de Error: '.$this->conection->connect_errno."<br>";
			echo 'Mensaje de Error: '.$this->conection->connect_error."<br>";
		}
		$this->conection->query("SET NAMES 'utf8'");

	}


	public function simpleRequest($sql){
		$this->conection->query($sql);
		$this->conection->close();
	}

	public function returnRequest($sql){
		$data = $this->conection->query($sql);
		$this->conection->close();
		return $data;
	}

	public function viewArticle($sql,$id){
		//preparar
		$sentencia = $this->conection->prepare($sql);
		//vincular
		$sentencia->bind_param('i',$id);
		//ejecutar
		$sentencia->execute();
		//procesar
		$resultado = $sentencia->get_result();
		return $resultado;

	}
}