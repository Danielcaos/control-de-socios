<?php



class ausenteControl extends Controller{
    function __construct(){
        parent::__construct();
        if (!isset($_SESSION['documento'])) {
            header('Location: ' . constant('URL') . 'loginControl');
            return;
        }
    }

    function render($ubicacion = null){
        $constr = "ausente";

        if(isset($ubicacion[0])){
            $this->view->render($constr , $ubicacion[0]);
        }else{
            $this->view->render($constr, 'index');}
    }

    function ausenteg(){
        $codigo = $_POST['codigo'];
        $dias = $_POST['dias'];
        $fecha = $_POST['fecha'];

        $temp2 = $this->model->verificarAusente($codigo);
        if(!$temp2){
            echo json_encode([false, 'El Socio no es valido']);
            return;
        }else{
            $temp = $this->model->insertarAusente(['cod_socio_ausente'=>$codigo, 'dias_ausente'=>$dias, 'fecha_ingre_ausente'=>$fecha]);
            echo json_encode([true, $temp]);
        }
    }

}


?>