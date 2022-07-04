<?php

    require 'modelo/dto/ausenteDto.php';

    class ausenteDao extends Model{

        public function __construct(){
            parent::__construct();
        }

        public function listar(){
            try{
                $query = $this->db->connect()->prepare('SELECT * FROM ausente');
                $query->execute();
                $resultado = $query->fetch();
                return $resultado;
            }catch(PDOException $e){
                return false;
            }
        }

        public function insertarAusente($datos){
            $datos = new ausenteDto($datos['cod_socio_ausente'], $datos['dias_ausente'], $datos['fecha_ingre_ausente']);
            
            $query = $this->db->connect()->prepare('INSERT INTO ausente (cod_socio_ausente, dias_ausente, fecha_ingre_ausente) VALUES (:cod_socio_ausente, :dias_ausente, :fecha_ingre_ausente)');
            try{
                $query->execute([
                    'cod_socio_ausente' => $datos->getCodigo(),
                    'dias_ausente' => $datos->getDias(),
                    'fecha_ingre_ausente' => $datos->getFecha()
                ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
    
        }

    }

?>