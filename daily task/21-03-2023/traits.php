
<?php
trait use_me {
    public $name1;
    public $name2;

    public function __construct ($m, $f) {
        $this->name1 = $m;
        $this->name2 = $f;
    }
}

trait use_me2 {
    function intro () {
        echo "<h1>MY FAMILY NAME</h1><br>";
    }
}

/*class that uses above two traits*/
class  name1 {
    use use_me, use_me2;

    public function FamilyName1 () {
        echo "<h3>My Mather Name is   $this->name1  <br>  My Father Name is  $this->name2 <br>";
    }
}

class  name2 {
    use use_me;

    public function FamilyName2 () {
        echo "my sister name is $this->name1 <br> my brother name is  $this->name2 </h3><br>";
    }
}

$mom_dad = new name1 ("selvi", "Siva");
$mom_dad -> intro ();
$mom_dad -> FamilyName1 (); 
$sis_bro = new name2 ("ishu", "dev");
$sis_bro -> FamilyName2 ();
?>