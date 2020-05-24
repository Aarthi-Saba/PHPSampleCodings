<?php
/* 
My new application, same as Visual studio format for commenting
*/
class Person
{
    var $gender = "Female";
    function personType()
    {
        echo $this->gender;
    }
    
}
$p = new Person();
$p->personType();
?>
