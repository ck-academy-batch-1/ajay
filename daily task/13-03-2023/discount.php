


<style>
    form{
        display:flex;
    }
    input{
        margin-right: 5px;
    }
</style>


<form method="POST">
    <label>enter the rate</label>
    <input type="text" name="valuez">
    <label>enter discount</label>
    <input type="text" name="valuer">
    <button type="submit"> SUBMIT</button>
</form>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rate = $_POST["valuez"];
    $disc = $_POST["valuer"];
    if ($rate > 0 && $disc >= 0 && $disc <= 100) {
        $price = $rate * (1 - $disc / 100);
        echo "discount price => $price";
    }
}
?>
 