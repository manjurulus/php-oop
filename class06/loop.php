<?php 
// foreach loop w3schools
class Car{
    public $color;
    public $model;
    public function __construct($color,$model){
        $this->color = $color;
        $this->model = $model;
    }
}

$mycar = new Car("red","volvo");
 
foreach ($mycar as $x => $y){
    echo "$x : $y<br>";
}
// for loop
for($i = 1; $i <=20; $i++){
    
    if($i % 3 == 0){
       for($j = $i; $j >= 0; $j--){
            echo "----{$j}----<br>";
       }
    }

    echo "{$i} <br>";
}

?>