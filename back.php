<?php
@include 'config.php';
error_reporting(0);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $subject = mysqli_real_escape_string($conn, $_POST['subject']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  $query = "insert into contact( name, email, subject, message) values ('$name','$email','$subject','$message')";

  mysqli_query($conn, $query);
  header('location:contact.html');

?>
