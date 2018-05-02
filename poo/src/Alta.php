<?php
	class Alta extends Conectar
	{

		public function save()
		{

			$link=$this->connection;

			$stmt="INSERT INTO usuarios (`personas_id`,`personas_name`,`personas_edad`) VALUES (NULL,:name ,:edad);";
			// PDO
			$query=$link->prepare($stmt);

			// PDOStatement
			$query->execute([":name"=>$this->personasName,":edad"=>$this->personasEdad]);

		}

	}

/// phpdelusions.net

 ?>
