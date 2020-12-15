<?php 

	Class HerramientaModel{
		private $db;

		public function __construct(){
			$this->db = new Base();
		}

		public function ListarHerramientas(){
			$this->db->query("SELECT * FROM Tbl_herramienta WHERE Tbl_herramienta_ESTADO = 1 ");
			return $resultado = $this->db->registros();
		}

		public function InsertarHerramienta($datos){
			$this->db->query("INSERT INTO Tbl_herramienta (Tbl_herramienta_FECHA, Tbl_herramienta_DESCRIPCION, Tbl_herramienta_NUMESTANTE, Tbl_herramienta_NUMGAVETA, Tbl_herramienta_CANTIDAD) VALUES (:HerramientaFecha, :HerramientaDescripcion, :numEstante , :numGaveta, :HerramientaCantidad)");

			$this->db->bind(':HerramientaFecha', $datos['HerramientaFecha']);
			$this->db->bind(':HerramientaDescripcion', $datos['HerramientaDescripcion']);
			$this->db->bind(':numEstante', $datos['numEstante']);
			$this->db->bind(':numGaveta', $datos['numGaveta']);
			$this->db->bind(':HerramientaCantidad', $datos['HerramientaCantidad']);

			 if($this->db->execute()){ return true; }else{ return false;}  
		}

		public function ActualizarHerramienta($datos){
			$this->db->query("UPDATE Tbl_herramienta SET Tbl_herramienta_NUMESTANTE = :numEstante, Tbl_herramienta_CANTIDAD = :numGaveta WHERE Tbl_gaveta_ID = :idGaveta");
            $this->db->bind(':idGaveta', $datos['idGaveta']);
            $this->db->bind(':numEstante', $datos['numEstante']);
            $this->db->bind(':numGaveta', $datos['numGaveta']);
            if($this->db->execute()){ return true; }else{ return false;}  
		}
	}
?>