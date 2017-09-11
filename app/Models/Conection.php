<?php namespace App\Models;

class Conection{

	private $m_mysqli;

	public function __construct(){

		$this->m_mysqli = new \mysqli(
							PARAMS_DB['host'],
							PARAMS_DB['user'],
							PARAMS_DB['pwd'],
							PARAMS_DB['db']
							);		
		/*verificar la conexion*/

		if($this->m_mysqli->connect_errno){
			echo "Hubo un error en la conexión a la BD.<br>";
			echo 'Codigo de Error: '.$this->m_mysqli->connect_errno."<br>";
			echo 'Mensaje de Error: '.$this->m_mysqli->connect_error."<br>";
		}
		$this->m_mysqli->query("SET NAMES 'utf8'");

	}


	public function simpleRequest($sql){
		$this->m_mysqli->query($sql);
		$this->m_mysqli->close();
	}

	public function returnRequest($sql){
		$data = $this->m_mysqli->query($sql);
		$this->m_mysqli->close();
		return $data;
	}

	public function viewArticle($sql,$id){
		//preparar
		$sentencia = $this->m_mysqli->prepare($sql);
		//vincular
		$sentencia->bind_param('i',$id);
		//ejecutar
		$sentencia->execute();
		//procesar
		$resultado = $sentencia->get_result();

		$this->m_mysqli->close();
		$sentencia->close();
		return $resultado;

	}
}