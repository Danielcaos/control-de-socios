<?php

    class usuarioDto {
        public $documento_user;
        public $password_user;
        public $nombre_user;

        public function __construct($documento_user, $password_user, $nombre_user){
            $this->documento_user = $documento_user;
            $this->password_user = $password_user;
            $this->nombre_user = $nombre_user;
        }

        public function getDocumento(){
            return $this->documento_user;
        }
        
        public function setDocumento($documento_user){
            $this ->documento_user = $documento_user;
        }

        public function getPassword(){
            return $this->password_user;
        }
        
        public function setPassword($password_user){
            $this ->password_user = $password_user;
        }

        public function getNombre(){
            return $this->nombre_user;
        }
        
        public function setNombre($nombre_user){
            $this ->nombre_user = $nombre_user;
        }

    }

?>