<?php
require_once './Controller/Product.php';
require_once './Model/Core/Request.php';
class Front{

		public static function init(){
			
				$request=new Request();

				$controllerName=ucfirst($request->getGet('c'));
				$actionName=$request->getGet('a')."Action";
				require_once "./Controller/{$controllerName}.php";
				$product=new $controllerName();
				$product->$actionName();

		}
}


?>