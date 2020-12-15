<?php 

	Class Bodega Extends Controlador{
		public function __construct(){
			$this->BodegaModel = $this->modelo('BodegaModel');
		}

		public function ListarBodega(){
			$ListarBodegas = $this->BodegaModel->ListarBodegas();
			$datos = [
				'ListarBodegas' => $ListarBodegas
			];
			$this->vista('configuracion/bodega/ListarBodega', $datos);
		}

		public function RegistrarBodega(){
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
	            $datos = [
	                'nombre' => trim($_POST['NOM_BODEGA'])
	            ];
	            if($this->BodegaModel->InsertarBodega($datos)){
	                header('location:' . URL_SISINV . 'Bodega/ListarBodega');
	            }else{
	                ['message' => 'HA OCURRIDO UN ERROR AL INSERTAR EL USUARIO'];
	            }
        	}else{
            	$datos = [
                	'nombre' => ''
            	];
        	}
		}

		public function EditarBodega($idBodega){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $ListarBodegas = $this->BodegaModel->ListarBodegas();
            $datos = [
                'idBodega' => $idBodega,
                'nombreBodega' => trim($_POST['NOM_BODEGA']),
                'ListarBodegas' => $ListarBodegas
            ];

            if ($this->BodegaModel->ActualizarBodega($datos)){
                header('location:' . URL_SISINV . '/Bodega/ListarBodega');
            }else{
                die('Algo salio mal');
            }
        }else{
            $ObtenerBodegasID = $this->BodegaModel->ObtenerBodegasID($idBodega);  
            $ListarBodegas = $this->BodegaModel->ListarBodegas();
            $datos = [
                'idBodega' => $ObtenerBodegasID->Tbl_bodega_ID,
                'nombreBodega' => $ObtenerBodegasID->Tbl_bodega_NOMBRE,
                'ListarBodegas' => $ListarBodegas
            ];
        }
        $this->vista('configuracion/bodega/EditarBodega', $datos);
    }

    public function EliminarBodega($idBodega){
        $ObtenerBodegasID = $this->BodegaModel->ObtenerBodegasID($idBodega);  
        $ListarBodegas = $this->BodegaModel->ListarBodegas();
        $datos = [
            'idBodega' => $ObtenerBodegasID->Tbl_bodega_ID,
            'nombreBodega' => $ObtenerBodegasID->Tbl_bodega_NOMBRE,
            'ListarBodegas' => $ListarBodegas
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ListarBodegas = $this->BodegaModel->ListarBodegas();
            $datos = [
                'idBodega' => $idBodega,
                'ListarBodegas' => $ListarBodegas
            ];
            if ($this->BodegaModel->EliminarBodega($datos)) {
                header('location:' . URL_SISINV . '/Bodega/ListarBodega');
            }else{
               die('Algo salio mal');
            }
        }
        $this->vista('configuracion/bodega/BorrarBodega', $datos);
    }

	}
?>