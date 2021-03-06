<?php 
require_once 'models/local.php';
class LocalController extends Controller{
	
	function __construct(){
		parent::__construct();
		$this->view->user=array();
		$this->view->mensaje="";
		$this->view->id_p=0;
		$this->view->local=array();
		$this->view->estilos=array();
	}
	
	function verCompleto($id){
		$oneLocal=$this->model->localId($id[0]);		
		$this->view->local=$oneLocal;
		$this->view->render('local/verLocalUsuarioComun');
	}

	function verLocales() {
		$locales=$this->model->allLocales();		
		$this->view->local=$locales;
		$this->view->render('local/verLocalesUsuarioComun');	
	}

	function buscarLocales() {
		$nombre=$_POST['busqueda'];
		if($nombre!=""){
			$locales=$this->model->searchLocales($nombre);
			$this->view->local=$locales;
			$this->view->render('local/verLocalesUsuarioComun');			
		}
	}

	function verMas($id){
		$oneLocal=$this->model->localId($id[0]);
		$this->view->estilos=$this->model->allEstilos($id[0]);
		$this->view->local=$oneLocal;
		$this->view->render('local/verMasDeLocalUsuarioComun');	
	}

	function agregar(){
		$this->view->render('local/agregarLocal');		
	}

	function verMisLocales(){
		$locales=$this->model->listaLocales();
		$this->view->local=$locales;		
		$this->view->render('local/verMisLocales');	
	}

	function editarLocal(){
		$localId=$_POST['localId'];
		$local  =$this->model->getLocalId($localId);
		$horario=$local->HorarioAtencion;		
		$this->view->local=$local;
		$this->view->render('local/editarMiLocal');	
	}

	function agregarLocal(){
		$local    =new Local();
		$nombre   =$_POST['Nombre'];
		$telefono =$_POST['Telefono'];
		$direccion=$_POST['Direccion'];
		$desde    =$_POST['Desde'];
		$hasta    =$_POST['Hasta'];
		$desde2   =$_POST['Desde2'];
		$hasta2   =$_POST['Hasta2'];
		$face     =$_POST['Facebook'];
		$insta    =$_POST['Instagram'];
		$twit     =$_POST['Twitter'];
		$dias     =$_POST['Dias'];
		$lat      =$_POST['Lat'];
		$lon      =$_POST['Lon'];
		$totalDias="";

		$controlTelefono='/^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/';

		if($nombre!="" & $telefono!="" & $direccion!=""){
			if(preg_match($controlTelefono,$telefono)){
				for($i=0; $i<sizeof($dias);$i++){
					$totalDias.=$dias[$i]."-";
				}
				$totalDias.=" de - ".$desde." a ".$hasta." y de ".$desde2." a ".$hasta2;

				$local->setNombre($nombre);
				$local->setDireccion($direccion);
				$local->setLatitud($lat);
				$local->setLongitud($lon);
				$local->setTelefono($telefono);
				$local->setHorario($totalDias);
				$local->setTwitter($twit);
				$local->setFacebook($face);
				$local->setInstagram($insta);

				if($this->model->agregar($local)) {
					$this->view->mensaje="El Local se guardo con Exito!";
					$this->agregar();
				}

			}else{
				$this->view->mensaje="Error. Número de telefono invalido.!";
				$this->agregar();
			}
		}else{
			$this->view->mensaje="Debe llenar todos los campos!";
			$this->agregar();
		}		
	}

	function updateLocal(){

		$local    =new Local();
		$nombre   =$_POST['Nombre'];
		$telefono =$_POST['Telefono'];
		$direccion=$_POST['Direccion'];
		$lat      =$_POST['Lat'];
		$lon      =$_POST['Lon'];
		$desde    =$_POST['Desde'];
		$hasta    =$_POST['Hasta'];
		$desde2   =$_POST['Desde2'];
		$hasta2   =$_POST['Hasta2'];
		$face     =$_POST['Facebook'];
		$insta    =$_POST['Instagram'];
		$twit     =$_POST['Twitter'];		
		$dias     =$_POST['Dias'];		
		$totalDias="";
		$controlTelefono='/^(?:(?:00)?549?)?0?(?:11|[2368]\d)(?:(?=\d{0,2}15)\d{2})??\d{8}$/';

		if($nombre!="" & $telefono!="" & $direccion!=""){
			if(preg_match($controlTelefono,$telefono)){
				
				$local->setLocalId($_POST['localId']);
				$local->setNombre($nombre);
				$local->setDireccion($direccion);
				$local->setLatitud($lat);
				$local->setLongitud($lon);
				$local->setTelefono($telefono);
				$local->setTwitter($twit);
				$local->setFacebook($face);
				$local->setInstagram($insta);

				if (isset($_POST['EditarHorario'])) {
					for($i=0; $i<sizeof($dias);$i++){
						$totalDias.=$dias[$i]."-";
					}
					$totalDias.=" de - ".$desde." a ".$hasta." y de ".$desde2." a ".$hasta2;

					$local->setHorario($totalDias);					
				}
								
				$local->setPropietarioId($_SESSION['usuario_registrado']->PropietarioId);

				if($this->model->modificarLocal($local)) {
					$this->view->mensaje="Los datos del local se modificaron con Exito!";
					$this->editarLocal();
				}

			}else{
				$this->view->mensaje="Error. Número de telefono invalido.!";
				$this->editarLocal();
			}
		}else{
			$this->view->mensaje="Debe llenar todos los campos!";
			$this->editarLocal();
		}			
	}

	function listarLocales(){
		echo "llego";
	}
}

?>