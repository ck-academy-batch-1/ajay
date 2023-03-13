
<form method="POST">
  <label >Enter a number for factorial:</label>
  <input type="text" name="value">
  <button type="submit">Submit</button>
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $n = $_POST["value"];

  class fact 
  {
    public $n;

    public function __construct($n) 
    {
      $this->n = $n;
    }

    public function factorial() 
    {
      $f = 1;

      for ($i = 1; $i <= $this->n; $i++) {
        $f = $f * $i;
      }
      echo "Factorial of $this->n is $f";
    }
  }

  $calc = new fact($n);
  $calc->factorial();
}
?>
