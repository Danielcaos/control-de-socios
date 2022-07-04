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

        $temp = $this->model->insertarAusente(['cod_socio_ausente'=>$codigo, 'dias_ausente'=>$dias, 'fecha_ingre_ausente'=>$fecha]);
        echo json_encode($temp);
    }

}


?>