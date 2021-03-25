<?php
session_start();
$result =$_POST['result'];
$_SESSION['result']= $result;
?>
<form action="site2.php" method="post">
    <p>6*2=</p>
    <input type="text"name="result1">
    <input type="submit" name="next">
</form>
