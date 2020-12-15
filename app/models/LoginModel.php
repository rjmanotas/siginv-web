<?php
    class LoginModel {
      
        private $db;

       function __construct(){
           
           $this->db = new Base;
       }

       public function Autenticacion($username = ''){
          $sql = "SELECT T1.Tbl_usuario_ID, T1.Tbl_usuario_USERNAME, T1.Tbl_usuario_PASSWORD AS PASSWORD, T2.Tbl_tipousuario_TIPO AS TIPO_USUARIO, "
          ."T3.Tbl_persona_ID AS IDPERSONA, T3.Tbl_tipodocumento_Tbl_tipodocumento_ID AS TIPO_DOCUMENTO, T3.Tbl_persona_NUMDOCUMENTO, T3.Tbl_persona_NOMBRES, "
          ."T3.Tbl_persona_PRIMERAPELLIDO, T3.Tbl_persona_SEGUNDOAPELLIDO, T3.Tbl_persona_FECHANAC, T3.Tbl_persona_TELEFONO, T3.Tbl_persona_CORREO, "
          ."T4.Tbl_cargo_TIPO AS CARGO, T1.Tbl_usuario_ESTADO " 
          ."FROM  "
          ."tbl_usuario T1 LEFT JOIN tbl_tipo_usuario T2 ON T1.Tbl_tipo_usuario_Tbl_tipousuario_ID = T2.Tbl_tipousuario_ID "
          ."INNER JOIN tbl_persona T3 ON T1.Tbl_usuario_ID = T3.Tbl_usuario_Tbl_usuario_ID "
          ."LEFT JOIN tbl_cargo T4 ON T3.Tbl_cargo_Tbl_cargo_ID = T4.Tbl_cargo_ID "
          ."WHERE T1.Tbl_usuario_USERNAME = :username";
          $this->db->query($sql);
          $this->db->bind(':username', $username);
          return $this->db->registro();
       }
    }

    