<?php

    require 'modelo/dto/ausenteDto.php';
    require 'modelo/dto/socioDto.php';

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

        public function verificarAusente($codigo_socio){
            try{
                $statement = $this->db->connect()->prepare("SELECT * FROM socio WHERE codigo_socio = :codigo_socio");
                $statement->execute(array(
                    ':codigo_socio' => $codigo_socio
                ));
                $resultado = $statement->fetch();
                if(is_array($resultado) && !empty($resultado)){
                    return true;
                }else{
                    return false;
                }
            }catch(PDOException $e){
                //echo $e->getMessage();
                return $e->getMessage();
            }
        }

    }

?>