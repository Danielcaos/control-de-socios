<?php

class Controller{

    function __construct(){
        //echo "<p>Controlador base</p>";
        $this->view = new View();
    }

    function loadModel($model){
        $url = 'modelo/dao/'.$model.'Dao.php';

        if(file_exists($url)){
            require $url;
            $modelName = $model.'Dao';
            $this->model = new $modelName();
        }else{
            
        }
    }
}

?>