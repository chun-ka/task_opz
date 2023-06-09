<?php

abstract class ParentClass
{
    public $name;
    public $age;

    /**
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }


    protected function say()
    {
    }

    public abstract function test();
    public abstract function demo();

    public abstract function intro($name): string;

}

class Student extends ParentClass
{
    private $gender;

    /**
     * @param $gender
     */
    public function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function test()
    {
        echo "Tôi là $this->name,tôi $this->age,giới tính $this->gender" . "<br>";
    }

    public function intro($name, $address = "Sài Gòn"): string
    {
        return $name . "," . "địa chỉ {$address}";
    }
    public function say()
    {
        parent::say(); // TODO: Change the autogenerated stub
    }


    public function demo()
    {
        // TODO: Implement demo() method.
    }
}

$student = new Student("Trung", 26, "nam");
$student->test();
echo $student->intro($student->name) . "<br>";
echo "<hr>";
