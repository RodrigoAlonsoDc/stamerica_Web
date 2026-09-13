<?php  

require_once 'controllers/errores.php';

class App{

	function __construct(){
		// echo 'Nueva app';
		
		$url = isset($_GET['url']) ? $_GET['url']: null;
		$url = rtrim($url, '');
		$url = explode('/', $url);

		// CODIGO PARA QUE LA PAGINA TOME COMO INDEX EL ARCHIVO MAIN
		// CUANDO SE INGRESA SIN DEFINIR CONTROLADOR
		if (empty($url[0])) {
			$archivoController = 'controllers/inicio.php';
			require_once $archivoController;
			$controller = new Inicio();
			$controller->loadModel('inicio');
			$controller->render();
			return false;
		}

		// var_dump($url);
		$archivoController = 'controllers/' . $url[0] . '.php';

		if (file_exists($archivoController)) {
			require_once $archivoController;
			$controller = new $url[0];
			$controller->loadModel($url[0]);

			if (isset($url[1])) {
				$controller->{$url[1]}();
			}else{
				$controller->render();
			}
		}else{
			$controller = new Errores();
		}
	}
}

?>