<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["value1"];
    $b = $_POST["value2"];
   echo "given value for A =>$a<br>";
   echo "given value for A =>$b<br>";
    class calc  
    {
        public $a;
        public $b;

        public function __construct($a, $b) 
        {
            $this->a = $a;
            $this->b = $b;
        }

        public function sum() 
        {
            return $this->a + $this->b;
        }

        public function sub() 
        {
            return $this->a - $this->b;
        }
        public function div() 
        {
            return $this->a / $this->b;
        }
        public function mul() 
        {
            return $this->a * $this->b;
        }
    }
    
    $obj = new calc($a, $b);
    $add = $obj->sum();
    echo "ADDITION OF THE VALUE=> $add<br>";
    $sub = $obj->sub();
    echo "SUBTRACTION OF THE VALUE=> $sub<br>";
    $div = $obj->div();
    echo "DIVISION OF THE VALUE=> $div<br>";
    $mul = $obj->mul();
    echo "MULTIPLICATION  OF THE VALUE=> $mul<br>";
}
?>

<form method="post">
  <label>give value for A</label>
  <input type="text" name="value1" autocomplete="off" required><br>
  <label>give value for B</label>
  <input type="text" name="value2" autocomplete="off" required><br>
  <button type="submit">Submit</button>
</form>
