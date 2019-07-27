<?php

class Toyota extends Car{

	
public $color;
public $seat;

function Toyotas($color,$seat){
        $this->color = $color;
        $this->seat = $seat;
        
        echo "color: $this->color<br>";
        echo "seat:  $this->seat<br>";
       
    }


}


  ?>