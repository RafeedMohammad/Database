<?php 

class Car{

	public $EngineStatus;
	public $BodyPart;

	function Common($EngineStatus,$BodyPart){
        $this->EngineStatus = $EngineStatus;
        $this->BodyPart = $BodyPart;
        
        echo "Engine Status: $this->EngineStatus<br>";
        echo "Body property:  $this->BodyPart<br>";
       
    }
}

 ?>