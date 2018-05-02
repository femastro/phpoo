<?php
	class Borrar extends Conectar
	{

		public function delete($opcion)
		{

			$link=$this->connection;

			$stmt="DELETE FROM usuarios WHERE personas_id=:id";
			// PDO
			$query=$link->prepare($stmt);

			// PDOStatement
			$query->execute([":id"=>$opcion]);

		}

	}

/// phpdelusions.net

 ?>