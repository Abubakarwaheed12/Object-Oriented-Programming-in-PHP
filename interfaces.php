<?php
        // aik class ko multiple classes sy inherit kanry k liye hum interfaces ko use karty han inheritence ki jaga py
        //interface ma hum property define nai kar sakty aor na hi value assign kar sakty han
        // work like a abstract class
        //can't make object of interface and it works like abstract
        // is ma methods sirf declare kar sakty han define ni
        // is humy function ko access modifier nahi dena bcz hum isy direct call nai kar sakty
        // iski derived class bnany k liye implements ka word likna ha
        // by default public its accessifier
        //use for security purposes
        interface parent1{
            function calc($a, $b);
        } 
        interface parent2{
            function sub($c, $d);
        }
        class child implements parent1, parent2{

                public function calc($a, $b){
                     echo $a+$b  ."<br>" ;
                }
                public function sub($c, $d){
                    echo $c-$d;
                }
        }
         $obj=new child();
         $obj->calc(5,4);
         $obj->sub(5,4);

?>