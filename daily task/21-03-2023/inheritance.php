<?php
/*base class*/
class Initial {
    public $mather_name;

    public $father_name;

    public function __construct ($m, $f) {
        $this->mather_name = $m;
        $this->father_name = $f;
    }
}

/*sub class*/
class Family extends Initial {
    public function FamilyName () {
        echo "my mather name is  $this->mather_name <br> my father name is  $this->father_name <br>";
    }
}

$my_son = new Family ("selvi", "Siva");
$my_son -> FamilyName (); 
?>