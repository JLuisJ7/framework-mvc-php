<?php

// para que no pueda ser instanciada
abstract class Controller {

    protected $_view;

    public function __construct() {
        $this->_view = new View(new Request);
    }

    abstract public function index();

    protected function loadModel($modelo) {
        $modelo = $modelo . 'Model';
        $rutaModelo = ROOT . 'models' . DS . $modelo . '.php';

        if (is_readable($rutaModelo)) {
            require_once $rutaModelo;
            $modelo = new $modelo;
            return $modelo;
        } else {
            throw new Exception('ERROR DE MODELO');
        }
    }

}