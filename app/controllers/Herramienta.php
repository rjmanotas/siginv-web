<?php 

	Class Herramienta Extends Controlador{

		public function __construct(){
			$this->HerramientaModel = $this->modelo('HerramientaModel');

		}

		public function ListarHerramienta(){
			$ListarHerramientas = $this->HerramientaModel->ListarHerramientas();
			$datos=[
				'ListarHerramientas' => $ListarHerramientas
			];
			$this->vista('inventario/herramientas/ListadoHerramientas', $datos);
		}

		public function RegistrarHerramienta(){
			
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$datos = [

					'HerramientaFecha' => trim($_POST['FECHA_INGRESO']),
 					'HerramientaDescripcion' => trim($_POST['DESCRIPCION_HERRAMIENTA']),
					'numEstante' => trim($_POST['NUM_ESTANTE']),
					'numGaveta' => trim($_POST['NUM_GAVETA']),
					'HerramientaCantidad' => trim($_POST['CANTIDAD_HERRAMIENTA'])
				];
				if ($this->HerramientaModel->InsertarHerramienta($datos)){
					header('location:' . URL_SISINV . 'Herramienta/ListarHerramienta');
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

		public function EditarHerramienta($idHerramienta){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $ListarHerramientas = $this->HerramientaModel->ListarHerramientas();
            $datos = [
                'idHerramienta' => $idHerramienta,
                'HerramientaFecha' => trim($_POST['FECHA_INGRESO']),
                'HerramientaDescripcion' => trim($_POST['DESCRIPCION_HERRAMIENTA']),
                'numGaveta' => trim($_POST['NUM_GAVETA']),
                'numEstante' => trim($_POST['NUM_ESTANTE']),
                'ListarHerramientas' => $ListarHerramientas
            ];

            if ($this->HerramientaModel->ActualizarHerramientas($datos)){
                header('location:' . URL_SISINV . '/herramienta/ListarHerramientas');
            }else{
                die('Algo salio mal');
            }
        }else{
            $ObtenerEstantesID = $this->EstanteModel->ObtenerEstantesID($idEstante);  
            $ListarEstantes = $this->EstanteModel->ListarEstantes();
            $datos = [
                'idEstante' => $ObtenerEstantesID->Tbl_estante_ID,
                'numEstante' => $ObtenerEstantesID->Tbl_estante_NUMERO,
                'descripcionEstante' => $ObtenerEstantesID->Tbl_estante_DESCRIPCION,
                'ListarEstantes' => $ListarEstantes
            ];
        }
        $this->vista('configuracion/Estante/EditarEstante', $datos);
    }

	}
?>