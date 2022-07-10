<?php
/*Construya una clase llamada CRectángulo que tenga miembros de datos en número de precisiónatos en número de precisión doble llamados largo y ancho.
La clase deberá tener una función miembro llamada CalcularPerímetro () otra CalcularArea () para área y una función miembro llamada MostrarDatos()que despliegue el largo, ancho, perímetro y área de un rectángulo.
*/
class CRectangulo {

    public $largo;
    public $ancho;
    public $perimetro;
    public $area;

    public function CalcularPerimetro()
    {
        return 2* ($this-> largo + $this->ancho);
    }
    public function CalcularArea()
    {
        return $this->largo * $this->ancho;
    }
    public function getLargo()
    {
        return $this->largo;
    }
    public function getAncho()
    {
        return $this->ancho;
    }
}

function MostrarDatos($verDatos)
    {
        echo 'El largo es: '. $verDatos->getLargo();
        echo "<br>";
        echo 'El ancho es: '. $verDatos->getAncho();
        echo "<br>";
        echo 'El perimetro es: '. $verDatos->CalcularPerimetro();
        echo "<br>";
        echo 'El area es: '. $verDatos->CalcularArea();
    }

$rec = new CRectangulo();
$rec->largo=$_POST["n"];
$rec->ancho=$_POST["hs"];
$rec->perimetro;
$rec->area;
MostrarDatos($rec);

?>