<html>
<head>
<body>
<form method="POST">
enter a number:<input type="text" name="num"><br>
<br><input type="submit" name="submit">
</form>
</body>
</html>
<?php
$num=$_POST['num'];
$sum=0;$rem=0;
for($i=0;$i<=strlen($num);$i++)
{
$rem=$num%10;
$sum=$sum+$rem;
$num=$num/10;
}
echo "sum of digits=$sum";
?>
