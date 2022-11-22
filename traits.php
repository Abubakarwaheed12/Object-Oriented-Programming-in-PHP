<?php
    // agr humy 4 classes ma aik same function bnana ha us k liye humy traits use karna pary ga classes sy bahir
    //structure
    /*
    trait test{
            function....
    }

    */
            trait hello{
                public function sayhello(){
                    echo "hello everyone in traits php oop tutorials";
                }
            }
            class a{
                use hello;
            }
            class b{
                use hello;
            }

            $obj1=new a();
            $obj1->sayhello();
             echo "<br>";
            $obj2=new b();
            $obj2->sayhello();


?>