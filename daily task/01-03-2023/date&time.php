<style>


div{
    border: 1px solid black;
    width:50%;
    margin:auto;
    padding:5%;
}


</style>






<div >
    <center>
    <h1 >date & time</h1>
    </center>
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("m.Y.d") . "<br>";
echo "Today is " . date("d-m-Y") . "<br>";
echo "Today is " . date("l"). "<br>";
echo "The time is " . date("h:i:sa"). "<br>";

?>  
<hr>
<br>
© 2010-<?php echo date("Y");?>

<hr>
<?php
$t=mktime(12, 30, 24, 3, 1, 2010);
echo "Created date is " . date("Y-m-d h:i:sa", $t);
?>
<hr>
<br>
<?php
$t=mktime(14, 10, 9, 3, 1, 2010);
echo "Created date is " . date("Y-m-d H:i:sa", $t);
?>
<hr>
<br>
<?php
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
<br>
<hr>
<?php
$d=strtotime("Yesterday");
echo "Created date is " . date("l", $d);
?>
<br>
<hr>
<?php
date_default_timezone_set('Asia/Kolkata');
echo date('d-m-Y h:i:s a');
?>
</div>