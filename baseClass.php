<?php
// -------------THAT IS PROPERTIES-----------------------------//
class User
{
    const variable = "archivo"; //! static constant
    private string $name;
    private string $lastName;
    public int $age;

    // -------------THAT IS CONSTRUCTOR-----------------------------//

    public function __construct(string $name, string $lastName, int $age)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
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
   
    public function getName()
    {
        return  "¡The name of this person is $this->name!";   //!ERROR HERE
    }
}

$user = new User('JuanCarlos', 'Giner', 31);
echo "Name :{$user->getName()}.<br>";
echo "Surname: {$user->getlastName()}<br>";
echo "Age:{$user->getAge()}<br>";


$alumnos = new alumnos('Jackson', 'zhou', 23, '182cm');
echo $alumnos ->getName();






?>