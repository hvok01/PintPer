<?php
class Controller{
	function __construct(){
		//echo "<p>Controlador base</p>";
		$this->view=new View();
	}
	
	function loadModel($model){
		$model=explode('Controller',$model);		
		$url='models/'.$model[0].'model.php';
		if(file_exists($url)){
			require $url;
			$modelName=$model[0].'Model';
			$this->model=new $modelName();
		}
	}
}
?>