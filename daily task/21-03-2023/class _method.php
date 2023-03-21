<?php
class Family {
    /*property*/
    private $my_name;
    private $father_name;

    /*methods*/
    public function __construct ($m, $f) {
        $this->my_name = $m;
        $this->father_name = $f;
    }

    public function printFamilyName () {
        echo "my name is ".$this->my_name."<br>";
        echo "my father name is ".$this->father_name;

    }
}

$my_family = new Family("ajay", "siva"); /*created object for class*/
$my_family->printFamilyName(); /*calling method which is define in the class*/
?>