<html>
<body>
<form method="POST">
<input type="text" name="num" value="" placeholder="Enter a number"/>
<input type="submit" name="submit" value="submit"/>
</form>

<?php
if(isset($_POST['submit']))
{
$n=$_POST['num'];
$x=$n;
$r=0;
while($n>0)
{
$r=$r*10;
$r=$r+($n%10);
$n=(int)($n/10);
}
echo "reverse of number" .$x. "is:" .$r;
return 0;
}
?>
</body>
</html>
