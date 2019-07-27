<?php
include "Fullname.php";
class Myname extends FullName
{
    public function PrintName($name){
        echo "My nick name is ".$name."<br>";
    }
}
?>