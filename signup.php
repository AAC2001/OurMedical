<?php

$conn = mysqli_connect('localhost','root','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = '<h1>Appointment made successfully!</h1>';
   }else{
      $message[] = 'Appointment failed';
   }
  
   if(isset($message)) {
       foreach($message as $message) {
       echo'<p class ="message">'.$message.'</p>';
   }
   }

}
?>