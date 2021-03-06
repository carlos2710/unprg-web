<?php

/**
 * Configuración general del proyecto
 *
 * Esta clase contiene datos, configuraciones y
 * y funciones importantes para el proyecto
 *
 * @author Marlon Enmanuel Montalvo Flores
 */

class config {

	public static $isDeveloping = true;   					// indica si es producción o desarrollo

	public static $path_dom = 'http://www.unprg.edu.pe/';	// dominio del proyecto
	public static $path_dev = 'http://unprg.local/';     	// dominio para desarrollo
	public static $path_int = '16';       					// carpeta interna del proyecto


	/**
	* Genera la ruta para un archivo
	*
	* @param $withDom Incluir el dominio
	* @param $path Ruta
	* @return Ruta relativa o absulta
	*/
	public static function getPath($withDom, $path){
		$rel = false;
		if(substr($path, 0, 1) == '/'){
			$path = substr($path, 1);
			$rel = true;
		}
		if($withDom){
			return ((config::$isDeveloping)?config::$path_dev:config::$path_dom).config::$path_int.'/'.$path;
		}else{
			return (($rel)?'/':'').config::$path_int.'/'.$path;
		}
	}

	public static function getLink($path){
		return '<link rel="stylesheet" type="text/css" href="'.$path.'">';
	}

	public static function getScript($path){
		return '<script src="'.$path.'"></script>';
	}

}

if(isset($_GET['php'])){
	echo phpinfo();
}
?>