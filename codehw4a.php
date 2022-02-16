<!DOCTYPE html>
<html>
<head>
    <title>CHALLENGE: COIN TOSS</title>
</head>
<body>

<?php

$image = 'https://www.medalsofamerica.com/media/catalog/product/d/o/donald-trump-heads-1-win-challenge-coin-4753-cc1176ft.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=10000&width=12500&canvas=12500:10000';
$imageData = base64_encode(file_get_contents($image));
$img_heads= '<img src="data:image/jpeg;base64,'.$imageData.'">';
$img_heads= '<img src="data:image/jpeg;base64,'.$imageData.'", style="width:70px;height:50px">';
$image = 'https://www.medalsofamerica.com/media/catalog/product/d/o/donald-trump-heads-1-win-challenge-coin-4753-cc1176bkrt.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=1000&width=1250&canvas=1250:1000';
$imageData = base64_encode(file_get_contents($image));
$img_tails= '<img src="data:image/jpeg;base64,'.$imageData.'", style="width:85px;height:55px">';
//Extracting image from the URL and creating 2 image variables - img_heads and img_tails

//echo $img_heads;
//echo $img_tails;
$j=1;

while($j<10)
{
echo "<br>";
echo "<br>";
if($j==1)
echo "Flipping a coin 1 time..."."<br>";
else
echo "Flipping a coin $j times..."."<br>";
for($i=1;$i<=$j;$i++)
{

$flip= mt_rand(0,1);
if($flip==1)
  echo $img_heads;
else
  echo $img_tails;
}
$j+=2;
}



?>

</body>
</html>