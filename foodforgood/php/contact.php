<?php

$connection = mysqli_connect("localhost","root","","foodforgood");

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "insert into feedback (name,email,message) VALUES ('$name','$email','$message') ";
$equery = mysqli_query($connection,$query);
if($equery){
	echo ' alert("Thank you. Will reach you soon.") ';
	header('Location: main.html');

}
else{
	echo "NOT";
	header('Location: main.html');

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