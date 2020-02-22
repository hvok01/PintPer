<?php
require_once 'models/cerveza.php';
class EstiloController extends Controller{
	
	function __construct(){
		parent::__construct();
		$this->view->user=array();
		$this->view->mensaje="";
		$this->view->id_p=0;
	}
	
	function verModuloEstilos() {
		$this->view->render('estilos/moduloVerEstilos');
	}
	
	function agregarEstilo(){
		if($this->model->comprobarLocales()){
			$this->view->render('estilos/agregarEstilos');	
		}		
	}

	function verMisEstilos(){
		$this->view->render('estilos/verEstilos');
	}

	function editarEstilos(){
		$this->view->render('estilos/editarEstiloDuenio');	
	}

	function guardarEstilo(){
		$estilo = new Cerveza();		
		$nombre     = $_POST['Nombre'];
		$tipo       = $_POST['Tipo'];
		$descripcion= $_POST['Descripcion'];		
		$imagen     = $_FILES['imagen']['name'];//nombre del archivo		
		$tmp_name   = $_FILES['imagen']['tmp_name'];//archivo tempral		
		$tipoimg    = $_FILES['imagen']['type'];//Tipos de imagenes	    
	    $sizeimg    = $_FILES['imagen']['size'];//tamaño de las imagenes
	    $carpeta    = $_SESSION['usuario_registrado']->PropietarioId."_".$_SESSION['usuario_registrado']->Nombre;
		
		$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
		$limite_kb = 16384;

		
		if (in_array($tipoimg, $permitidos)){//Control de tipo de archivo

			if($sizeimg <= $limite_kb * 1024){//Control de tamaño de imagen

				//Creamos la carpeta de destino para la imagen
				$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/proyecto/PintPer/public/imagenes-usuarios/'.$carpeta.'/';

				if (!file_exists($carpeta_destino)) {//verificamos si la carpeta existe
			    	mkdir($carpeta_destino, 0777, true);// sino existe la creamos			    	
				}
				//move el archivo a la carpeta creada
				$newName=$this->generarNombre(strlen($imagen),$tipoimg);	 
				move_uploaded_file($tmp_name,$carpeta_destino.$newName);
				
				$estilo->setNombre($nombre);
				$estilo->setTipo($tipo);
				$estilo->setDescripcion($descripcion);
				$estilo->setImagen($newName);
				$this->model->addEstilo($estilo);
				
				
			}
			else{

				echo "Tamaño de imagen demasiado grande";
			}

		}		
		else{
			echo "Error es un tipo de arhivo no permitido";
		}

		
		
	}

	
    //Método con rand()
	function generarNombre($length = 10,$ext) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    $ext=rtrim($ext,'/');
		$ext=explode('/',$ext);		
	    $randomString='Img'.$randomString.'.'.$ext[1];
	    return $randomString;
	} 
}

?>