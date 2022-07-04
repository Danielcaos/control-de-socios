<?php

    require 'modelo/dto/invitadoDto.php';

    class registroDao extends Model{

        public function __construct(){
            parent::__construct();
        }

        public function listar(){
            try{
                $query = $this->db->connect()->prepare('SELECT * FROM invitado');
                $query->execute();
                $resultado = $query->fetch();
                return $resultado;
            }catch(PDOException $e){
                return false;
            }
    
        }

        public function insertarInvitado($datos){
            
            $datos = new invitadoDto($datos['cedula_invitado'], $datos['nombre_invitado'], $datos['ciudad_invitado'], $datos['contacto_invitado']);
    
            $query = $this->db->connect()->prepare('INSERT INTO invitado (cedula_invitado, nombre_invitado, ciudad_invitado, contacto_invitado) VALUES (:cedula_invitado, :nombre_invitado, :ciudad_invitado, :contacto_invitado)');
            try{
                $query->execute([
                    'cedula_invitado' => $datos->getCedula(),
                    'nombre_invitado' => $datos->getNombre(),
                    'ciudad_invitado' => $datos->getCiudad(),
                    'contacto_invitado' => $datos->getContacto()
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
                    'cedula_invitado' => $cedula_invitado
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
        

    }

?>