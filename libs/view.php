<?php


class View
{
    function __construct()
    {
        $this->pagina_actual = "";
    }

    function render($const, $nombre)
    {
        $url = 'vista/' . $const . "/" . $nombre . '.php';

        if (!file_exists($url)) {
            require 'vista/error/index' . '.php';
            return;
        }
        require 'vista/' . $const . "/" . $nombre . '.php';
    }
}

?>