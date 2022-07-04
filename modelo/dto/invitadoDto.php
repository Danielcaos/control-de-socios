<?php

    class invitadoDto {
        public $cedula_invitado;
        public $nombre_invitado;
        public $ciudad_invitado;
        public $contacto_invitado;

        public function __construct($cedula_invitado, $nombre_invitado, $ciudad_invitado, $contacto_invitado){
            $this->cedula_invitado = $cedula_invitado;
            $this->nombre_invitado = $nombre_invitado;
            $this->ciudad_invitado = $ciudad_invitado;
            $this->contacto_invitado = $contacto_invitado;
        }

        public function getCedula(){
            return $this->cedula_invitado;
        }
        
        public function setCedula($cedula_invitado){
            $this->cedula_invitado = $cedula_invitado;
        }

        public function getNombre(){
            return $this->nombre_invitado;
        }
        
        public function setNombre($nombre_invitado){
            $this->nombre_invitado = $nombre_invitado;
        }

        public function getCiudad(){
            return $this->ciudad_invitado;
        }
        
        public function setCiudad($ciudad_invitado){
            $this->ciudad_invitado = $ciudad_invitado;
        }

        public function getContacto(){
            return $this->contacto_invitado;
        }
        
        public function setContacto($contacto_invitado){
            $this->contacto_invitado = $contacto_invitado;
        }

    }

?>