<?php

    class presentacionDto {

        public $codigo_socio_pres;
        public $cedula_invitado_pres;
        public $fecha_pres_invitado;
        public $num_dias_pres;
        public $tipo_pres;

        public function __construct($codigo_socio_pres, $cedula_invitado_pres, $fecha_pres_invitado, $num_dias_pres, $tipo_pres){
            $this->codigo_socio_pres = $codigo_socio_pres;
            $this->cedula_invitado_pres = $cedula_invitado_pres;
            $this->fecha_pres_invitado = $fecha_pres_invitado;
            $this->num_dias_pres = $num_dias_pres;
            $this->tipo_pres = $tipo_pres;
        }

        public function getCodigo(){
            return $this->codigo_socio_pres;
        }

        public function setCodigo($codigo_socio_pres){
            $this->codigo_socio_pres = $codigo_socio_pres;
        }

        public function getCedula(){
            return $this->cedula_invitado_pres;
        }
        
        public function setCedula($cedula_invitado_pres){
            $this->cedula_invitado_pres = $cedula_invitado_pres;;
        }

        public function getFecha(){
            return $this->fecha_pres_invitado;
        }

        public function setFecha($fecha_pres_invitado){
            $this->fecha_pres_invitado = $fecha_pres_invitado;
        }

        public function getDias(){
            return $this->num_dias_pres;
        }

        public function setDias($num_dias_pres){
            $this->num_dias_pres = $num_dias_pres;
        }

        public function getTipo(){
            return $this->tipo_pres; 
        }

        public function setTipo($tipo_pres){
            $this->tipo_pres = $tipo_pres;
        }

    }

?>