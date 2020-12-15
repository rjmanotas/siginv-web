<?php 

	Class MaterialesModel{
		private $db;

		public function __construct(){
			$this->db = new Base();
		}

		// public function ListarMateriales(){
		// 	$this->db->query("SELECT * FROM Tbl_materiales WHERE Tbl_herramienta_ESTADO = 1 ");
		// 	return $resultado = $this->db->registros();
		 }