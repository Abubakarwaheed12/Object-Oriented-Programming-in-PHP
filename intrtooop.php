<?php
class calculation{
    public $a, $b, $c;

    function sum(){
        $this->c=$this->b+$this->a;
        return $this->c;
    }
    function min(){
        $this->c=$this->b-$this->a;
        return $this->c;
    }
}
    $cal1= new calculation();
    $cal1->a=10;
    $cal1->b=20;
    echo $cal1->min() . "<br>";
    
    $cal2= new calculation();
    $cal2->a=10;
    $cal2->b=20;
    echo $cal2->sum();
?>