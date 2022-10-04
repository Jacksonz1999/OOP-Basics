<?php
// -------------THAT IS PROPERTIES-----------------------------//
class User
{
    const variable = "archivo"; //! static constant
    public string $name;
    public string $lastName;
    public int $age;
    public string $gender;
    public string $study;


    // -------------THAT IS CONSTRUCTOR-----------------------------//

    public function __construct(string $name, string $lastName, int $age, string $gender, string $study)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this ->study = $study;
        $this ->gender = $gender;
    }

    // -------------THAT IS DESTRUCTOR-----------------------------//

    public function __destruct()
    {
        echo "<br>El destructor es {$this->name}.";
    }

    // -------------THAT IS METHOD-----------------------------//
    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getlastName()
    {
        return $this->lastName;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    public function setAge($age): int
    {
        return  $this->age;
    }
    public function setLastName($lastName)
    {
        $this->name = $lastName;

        return $this;
    }
    //static function 
    public static function variable()
    {
    }
    // -------------THAT IS OVERRIDE-----------------------------//
}
class alumnos extends User
{
    public $height;

    public function __construct($name, $lastName, $age, $height, $study, $gender)
    {
        parent::  __construct($name, $lastName, $age, $study, $gender);
        
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        return  "¡The name of this iPhone is $this->name!";
    }
}

$user = new User('JuanCarlos', 'Giner', 31, "university","M");
echo "Name :{$user->getName()}.<br>";
echo "Surname: {$user->getlastName()}<br>";
echo "Age:{$user->getAge()}<br>";


$alumnos = new alumnos('jackson', 'zhou', 23,"182cm","M",'University');

echo "The name is {$alumnos->name}, the surname is {$alumnos->lastName},the age is {$alumnos->age},  and the height is {$alumnos->height}<br>.";




echo User::variable;





?>