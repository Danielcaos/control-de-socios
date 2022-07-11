<?php

    class presentacionControl extends Controller{
        function __construct(){
            parent::__construct();
            if (!isset($_SESSION['documento'])) {
                header('Location: ' . constant('URL') . 'loginControl');
                return;
            }
        }

        function render($ubicacion = null){
            $constr = "presentacion";
            if(isset($ubicacion[0])){
                $this->view->render($constr , $ubicacion[0]);
            }else{
                $this->view->render($constr, 'index');}
        }

        function presentaciong(){
            $codigo = $_POST['codigoi'];
            $cedula = $_POST['cedulai'];
            $fecha = $_POST['fechai'];
            $dias = $_POST['diasi'];
            $tipo = $_POST['tipoi'];
            $fecha2 = '2022-07-01';

            $temp5 = $this->model->verificarIngresos($cedula, $tipo, $fecha, $fecha2);
            echo json_encode($temp5);
            return;

            $temp4 = $this->model->verificarCiudad($cedula);

            $temp2 = $this->model->verificarUser($cedula);
            $temp3 = $this->model->verificarSocio($codigo);
            if($temp2){
                if(!$temp3){
                    echo json_encode([false, 'El Socio no es valido']);
                    return;
                }else{
                    $temp = $this->model->insertarPresentacion(['codigo_socio_pres'=>$codigo, 'cedula_invitado_pres'=>$cedula, 'fecha_pres_invitado'=>$fecha, 'num_dias_pres'=>$dias, 'tipo_pres'=>$tipo]);
                    echo json_encode([true, $temp]);
                    return;
                }
            }else{
                echo json_encode([false, 'El invitano no esta registrado']);
                return;
            }

        }

        function alimentog(){
            $codigo = $_POST['codigob'];
            $cedula = $_POST['cedulab'];
            $fecha = $_POST['fechab'];
            $dias = '';
            $tipo = $_POST['tipob'];

            $temp2 = $this->model->verificarUser($cedula);
            $temp3 = $this->model->verificarSocio($codigo);
            if($temp2){
                if(!$temp3){
                    echo json_encode([false, 'El Socio no es valido']);
                    return;
                }else{
                    $temp = $this->model->insertarPresentacion(['codigo_socio_pres'=>$codigo, 'cedula_invitado_pres'=>$cedula, 'fecha_pres_invitado'=>$fecha, 'num_dias_pres'=>$dias, 'tipo_pres'=>$tipo]);
                    echo json_encode([true,$temp]);
                    return;
                }
            }else{
                echo json_encode([false, 'El invitano no esta registrado']);
                return;
            }
        }

    }

?>