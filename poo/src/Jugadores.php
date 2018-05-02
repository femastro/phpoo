<?php
    class Jugadores extends Conectar 
    {

    	public function all($search) 
        {

    		$link = $this->connection;

    		$sql = $link->prepare('SELECT personas_id as personasId, personas_name as personasName, personas_edad as personasEdad, personas_dni as personasDni, personas_usu as personasUsu, personas_pass as personasPass FROM usuarios WHERE personas_name like :name ');

    		$sql->execute([':name'=>$this->personasName=$search]); // ejecuta el SQL, con los datos recibido.

    		$resultado = $sql->fetchALL(PDO::FETCH_CLASS, 'Jugadores'); //Vuelva la informacion recibida de la BD a la Clase.

    		return $resultado;// Devuelve el Array recibido.
    	}

    	public function getPersonasId() {
    		return $this->personasId;
    	}
    	public function getPersonasName() {
    		return $this->personasName;
    	}
    	public function getPersonasEdad() {
    		return $this->personasEdad;
    	}

    }
?>
