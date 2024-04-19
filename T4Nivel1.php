<?php
echo "<h3>Excercici 1 </h3>";

/*- Exercici 1
Crea una classe Employee, defineix com a atributs el seu nom i sou. 
Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos (si el sou supera 6000, paga impostos).*/

Class Employee {
 public $name;
 public $salary;
 
 public function __construct(string $name, int $salary){
    $this->name=$name;
    $this->salary=$salary;
 }

 public function print(){
        if ($this->salary>6000) {
            echo  $this->name .", debes pagar impuestos";
        }else
        {
            echo $this->name.", No tienes que pagar impuestos";
         }
 }

}
 
$Employee1= New Employee("nathalia", 6000);
$Employee1->print();


echo "<h3>Excercici 2 </h3>";

/*- Exercici 2
Escriu un programa que defineixi una classe Shape amb un constructor que rebi 
com a paràmetres l'ample i alt. Defineix dues subclasses; 
Triangle i Rectangle que heretin de Shape i que calculin respectivament 
l'àrea de la forma area(). */

Class Shape{
    public $width;
    public $height;

    public function __construct(int $width, int $height){
        $this->width= $width;
        $this->height= $height;
    }

}

Class Triangle extends Shape{
    public function areaTriangle(){
        $areaT=(($this->width*$this->height)/2);
        echo "El área del triángulo es: ".$areaT."<br><br>";
    }
}

Class Rectangle extends Shape{
    public function areaRectangle(){
        $areaR=$this->width*$this->height;
        echo "El área del rectángulo es: ".$areaR."<br><br>";
    }

}

$triangle1=new Triangle(3,6);
echo "base del triángulo: " .$triangle1->width."<br>"; // para probar
echo "altura del triángulo: ".$triangle1->height."<br>";// para probar
$triangle1->areaTriangle();

$rectangle1=new Rectangle(10,5);
echo "base del rectángulo: " .$rectangle1->width."<br>"; // para probar
echo "altura del rectángulo: ".$rectangle1->height."<br>";// para probar
$rectangle1->areaRectangle();

?>