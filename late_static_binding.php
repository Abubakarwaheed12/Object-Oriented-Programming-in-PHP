<?php

use base as GlobalBase;

  class base{
      protected static $name="abu bakar waheed"; 
      public function show(){
          echo static::$name . "<br>";
          echo self::$name;
      } 

  } 

  class derived extends base{
     protected static $name="ubaid basra";
  }
  $obj= new derived();
  $obj->show();

?>