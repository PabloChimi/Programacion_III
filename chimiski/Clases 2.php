<?php
abstract class FiguraGeometrica{
    protected $color;
    protected $perimetro;
    protected $superficie;

    abstract public function __construct($a, $b);

    public function get_color(){
        return $this->color;
    }
    public function set_color($color){
        $this->color = $color;
    }

    abstract public function ToString();
    abstract public function Dibujar();
    abstract protected function CalcularDatos();

}


class Rectangulo extends FiguraGeometrica{
    protected $ladoUno;
    protected $ladoDos;

    protected function CalcularDatos(){
        $this->perimetro = $this->ladoUno*2 + $this->ladoDos*2;
        $this->superficie = $this->ladoUno*$this->ladoDos;
    }

    public function __construct($l1,$l2){
        $this->ladoUno = $l1;
        $this->ladoDos = $l2;
        $this->CalcularDatos();
    }

    
    public function Dibujar(){
        return "<font color=$this->color>".$this->ToString()."</font>";
    }
    public function ToString(){
        $rectangulo = "";
        $piso = "";

        for($x = 0;$x < $this->ladoUno; $x++){
            $piso.="*";
        }
        for($y = 0; $y < $this->ladoDos; $y++){
            $rectangulo.=$piso;
            $rectangulo.="<br>";
        }
        return $rectangulo;
    
    }
}





?>