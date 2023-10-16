<?php

class Person {
  public $name = 'Bill';
  public $mobile;
  private $sno = 'secret';

  # 建構函式
  function __construct($name, $mobile){
    $this->name =$name;
    $this->mobile =$mobile;
  }
}

$p1 = new Person('John','0916');
$p2 = new Person('Peter','0935');
echo "$p1->name : $p1->mobile <br>";
echo "$p2->name : $p2->mobile <br>";

# echo $p1->sno; # 不能讀取私有屬性

?>
