<?php

$connection = mysqli_connect("localhost","root","","foodforgood") or die("no connection");

if(isset($_POST['submit']))
{
$place = $_POST['place'];
$category = $_POST['category'];
$quantity = $_POST['quantity'];
$type = $_POST['type'];

$query3 = " insert into food (place,category,quantity,type) values ('$place','$category','$quantity','$type') ";

$equery = mysqli_query($connection,$query3);
if($equery){
	echo ' alert("Thank you. Will reach you soon.") ';
	header('Location: inprogress.html');

}
else{
	echo "NOT" . mysqli_error($connection);
	header('Location: main2.html');

}
}/*
echo '<script type="text/javascript">';
echo ' alert("Thank you. Will reach you soon.") ';
echo '</script>';

    echo '<script type="text/javascript"> ';
   // echo ' function openulr(newurl) {';
    echo '  if (confirm("Thank you. Will reach you soon.")) {';
    echo '    document.location = main.html; ';
    echo '  }';
   // echo '}';
    echo '</script>';*/

mysqli_close($connection);
?>