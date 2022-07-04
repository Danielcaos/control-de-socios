<?php

    class ausenteDto {

        public $cod_socio_ausente;
        public $dias_ausente;
        public $fecha_ingre_ausente;

        public function __construct($cod_socio_ausente, $dias_ausente, $fecha_ingre_ausente){
            $this->cod_socio_ausente = $cod_socio_ausente;
            $this->dias_ausente = $dias_ausente;
            $this->fecha_ingre_ausente = $fecha_ingre_ausente;
        }

        public function getCodigo(){
            return $this->cod_socio_ausente;
        }

        public function setCodigo($cod_socio_ausente){
            $this->cod_socio_ausente = $cod_socio_ausente;
        }

        public function getDias(){
            return $this->dias_ausente;
        }

        public function setDias($dias_ausente){
            $this->dias_ausente = $dias_ausente;
        }

        public function getFecha(){
            return $this->fecha_ingre_ausente;
        }

        public function setFecha($fecha_ingre_ausente){
            $this->fecha_ingre_ausente = $fecha_ingre_ausente;
        }

    }

?>