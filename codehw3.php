<!DOCTYPE html>
<html>
<head>
    <title>CHALLENGE: ISBN VALIDATION</title>
</head>
<body>
<?php
$number="0747532699";
echo "CHALLENGE: ISBN VALIDATION"."<br>"."<br>";
echo "Checking ISBN: $number for validity....... "."<br>";

if(validate($number)==true)
  echo "This is a VALID ISBN"."<br>";

else
  echo "This is an INVALID ISBN"."<br>";

function validate($number)
{
$sum=0;
$i=10;
$j=0;
while($i>0)
{ 
if($number[9]=="X")
$sum+=10;

else  
$sum+=$i*$number[$j];
$i--;
$j++;
}
if($sum%11==0)
  return true;

else
  return false; 
}



?>
</body>
</html>