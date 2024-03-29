<?php

    require 'modelo/dto/presentacionDto.php';
    require 'modelo/dto/invitadoDto.php';
    require 'modelo/dto/socioDto.php';

    class presentacionDao extends Model{

        public function __construct(){
            parent::__construct();
        }

        public function listar(){
            try{
                $query = $this->db->connect()->prepare('SELECT * FROM presentacion');
                $query->execute();
                $resultado = $query->fetch();
                return $resultado;
            }catch(PDOException $e){
                return false;
            }
        }

        public function insertarPresentacion($datos){
            $datos = new presentacionDto($datos['codigo_socio_pres'], $datos['cedula_invitado_pres'], $datos['fecha_pres_invitado'], $datos['num_dias_pres'], $datos['tipo_pres']);
            $query = $this->db->connect()->prepare('INSERT INTO presentacion (codigo_socio_pres, cedula_invitado_pres, fecha_pres_invitado, num_dias_pres, tipo_pres) VALUES (:codigo_socio_pres, :cedula_invitado_pres, :fecha_pres_invitado, :num_dias_pres, :tipo_pres)');
            try{
                $query->execute([
                    'codigo_socio_pres' => $datos->getCodigo(),
                    'cedula_invitado_pres' => $datos->getCedula(),
                    'fecha_pres_invitado' => $datos->getFecha(),
                    'num_dias_pres' => $datos->getDias(),
                    'tipo_pres' => $datos->getTipo()
                ]);
                return true;
            }catch(PDOException $e){
                    return false;
            }
            
        }

        public function verificarUser($cedula_invitado){
            try{
                $statement = $this->db->connect()->prepare("SELECT * FROM invitado WHERE cedula_invitado = :cedula_invitado");
                $statement->execute(array(
                    ':cedula_invitado' => $cedula_invitado
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

        public function verificarSocio($codigo_socio){
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

        public function verificarCiudad($cedula_invitado){
            try{
                $statement = $this->db->connect()->prepare("SELECT ciudad_invitado FROM invitado WHERE cedula_invitado = :cedula_invitado");
                $statement->execute(array(
                    ':cedula_invitado' => $cedula_invitado
                ));
                $resultado = $statement->fetch();
                
                if($resultado[0] == 'CUCUTA'){
                    return true;
                }else{
                    return false;
                }
            }catch(PDOException $e){
                //echo $e->getMessage();
                return $e->getMessage();
            }
        }

        public function verificarIngresos($cedula_invitado_pres, $tipo_pres, $fecha1, $fecha2){
            try{
                $statement = $this->db->connect()->prepare("SELECT * FROM presentacion WHERE cedula_invitado_pres = :cedula_invitado_pres 
                AND tipo_pres = :tipo_pres AND  fecha_pres_invitado BETWEEN :fecha1 AND :fecha2");
                $statement->execute(array(
                    ':cedula_invitado_pres' => $cedula_invitado_pres,
                    ':tipo_pres' => $tipo_pres,
                    ':fecha1' => $fecha1,
                    ':fecha2' => $fecha2
                ));
                $resultado = count($statement->fetchAll(PDO::FETCH_ASSOC));
                return json_encode($resultado);
            }catch(PDOException $e){
                //echo $e->getMessage();
                return $e->getMessage();
            }
        }

    }

?>