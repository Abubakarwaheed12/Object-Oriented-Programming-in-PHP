<?php
class employee{
    public $name;
    public $age;
    public $salary;
        function __construct($n ,$a, $s){
            $this->name=$n;
            $this->age=$a;
            $this->salary=$s;
        }
            function info(){
                echo "<h2>Employee Profile</h2>";
                echo "Employee Name  : " . $this->name . "<br><br>";
                echo "Employee Age  : " . $this->age . "<br><br>";
                echo "Employee Salary  : " . $this->salary . "<br><br>";
            }

}

    class manager extends employee{
        public $ta=100;
        public $phone=200;
        public $total_salary;
        function info(){
            echo "<h2>Manager Profile</h2>";
            echo "Employee Name  : " . $this->name . "<br><br>";
            echo "Employee Age  : " . $this->age . "<br><br>";
            echo "Employee Salary  : " . 
            $this->total_salary= $this->salary+$this->ta+$this->phone . "<br><br>";
        }   
    }
    $e1= new manager("abu bakar", 18 , 2000);
    $e1->info();
    $e2= new employee("Hamza", 28 , 1200);
    $e2->info();

?>