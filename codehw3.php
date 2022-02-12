<!DOCTYPE html>
<html>
<head>
    <title>CHALLENGE: ISBN VALIDATION</title>
</head>
<body>
<?php
$number="0647532699";
echo "CHALLENGE: ISBN VALIDATION"."<br>"."<br>";
echo "Checking ISBN: $number for validity....... "."<br>";

$sum=0;
$i=10;
$j=0;
while($i>0)
{
$sum+=$i*$number[$j];
$i--;
$j++;
}
if($sum%11==0)
  echo "This is a VALID ISBN"."<br>";

else
  echo "This is an INVALID ISBN"."<br>";
?>
</body>
</html>