<?php
require_once('baseClass.php');
abstract class people {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class names extends people {
  public function prefixName($name) {
    if ($name == "Jackson Zhou") {
      $prefix = "Mr.";
    } elseif ($name == "juanCarlos") {
      $prefix = "Patata.";
    } else {
      $prefix = "";
    }
    return "{$prefix} {$name}";
  }
}

$class = new names;
echo $class->prefixName("juanCarlos");
echo "<br>";
echo $class->prefixName("Jackson Zhou");
echo "<br>";
echo $class->prefixName("Pablo Castel");
?>