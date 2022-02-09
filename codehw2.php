<!DOCTYPE html>
<html>
<head>
    <title>CHALLENGE: 99 Bottles of Beer</title>
</head>
<body>
<?php
$i=4;
$dec=3;
echo "CHALLENGE: 99 Bottles of Beer"."<br>"."<br>";
while($i>0)
{
  if($i==1)
    echo "$i bottle of beer on the wall, $i bottle of beer. 
Take one down, pass it around, $dec bottles of beer on the wall. "."<br>"."<br>";
else if($dec==1)
echo "$i bottle of beer on the wall, $i bottle of beer. 
Take one down, pass it around, $dec bottle of beer on the wall. "."<br>"."<br>";

else
  echo "$i bottles of beer on the wall, $i bottles of beer. 
Take one down, pass it around, $dec bottles of beer on the wall. "."<br>"."<br>";
$i--;
$dec--;
}

?>
</body>
</html>