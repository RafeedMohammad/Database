<?php 

class Conection{
	
	public $conn;

	public function __construct(){

		$this->conn=new PDO('mysql:host=localhost;dbname=ctg-219','root','');
	}
	public function InsertMobile($name,$model,$price){

		try{
			$statement=$this->conn->prepare("INSERT INTO MobileData(name,model,price ) VALUES (:name,:model,:price)");
			$statement=$this->conn->prepare("INSERT INTO MobileData(name,model,price ) VALUES (:name,:model,:price)");
			$statement=$this->conn->prepare("INSERT INTO MobileData(name,model,price ) VALUES (:name,:model,:price)");
			$statement=$this->conn->prepare("INSERT INTO MobileData(name,model,price ) VALUES (:name,:model,:price)");
			$statement=$this->conn->prepare("INSERT INTO MobileData(name,model,price ) VALUES (:name,:model,:price)");
			$statement=$this->conn->prepare("INSERT INTO MobileData(name,model,price ) VALUES (:name,:model,:price)");

$statement=$this->conn->prepare("INSERT INTO MobileData(name,model,price ) VALUES (:name,:model,:price)");

$statement=$this->conn->prepare("INSERT INTO MobileData(name,model,price ) VALUES (:name,:model,:price)");

$statement=$this->conn->prepare("INSERT INTO MobileData(name,model,price ) VALUES (:name,:model,:price)");

$statement=$this->conn->prepare("INSERT INTO MobileData(name,model,price ) VALUES (:name,:model,:price)");

			$statement->execute(

array(
':name'=>$name,
':model'=>$model,
':price'=>$price 
)

			);
			echo "Inserted";

		}catch(\Exception $e){
			echo "error".$e->getMessage();
		}
	}
}



 ?>