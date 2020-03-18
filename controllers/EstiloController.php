<?php
require_once 'models/cerveza.php';
class EstiloController extends Controller{
	
	function __construct(){
		parent::__construct();
		$this->view->local=array();
		$this->view->estilos=array();
		$this->view->mensaje="";
		$this->view->error="";		
	}
	
	function verModuloEstilos($idlocal) {
		$this->view->local=$this->model->getLocal($idlocal[0]);		
		$this->view->estilos=$this->model->allEstilos();
		$this->view->render('estilos/moduloVerEstilos');
	}
	
	function agregarEstilo($idlocal){
		if($this->model->comprobarLocales()){
			$this->view->id_L=$idlocal[0];
			$this->view->render('estilos/agregarEstilos');	
		}		
	}

	function verMisEstilos($local){
		$this->view->local=$this->model->getLocal($local[0]);		
		$this->view->estilos=$this->model->allEstilos();
		$this->view->render('estilos/verEstilos');
	}

	function editarEstilos($local){
		$this->view->local=$this->model->getLocal($local[0]);
		$id=$_POST['cerveza_id'];
		$this->view->estilos=$this->model->getEstilo($id);
		$this->view->render('estilos/editarEstiloDuenio');	
	}

	/***********************************************************************
	**********Método para guardar los estilos de cerveza nuevos*************
	***********************************************************************/
	function guardarEstilo($idlocal){		
		$estilo = new Cerveza();
		$nombre     = $_POST['Nombre'];
		$tipo       = $_POST['Tipo'];
		$descripcion= $_POST['Descripcion'];
		$imagen     = $_FILES['imagen']['name'];//nombre del archivo
		$tmp_name   = $_FILES['imagen']['tmp_name'];//archivo tempral
		$tipoimg    = pathinfo($imagen, PATHINFO_EXTENSION);//Tipos de imagenes
	    $sizeimg    = $_FILES['imagen']['size'];//tamaño de las imagenes
	    $carpeta    = $_SESSION['usuario_registrado']->PropietarioId."_".$_SESSION['usuario_registrado']->Nombre;
	    
		$permitidos = array('jpg', 'jpeg');
		$limite_kb  = 16384;
		
		if (in_array($tipoimg, $permitidos)){//Control de tipo de archivo

			if($sizeimg <= $limite_kb * 1024){//Control de tamaño de imagen

				//Creamos la carpeta de destino para la imagen
				$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/proyecto/PintPer/public/imagenes-usuarios/'.$carpeta.'/';

				if (!file_exists($carpeta_destino)) {//verificamos si la carpeta existe
			    	mkdir($carpeta_destino, 0777, true);// sino existe la creamos
				}
				
				//Generamos un nombre nuevo para la imagen
				$newName=$this->generarNombre(strlen($imagen),$tipoimg);

				$ruta=$carpeta_destino.$newName;

				//move el archivo a la carpeta creada
				if(move_uploaded_file($tmp_name,$ruta)){
					if($this->dimensionarJPEG($ruta)){//Re dimensionamos la imagen
						$estilo->setNombre($nombre);
						$estilo->setTipo($tipo);
						$estilo->setDescripcion($descripcion);
						$estilo->setImagen($carpeta.'/'.$newName);
						$estilo->setLocalId($idlocal[0]);
						if($this->model->addEstilo($estilo)){
							$this->view->id_L=$idlocal[0];
							$this->view->mensaje="Se cargo el estilo con exito";
							$this->view->render('estilos/agregarEstilos');
						}else{
							$this->view->id_L=$idlocal[0];
							$this->view->error="Error al cargar estilo";
							$this->view->render('estilos/agregarEstilos');
						}
					}
				}
				else{
					$this->view->id_L=$idlocal[0];
					$this->view->error="Error al Cargar la imagen";
					$this->view->render('estilos/agregarEstilos');
				}
				
			}
			else{				
				$this->view->id_L=$idlocal[0];
				$this->view->error="Tamaño de imagen demasiado grande";
				$this->view->render('estilos/agregarEstilos');
			}
		}
		else{			
			$this->view->id_L=$idlocal[0];
			$this->view->error="Error o tipo de arhivo no permitido";
			$this->view->render('estilos/agregarEstilos');
		}
		
	}/********** FIN Método para guardar estilos de cerveza nuevos*************/
	

	/***********************************************************************
	**********  Método para MODIFICAR los estilos de cerveza   *************
	***********************************************************************/
	function updateEstilo($id){
		$estilo     = new Cerveza();
		$nombre     =$_POST['Nombre'];
		$tipo       =$_POST['Tipo'];
		$desc       =$_POST['Descripcion'];
		$imagen     =$_FILES['Imagen']['name'];
		$tmp_name   = $_FILES['Imagen']['tmp_name'];//archivo tempral
		$imagenOld  =$_POST['ImagenOld'];
		$tipoimg    = pathinfo($imagen, PATHINFO_EXTENSION);//Tipos de imagenes
		$sizeimg    = $_FILES['Imagen']['size'];//tamaño de las imagenes

		$permitidos = array('jpg', 'jpeg');
		$limite_kb  = 16384;

				
		if($imagen!=null){
			if (in_array($tipoimg, $permitidos)){//Control de tipo de archivo

				if($sizeimg <= $limite_kb * 1024){//Control de tamaño de imagen
					$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/proyecto/PintPer/public/imagenes-usuarios/';
					$ruta=$carpeta_destino.$imagenOld;
					
					//move el archivo a la carpeta creada
					if(move_uploaded_file($tmp_name,$ruta)){
						if($this->dimensionarJPEG($ruta)){//Re dimensionamos la imagen
							$estilo->setCervezaId($id[0]);
							$estilo->setNombre($nombre);
							$estilo->setTipo($tipo);
							$estilo->setDescripcion($desc);
							$estilo->setImagen($imagenOld);							
							if($this->model->modificarEstilo($estilo)){								
								$this->view->mensaje="El estilo se modifico con exito";
								$this->view->estilos=$this->model->getEstilo($id[0]);
								$this->view->render('estilos/editarEstiloDuenio');
							}else{								
								$this->view->error="Error al intentar modificar estilo";
								$this->view->estilos=$this->model->getEstilo($id[0]);
								$this->view->render('estilos/editarEstiloDuenio');
							}
						}
					}					
				}else{					
					$this->view->error="Tamaño de imagen demasiado grande";
					$this->view->estilos=$this->model->getEstilo($id[0]);
					$this->view->render('estilos/editarEstiloDuenio');
				}				
			}else{				
				$this->view->error="Error o tipo de arhivo no permitido";
				$this->view->estilos=$this->model->getEstilo($id[0]);
				$this->view->render('estilos/editarEstiloDuenio');
			}
			
		}else{
			$estilo->setCervezaId($id[0]);
			$estilo->setNombre($nombre);
			$estilo->setTipo($tipo);
			$estilo->setDescripcion($desc);
			$estilo->setImagen($imagenOld);							
			if($this->model->modificarEstilo($estilo)){								
				$this->view->mensaje="El estilo se modifico con exito";
				$this->view->estilos=$this->model->getEstilo($id[0]);
				$this->view->render('estilos/editarEstiloDuenio');
			}else{								
				$this->view->error="Error al intentar modificar estilo";
				$this->view->estilos=$this->model->getEstilo($id[0]);
				$this->view->render('estilos/editarEstiloDuenio');
			}
		}
	}





	/*************************************************************************
	********Método con rand() para generar nombre de archivo al azar**********
	*************************************************************************/    
	function generarNombre($length = 10,$ext) {
	    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString     = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    	
	    $randomString='Img'.$randomString.'.'.$ext;
	    return $randomString;
	}

	/********************************************************
	************Método para dimensionar imagenes*************
	********************************************************/
	function dimensionarJPEG($rutaImagen,$anchoThumb = 300, $altoThumb = 400, $calidad = 75){

		$original = @imagecreatefromJPEG($rutaImagen);
		if (!$original)//verificamos si se crea imagecreatefromJPEG
		{
			//creamos de nuevo usando imagecreatefromstring
			$original= imagecreatefromstring(file_get_contents($rutaImagen));
		}		

		if ($original){
			$imgNew = imagecreatetruecolor($anchoThumb,$altoThumb);
			if ($imgNew){
				$ancho = imagesx($original);
				$alto  = imagesy($original);

				if(imagecopyresized($imgNew,$original,0,0,0,0,$anchoThumb,$altoThumb,$ancho,$alto)){
					$resultado = imagejpeg($imgNew,$rutaImagen,$calidad);
					return true;
				}else{
					return false;
				}
			}
		}
		return false;
	}
	
}
?>