<?php
	namespace App;
	
	use MF\Init\Bootstrap;

	class Route extends Bootstrap{
		protected function initRoutes(){
			//indexController	

			$routes['index'] = array(
				'route' =>'/',
				'controller'=>'AppController',
				'action'=>'solicitarCadastro'
			);
			
			$this->setRoutes($routes);
		}
	}
 ?>