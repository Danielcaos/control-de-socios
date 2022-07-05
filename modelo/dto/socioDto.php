<?php

    class usuarioDto {
        public $codigo_socio;
        public $cedula_socio;
        public $nombre_socio;

        public function __construct($codigo_socio, $cedula_socio, $nombre_socio){
            $this->codigo_socio = $codigo_socio;
            $this->cedula_socio = $cedula_socio;
            $this->nombre_socio = $nombre_socio;
        }

        public function getCodigo(){
            return $this->codigo_socio;
        }
        
        public function setCodigo($codigo_socio){
            $this ->codigo_socio = $codigo_socio;
        }

        public function getDocumento(){
            return $this->cedula_socio;
        }
        
        public function setDocumento($cedula_socio){
            $this ->cedula_socio = $cedula_socio;
        }

        public function getNombre(){
            return $this->cedula_socio;
        }
        
        public function setNombre($nombre_socio){
            $this ->nombre_socio = $nombre_socio;
        }
    }

?>