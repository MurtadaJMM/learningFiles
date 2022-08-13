<?php
class persons {
    public $name ;
    public $age;

    public function __construct($name,$age){
      $this->name=$name;
      $this->age=$age;
    }
    function __destruct() {
    echo "The name is {$this->name}.";
    echo "<br> The age is {$this->age}.";
  }
}
?>