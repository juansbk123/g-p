<?php

class Empleado{

private  $name;
private $salary;

    public function inicializar($n,$s){
          $this->name=$n;
          $this->salary=$s;


    
    }

    public function  printher_taxes(){
  
        //inicializar($n,$s);
        echo $this->name;
        echo '<br>';
       
        if($this->salary>3000){
            print("paga impuestos");
        }
        else{print("no paga impuestos en la mesa");}
    }
}

$Empleado1=new Empleado();
$Empleado1->inicializar('juan',300);
$Empleado1->printher_taxes();

$Empleada_1=new Empleado();
$Empleada_1->inicializar("MARIA",25000);
$Empleada_1->printher_taxes();
0

?>