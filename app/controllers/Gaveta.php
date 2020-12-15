<?php 

	class Gaveta Extends Controlador{
		
		public function __construct()
		{
			$this->EstanteModel = $this->modelo('EstanteModel');
			$this->GavetaModel = $this->modelo('GavetaModel');
		}

		public function ListarGaveta(){
			$ListarEstantes = $this->EstanteModel->ListarEstantes();
			$ListarGavetas = $this->GavetaModel->ListarGavetas();
			$datos = [
				'ListarEstantes' => $ListarEstantes,
				'ListarGavetas' => $ListarGavetas
			];
			$this->vista('configuracion/Gaveta/RegistrarGaveta', $datos);
		}

		public function RegistrarGaveta(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$datos = [
					'numEstante' => trim($_POST['NUM_ESTANTE']),
					'numGaveta' => trim($_POST['NUM_GAVETA'])
				];
				if ($this->GavetaModel->InsertarGaveta($datos)){
					header('location:' . URL_SISINV . 'Gaveta/ListarGaveta');
				}else{
					['message' => 'HA OCURRIDO UN ERROR AL INSERTAR EL USUARIO'];
				}
			}else{
				$datos = [
					'numEstante' => '',
					'numGaveta' => ''
				];
			}
			
		}

		public function EditarGaveta($idGaveta){
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
	            $ListarGavetas = $this->GavetaModel->ListarGavetas();
	            $datos = [
	                'idGaveta' => $idGaveta,
	                'numEstante' => trim($_POST['NUM_ESTANTE']),
	                'numGaveta' => trim($_POST['NUM_GAVETA']),
	                'ListarGavetas' => $ListarGavetas
	            ];
	            if ($this->GavetaModel->ActualizarGaveta($datos)){
	                header('location:' . URL_SISINV . '/Gaveta/ListarGaveta');
	            }else{
	                die('Algo salio mal');
	            }
	        }else{
	            $ObtenerGavetasID = $this->GavetaModel->ObtenerGavetasID($idGaveta);  
	            $ListarGavetas = $this->GavetaModel->ListarGavetas();
	            $datos = [
	                'idGaveta' => $ObtenerGavetasID->Tbl_gaveta_ID,
	                'numEstante' => $ObtenerGavetasID->Tbl_gaveta_NUMESTANTE,
	                'numGaveta' => $ObtenerGavetasID->Tbl_gaveta_NUMERO,
	                'ListarGavetas' => $ListarGavetas
	            ];
	        }
	        $this->vista('configuracion/Gaveta/EditarGaveta', $datos);
		}

		public function EliminarGaveta($idGaveta){
			$ObtenerGavetasID = $this->GavetaModel->ObtenerGavetasID($idGaveta);  
            $ListarGavetas = $this->GavetaModel->ListarGavetas();
            $datos = [
                'idGaveta' => $ObtenerGavetasID->Tbl_gaveta_ID,
                'numEstante' => $ObtenerGavetasID->Tbl_gaveta_NUMESTANTE,
                'numGaveta' => $ObtenerGavetasID->Tbl_gaveta_NUMERO,
                'ListarGavetas' => $ListarGavetas
            ];
	        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	            $ListarGavetas = $this->GavetaModel->ListarGavetas();
	            $datos = [
	                'idGaveta' => $idGaveta,
	                'ListarGavetas' => $ListarGavetas
	            ];
	            if ($this->GavetaModel->EliminarGaveta($datos)) {
	                header('location:' . URL_SISINV . '/Gaveta/ListarGaveta');
	            }else{
	               die('Algo salio mal');
	            }
	        }
	        $this->vista('configuracion/Gaveta/EliminarGaveta', $datos);
    	}
	}
 ?>