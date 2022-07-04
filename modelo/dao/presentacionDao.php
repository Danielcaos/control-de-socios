<?php

    require 'modelo/dto/presentacionDto.php';
    require 'modelo/dto/invitadoDto.php';

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
            if(verificarUser($datos->getCedula())=='true'){
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
            }else{
                echo "invitado sin registrar";
            }
            
        }

        public function verificarUser($cedula_invitado){
            try{
                $statement = $this->db->connect()->prepare("SELECT cedula_invitado FROM invitado WHERE cedula_invitado = :cedula_invitado");
                $statement->execute(array(
                    ':cedula_invitado' => $cedula_invitado
                ));
                $resultado = $statement->fetch();
                if(empty($resultado)){
                    return false;
                }else{
                    return true;
                }
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }

        /* public function verificarUser($cedula_invitado){
            try{
                $statement = $this->db->connect()->prepare("SELECT * FROM invitado WHERE (cedula_invitado = :cedula_invitado)");
                $statement->execute(array(
                    ':cedula_invitado' => $cedula_invitado
                ));
                $resultado = $statement->fetch();
                if(empty($resultado)){
                    return false;
                }else{
                    return true;
                }
            }catch(PDOException $e){
                return $e->getMessage();
            }
        } */

    }

?>