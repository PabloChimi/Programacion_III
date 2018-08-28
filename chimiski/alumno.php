<?php
class Alumno{
    public $legajo;

    function Saludar()
    {
        return "hola $this->legajo";
    }
}
?>