<?php

class indexController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        //echo 'HOLA desde el index Controller';
        $this->_view->titulo='Portada';
        $this->_view->renderizar('index','inicio');
    }

}
