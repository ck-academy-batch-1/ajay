<?php
class std {
 public $name;    
 public $class;
 public $section;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_class($class) {
    $this->class = $class;
  }
  function get_class() {
    return $this->class;
  }
  
  function set_section($section) {
    $this->section = $section;
  }
  function get_section() {
    return $this->section;
  }
}

$obj = new std();
$obj->set_name('ajay');
$obj->set_class('+2');
$obj->set_section('A');
echo "Name: " . $obj->get_name();
echo "<br>";
echo "Class: " . $obj->get_class();
echo "<br>";
echo "Section: " . $obj->get_section();
?>