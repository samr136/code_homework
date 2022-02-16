<!DOCTYPE html>
<html>
<head>
    <title>CHALLENGE: CORRECT CHANGE</title>
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

$i=1;
$count=0;
$flag=0;
//$count to check for 2 consecutive heads, $flag variable to exit the while loop, $i checks the number of times a coin has been flipped 

echo "Beginning to Flip the Coin !! "."<br>";
while($flag==0)
{

$flip= mt_rand(0,1);
if($flip==1)
  {echo $img_heads;
    $count++;}
else
  {echo $img_tails;
    $count=0;
  }
  if($count==2)
  {
    $flag=1;
    echo "<br>";
    echo "Flipped the coin $i times!";
    
  }
$i++;
}


?>

</body>
</html>