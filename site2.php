<?php
session_start();
$result1 =$_POST['result1'];
$_SESSION['result1']= $result1;
?>
<form action="ses.php" method="post">
    <p>5*2=</p>
    <input type="text"name="result2">
    <input type="submit" name="next">
</form>
