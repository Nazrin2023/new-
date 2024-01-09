<html>
<head>
<title>factorial using loop</title></head>
<body>
<form method="post">
enter a number:<br>
<input type="text" name="number" id="number"/>
<input type="submit" name="submit" value="submit"/>
</form>

<?php
if($_POST){
$fact=1;
$number=$_POST['number'];
echo "factorial of $number=";
for($i=1;$i<=$number;$i++){
$fact=$fact*$i;
}
echo $fact . "<br>";
}
?>
</body>
</html>
