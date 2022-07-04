<?php

    require 'modelo/dto/usuarioDto.php';

    class loginDao extends Model{

        public function __construct(){
            parent::__construct();
        }

        public function listar(){

            try{
                $query = $this->db->connect()->prepare('SELECT * FROM usuario');
                $query->execute();
                $resultado = $query->fetch();
                return $resultado;
            }catch(PDOException $e){
                return false;
            }
    
        }

        public function insertarDatos($datos){

            $datos = new datosDto($datos['documento_user'], $datos['password_user'], $datos['nombre_user']);
    
            $query = $this->db->connect()->prepare('INSERT INTO usuario (documento_user, password_user, nombre_user) VALUES (:documento_user, :password_user, :nombre_user)');
            try{
                $query->execute([
                    'documento_user' => $datos->getDocumento(),
                    'password_user' => $datos->getPassword(),
                    'nombre_user' => $datos->getNombre()
                ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
    
        }

        public function buscar($documento_user){
            try{
                $statement = $this->db->connect()->prepare("SELECT * FROM usuario WHERE (documento_user = :documento_user)");
                $statement->execute(array(
                    ':documento_user' => $documento_user
                ));
                $resultado = $statement->fetch();
                if(!empty($resultado)){
                    $resultado = new usuarioDto($resultado['documento_user'], $resultado['password_user'], $resultado['nombre_user']);}
                return  $resultado;
            }catch(PDOException $e){
                return null;
            }
        }

        public function verificarUser($documento_user, $password_user){
            try{
                $statement = $this->db->connect()->prepare("SELECT documento_user, password_user FROM usuario WHERE documento_user = :documento_user AND password_user = :password_user");
                $statement->execute(array(
                    ':documento_user' => $documento_user,
                    ':password_user' => $password_user
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