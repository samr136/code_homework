<!DOCTYPE html>
<html>
<head>
    <title>CHALLENGE: 3 </title>
</head>
<body>
<?php

function coin_toss($coin)
{
$i=1;
$count=0;
$flag=0;
//$count to check for 2 consecutive heads, $flag variable to exit the while loop, $i checks the number of times a coin has been flipped 
echo "<h1>"."Beginning to Flip the Coin, looking for $coin heads in a row!!"."</h1>";
echo "<br>";
while($flag==0)
{

$flip= mt_rand(0,1);
if($flip==1)
  {echo "<img src='heads.png' alt='heads' style='width:100px;height:80px;'/>";
    $count++;}
else
  {echo "<img src='tails.png' alt='heads' style='width:100px;height:80px;'/>";
    $count=0;
  }
  if($count==$coin)
  {
    $flag=1;
    echo "<br>";
    echo "<h3>"."Flipped the coin $i times!"."</h3>";
    
  }
$i++;
}
}
coin_toss(4);

?>

<?php
//Challenge 1 - Book Lists
echo "<br>";
echo "---------------------------------------------------------------------------------------------------------------------------------"."<br>";
echo "<h1>"."Displaying books' details and total price"."</h1>";
$book_list= array(
array("PHP and MySQL Web Development","Luke Welling","144","Paperback",31.63),
array("Web Design with HTML, CSS, JavaScript and jQuery","Jon Duckett","135","Paperback",41.23),
array("PHP Cookbook: Solutions & Examples for PHP Programmers","David Sklar","14","Paperback",40.88),
array("JavaScript and JQuery: Interactive Front-End Web Development","Jon Duckett","251","Paperback",22.09),
array("Modern PHP: New Features and Good Practices","Josh Lockhart","7","Paperback",28.49),
array("Programming PHP","Kevin Tatroe","26","Paperback",28.96));

echo "<table border='6' class='stats' cellspacing='2'>
  <tr bgcolor='#808080'>
    <td align='center'>Tile</td>
    <td align='center'>Name</td>
    <td align='center'>Number of Pages</td>
    <td align='center'>Type</td>
    <td align='center'>Price</td>
  </tr>";
$sum=0;
for($i=0;$i<6;$i++)
{
  echo('<tr>');
  echo('<td style="height:20px;width:800px">' . $book_list[$i][0] . '</td>');
  echo('<td style="height:20px;width:400px">' . $book_list[$i][1] . '</td>');
  echo('<td style="height:20px;width:400px">' . $book_list[$i][2] . '</td>');
  echo('<td style="height:20px;width:150px">' . $book_list[$i][3] . '</td>');
  echo('<td style="height:20px;width:200px">' . $book_list[$i][4] . '</td>');
  echo('</tr>');
  /*echo $book_list[$i][0]." ".$book_list[$i][1]." ".$book_list[$i][2]." ".$book_list[$i][3]." ".$book_list[$i][4]."<br>";*/
    $sum+=$book_list[$i][4];
  
}
echo "<table table border='6' align='center' style='height:20px;width:700px' bordercolor='#FFFF00'>
  <tr bgcolor='#FFFF00'>
    <td align='center'> Total Price is : $sum</td>
  </tr>";
?>

</body>
</html>
