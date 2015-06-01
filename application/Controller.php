<?php
// para que no pueda ser instanciada
abstract class Controller{
    protected $_view;
    public function __construct() {
        $this->_view=new View(new Request);
    }

    abstract public function index();
}