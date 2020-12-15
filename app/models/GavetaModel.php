<?php 
	
	class GavetaModel{
		private $db;
		public function __construct()
		{
			$this->db = new Base();
		}

		public function ObtenerGavetasID($idGaveta){
            $this->db->query('SELECT * FROM tbl_gaveta WHERE Tbl_gaveta_ID = :idGaveta');
            $this->db->bind(':idGaveta' , $idGaveta);
            $row = $this->db->registro();
            return $row;
        }

		public function ListarGavetas(){
			$this->db->query("SELECT T1.Tbl_gaveta_ID , T1.tbl_estante_tbl_bodega_Tbl_bodega_ID , T1.Tbl_gaveta_NUMERO, T2.Tbl_estante_ID, T2.Tbl_estante_NUMERO, T2.Tbl_estante_DESCRIPCION FROM tbl_gaveta T1 INNER JOIN tbl_estante T2 ON T2.Tbl_estante_NUMERO = T1.tbl_estante_tbl_bodega_Tbl_bodega_ID WHERE T1.Tbl_gaveta_ESTADO = 1 ORDER BY T2.Tbl_estante_NUMERO, T1.Tbl_gaveta_NUMERO  ASC");
			return $resultado = $this->db->registros();
		}

		public function InsertarGaveta($datos){
			$this->db->query("INSERT INTO tbl_gaveta (Tbl_gaveta_ID, Tbl_gaveta_NUMESTANTE, Tbl_gaveta_NUMERO, Tbl_gaveta_ESTADO) VALUES (null, :numEstante, :numGaveta , 1)");
			$this->db->bind(':numEstante', $datos['numEstante']);
			$this->db->bind(':numGaveta', $datos['numGaveta']);
			 if($this->db->execute()){ return true; }else{ return false;}  
		}

		public function ActualizarGaveta($datos){
			$this->db->query("UPDATE tbl_gaveta SET Tbl_gaveta_NUMESTANTE = :numEstante, Tbl_gaveta_NUMERO = :numGaveta WHERE Tbl_gaveta_ID = :idGaveta");
            $this->db->bind(':idGaveta', $datos['idGaveta']);
            $this->db->bind(':numEstante', $datos['numEstante']);
            $this->db->bind(':numGaveta', $datos['numGaveta']);
            if($this->db->execute()){ return true; }else{ return false;}  
		}

		public function EliminarGaveta($datos){
			$this->db->query("UPDATE tbl_gaveta SET Tbl_gaveta_ESTADO = 0 WHERE Tbl_gaveta_ID = :id");
            $this->db->bind(':id', $datos['idGaveta']);
            if($this->db->execute()){ return true; }else{ return false;}  
		}
	}
?>