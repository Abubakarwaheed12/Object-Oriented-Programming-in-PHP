<?php
    class base{
            public $name="PARENT CLASS";

            public function show(){
                echo "my name is " . $this->name;
            }
            public function calc($a, $b){
                return $a*$b;
            }
        }

    class derived extends base{
        public $name="CHILD CLASS";

        public function calc($a, $b){
            return $a+$b;
        }
    }
    $obj1=new base();
    $obj2=new derived();
    //    echo $obj1->name . "<br>";
    //    echo $obj2->name;
        $obj1->show();
       echo  $obj2->show() . "<br>";

      echo  $obj2->calc(10,5);
?>