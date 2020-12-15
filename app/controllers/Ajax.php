<?php 
	class Ajax Extends Controlador{
		public function __construct(){
			$this->EstanteModel = $this->modelo('EstanteModel');
		}

		public function ObtenerEstantes(){
			$ListarEstantes = $this->EstanteModel->ListarEstantes();
			echo json_encode($ListarEstantes);
		}

		public function ObtenerCentros(){
			$IdRegional = $_POST['IdRegional'];
			$ListarCentros = $this->CentroModel->ObtenerCentro($IdRegional);
			echo json_encode($ListarCentros);
		}
	}
?>