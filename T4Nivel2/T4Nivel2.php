<?php

echo "<h3>Exercici 1</h3>";

/*-- Exercici 1
Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents
 figures: As, K, Q, J, 7 i 8.
*Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir,
 genera un valor aleatori per a l'objecte a què se li aplica el mètode.
*Crea també el mètode shapeName, que digui quina és la figura que ha 
sortit en l'última tirada del dau en qüestió.
*Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.

A més, programa el mètode getTotalThrows que ha de mostrar el nombre total
de tirades entre tots els daus.*/

abstract class PokerDice { //esta clase es la clase Padre de todos los dados
   public  $name; // cada dado tendrá un nombre diferente porque son diferentes dados
   public  $Figures; // las figuras de todos los dados son las mismas
    
    public function __construct(string $name, array $Figures=["A","K","Q","J","7","8"]) {
        $this->name=$name;
        $this->Figures=$Figures;
    }

    public function throw(): string {  // la funcion de turar dado es publica ya que será igual para cada uno de los dados
            echo "Estas son las figuras del Dado en cuestion:  <br>";
            print_r ( $this->Figures);
            echo "<br><br>Ahora tiramos el dado!! y......wala! : <br>";
            $FiguresDice=$this->Figures;
            $AleatoryFigure= array_rand($FiguresDice,1);
            echo "<h2>" .$FiguresDice[$AleatoryFigure]."</h2>";
            $tirada=$FiguresDice[$AleatoryFigure];
            return $tirada;
        }

    public function shapeName(){ // esta funcion me mostrará la ultima tirada del dado en cuestion
        
        echo $this->name;
        // terminar de crear la función
    }
}


include 'PokerDice1.php';
include 'PokerDice2.php';
include 'PokerDice3.php';
include 'PokerDice4.php';
include 'PokerDice5.php';


$dice1= new PokerDice1("Dice1");
$dice2= new PokerDice2("Dice2");
$dice3= new PokerDice2("Dice3");
$dice4= new PokerDice2("Dice4");
$dice5= new PokerDice2("Dice5");

$Dados=[$dice1,$dice2,$dice3,$dice4,$dice5]; // arreglar esto como agregar valores al array leer el tema
foreach ($Dados as $key => $value){
    $allDices=[];
    $dado=$value; 
    $resultadoTirada=$dado->throw();  
    foreach ($allDices as $key => $value) {
        $allDices[$key]=$resultadoTirada;        
    }
}
echo "la tirada de 5 dados simultaneamente es: <br>" 
print_r ($allDices);

echo "Este es el nomre del primer dado: <b>" .$dice1->name."</b><br>";


?>