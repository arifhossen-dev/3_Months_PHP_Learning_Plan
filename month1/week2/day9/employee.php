<?php 

class Employee{
    public $name;
    public $age;
    public $salary;

    public function __construct($n, $a, $s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    public function info(){
        echo "Employee Profile:" ;
        echo  PHP_EOL;
        echo "Name: {$this->name}";
        echo  PHP_EOL;
        echo "Age: {$this->age}";
        echo  PHP_EOL;
        echo "Salary: {$this->salary}";
        echo  PHP_EOL;
    }
}

class Manager extends Employee{
    public $travel = 1000;
    public $phone = 500;
    public $totalSalary;
    public function info(){
        $this->totalSalary = $this->travel + $this->phone + $this->salary;
        echo "Manager Profile:" ;
        echo  PHP_EOL;
        echo "Name: {$this->name}";
        echo  PHP_EOL;
        echo "Age: {$this->age}";
        echo  PHP_EOL;
        echo "Salary: {$this->totalSalary}";
    }
}

class ManagerName extends Manager{
    public function get_name(){
        return $this->name;
    }
}

$e1 = new Employee("Ashikur Rahman", 21, 10000);
$e1->info();

$e2 = new Manager("Josef", 32, 30000);
$e2->info();
