<?php
        class person{
            public $name , $age;

                function __construct($name="h" , $age=12){
                        $this->name=$name;
                        $this->age=$age;
                    }
                
            function show(){
                echo "this is name of user   :  " . $this->name . " -------". $this->age;
            }
        }

        $p1=new person("abu bakar" , 10);
        // $p1->name="abu bakar waheed";
        $p1->show();
        $p2=new person();
        $p2->show();
?>