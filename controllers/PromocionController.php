<?php 
include_once 'models/promocion.php';
class PromocionController extends Controller{
	
	function __construct(){
		parent::__construct();
		$this->view->promociones=array();
		$this->view->mensaje="";
		$this->view->error="";		
	}
	
	function render(){
		$this->view->render('promocion/subirPromocion');
	}

	function verPromociones() {
		$this->view->promociones=$this->model->allPromociones();
		$this->view->render('promocion/verPromociones');
	}

	function cargarPromocion(){
		$promocion  =new Promocion();
		$foto     	= $_FILES['imagen']['name'];//nombre del archivo
		$tmp_name   = $_FILES['imagen']['tmp_name'];//archivo tempral
		$tipoimg    = pathinfo($foto, PATHINFO_EXTENSION);//Tipos de imagenes
	    $sizeimg    = $_FILES['imagen']['size'];//tamaño de las imagenes
	    $permitidos = array('jpg', 'jpeg');
		$limite_kb  = 16384;
		//echo "Aca";
		if($foto!="" ){
			if (in_array($tipoimg, $permitidos)){//Control de tipo de archivo

				if($sizeimg <= $limite_kb * 1024){//Control de tamaño de imagen

					//Creamos la carpeta de destino para la imagen
					$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/proyecto/PintPer/public/imagenes-usuarios/promociones/';

					if (!file_exists($carpeta_destino)) {//verificamos si la carpeta existe
				    	mkdir($carpeta_destino, 0777, true);// sino existe la creamos
					}
					
					//Generamos un nombre nuevo para la imagen
					$newName=$this->generarNombre($tipoimg);

					$ruta=$carpeta_destino.$newName;

					//move el archivo a la carpeta creada
					if(move_uploaded_file($tmp_name,$ruta)){

						if($this->dimensionarJPEG($ruta)){//Re dimensionamos la imagen
							$promocion->setImagen($newName);
							if($this->model->guardarPromocion($promocion)){
								$this->view->mensaje="Se guardo correctamente";
								$this->render();
							}else{
								$this->view->error="Error al intentar guardar!!!";
								$this->render();
							}
						}

					}else{
						$this->view->error="Error al Cargar la imagen";
						$this->render();
					}
					
				}else{					
					$this->view->error="Tamaño de imagen demasiado grande";
					$this->render();
				}

			}else{				
				$this->view->error="Error o tipo de arhivo no permitido";
				$this->render();
			}

		}else{
			$this->view->error="Debe subir una imagen de su promocion";
			$this->render();
		}
	}

	/*************************************************************************
	********Método con rand() para generar nombre de archivo al azar**********
	*************************************************************************/    
	function generarNombre($ext) {
		$length           = 7;
	    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString     = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    	
	    $randomString="promocion_".$randomString.'.'.$ext;
	    return $randomString;
	}

	/********************************************************
	************Método para dimensionar imagenes*************
	********************************************************/
	function dimensionarJPEG($rutaImagen,$anchoThumb = 1200, $altoThumb = 700, $calidad = 75){
		
		$original = @imagecreatefromJPEG($rutaImagen);
		if (!$original)
		{
			$original= imagecreatefromstring(file_get_contents($rutaImagen));
		}

		if ($original){
			$thumb = imagecreatetruecolor($anchoThumb,$altoThumb);

			if ($thumb){
				$ancho = imagesx($original);
				$alto  = imagesy($original);

				if(imagecopyresized($thumb,$original,0,0,0,0,$anchoThumb,$altoThumb,$ancho,$alto)){
					$resultado = imagejpeg($thumb,$rutaImagen,$calidad);
					return true;
				}else{
					return false;
				}
			}
		}
		return false;
	}

}