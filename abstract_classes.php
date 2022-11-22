<?php
        // abstract class ma aik abstract method hona zaroori ha 
        // abstract class ka hum object nai bna sakty 
        // iski hum derived class bnaty han
        // abstract class bnany k liye hum start py abstract keyword use karty han
        //abstract class ma humy aik method bnana zaroori hota ha
        //abstract method ko hum implement child class ma kare gyy

        abstract class parentclass{
            public $name;
            abstract protected function calc($a , $b);
        }
        class childclass extends parentclass{
            public function calc($a ,$b){
                echo $a * $b;
            }
        }
            $obj1=new childclass();
            $obj1->calc(2,4);

?>