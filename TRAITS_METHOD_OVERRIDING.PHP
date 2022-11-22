<?php
   trait hello{
       public function sayhello(){
           echo "hello from hello traits \n";
       }
   }
    
   trait hi{
       public function sayhello(){
           echo "hello from hi traits \n";
       }
   }
   class base{
       use hello , hi {
           hello::sayhello insteadOf hi;
           hi::sayhello as newhello;
       }
   }
   $obj=new base();
   $obj->sayhello();
   $obj->newhello();
    

?>