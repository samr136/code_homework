<!DOCTYPE html>
<html>
<head>
    <title>CHALLENGE: CORRECT CHANGE</title>
</head>
<body>
<?php
$amount=360;
$val;
$cents=100;
$quarter=25;
$nickel=5;
$dime=10;
echo "CHALLENGE: CORRECT CHANGE"."<br>"."<br>";
if($amount==0)
echo "You are due no change!!";
else
{
echo "You are due $amount cents back in change total"."<br>";
echo "You are due back ";
  
while($amount!=0)
  {if($amount>=100)
{
$val=($amount-$amount%100)/100;
echo "$val dollar(s) ";
$amount= $amount%100;

}
else if ($amount>=25)
{
$val=($amount-$amount%25)/25;
echo "$val quarter(s) ";
$amount= $amount%25;

}
else if ($amount>=10)
{
$val=($amount-$amount%10)/10;
echo "$val dime(s) ";
$amount= $amount%10;

}
else if ($amount>=5)
{
$val=($amount-$amount%5)/5;
echo "$val nickel(s) ";
$amount= $amount%5;
}
else
  {echo "$amount cent(s) ";
   $amount=0;
 }
}
}
?>
</body>
</html>