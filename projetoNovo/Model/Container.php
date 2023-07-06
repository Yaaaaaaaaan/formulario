<?php
	namespace projetoNovo\Model;
	use projetoNovo\Connection;
	class Container{
		public static function getModel($model){
			$class = "\\projetoNovo\\Models\\".ucfirst($model);
			$conn= Connection::getDb();
			return new $class($conn);
		}
	}
?>
