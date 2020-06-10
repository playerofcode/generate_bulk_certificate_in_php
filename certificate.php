<?php 
//How to Generate Bulk Certificate
$con=mysqli_connect('localhost','root','','php_tutorial_2k20');//connecting to database
$query="select * from students";//To retrieve students into from database
$fire=mysqli_query($con,$query);
while($row=mysqli_fetch_array($fire))
{
header('content-type:image/jpeg');
$font= realpath('arial.ttf');
$image=imagecreatefromjpeg("format.jpg");
$color=imagecolorallocate($image, 51, 51, 102);
$date=date('d F, Y');//Current Date 
imagettftext($image, 18, 0, 880, 188, $color,$font, $date);
$name=$row['name'];
imagettftext($image, 48, 0, 120, 520, $color,$font, $name);
imagejpeg($image,"certificate/$name.jpg");//Storing certificate here
imagedestroy($image);
}

?>
