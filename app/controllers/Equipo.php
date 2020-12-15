<?php
    
    class Equipo extends controlador{

        public function __construct(){
			$this->EqupoModel = $this->modelo('EquipoModel');
        }
        
        public function ListarEquipo(){
			
			$this->vista('inventario/Equipos/ListadoEquipo', $datos);
		}
    }
?>