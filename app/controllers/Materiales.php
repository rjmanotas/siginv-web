<?php 

	Class Materiales Extends Controlador{

		public function __construct(){
			$this->MaterialesModel = $this->modelo('MaterialesModel');

		}

		public function ListadoMateriales(){
			
			$this->vista('inventario/materiales/ListadoMateriales', $datos);
		}
	}
?>