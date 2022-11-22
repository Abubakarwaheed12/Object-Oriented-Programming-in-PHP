<?php
        // bina object k properties ko acess karny k liye hum objects ki bjae static member b use kar sakty han
        // static ma hum this use nai kar sakty is ki jaga py hum self keyword use karty han
        // agr aik class k saari property aor method static hun to wo static class ban jati ha agr aik variable b static na ho tab wo static class nahi ban pae giiiii
        // the main benefit of static is it is not require to make any object for it

         class base{
             // if we make it static
             public static $name="abu bakar waheed";
             public static function show(){
                 echo "my name is " . self::$name;
             }
            //  public function __construct(){
            //      self::show();
            //  }
            
            }
            class derived extends base{
                public static function show(){
                    echo  parent::$name;
                }
            } 

            // echo base::$name ."<br> ";
            // echo base::show();
             $obj=new derived();
             $obj->show();
?>