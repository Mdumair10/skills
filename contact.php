<?php
@include 'config.php';
error_reporting(0);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $subject = mysqli_real_escape_string($conn, $_POST['subject']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  $query = "insert into contact( name, email, subject, message) values ('$name','$email','$subject','$message')";

  mysqli_query($conn, $query);
  header('localtion:contact.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="stylesheet" href="./CSS/query.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>

  <!-- ------Header------- -->
  <header class="sub-header">
    <nav>
      <a href="index.html"><img src="./img/logo.png" alt="logo"></a>
      <div class="nav-links" id="navLinks">
        <i class="fa-solid fa-xmark" onclick="hidemenu()"></i>
        <ul>
          <li><a href="./index.html">HOME</a></li>
          <li><a href="./about.html">ABOUT</a></li>
          <li><a href="./course.html">COURSE</a></li>
          <li><a href="./blog.html">BLOG</a></li>
          <li><a href="./contact.php">CONTACT</a></li>
        </ul>
      </div>
      <i class="fa-solid fa-bars" onclick="showmenu()"></i>
    </nav>
    <h1>Contact</h1>
  </header>

  <!-- -------Location-------- -->
  <section class="location">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3585.348802810965!2d83.56403277454957!3d26.022141047796033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399189beb1564f49%3A0xf852e36a4d7c18cf!2sJummanpura%2C%20Kopaganj%2C%20Uttar%20Pradesh%20275305!5e0!3m2!1sen!2sin!4v1691926262355!5m2!1sen!2sin"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>

  <!-- ------Contact Us------ -->
  <section class="contact-us">
    <div class="row">
      <div class="contact-col">
        <div>
          <i class="fa-solid fa-house"></i>
          <span>
            <h5>Jummanpura Kopaganj</h5>
            <p>Mau, Utter Pradesh, IN</p>
          </span>
        </div>
        <div>
          <i class="fa-solid fa-phone"></i>
          <span>
            <h5>+91 8601507900</h5>
            <p>Monday to Saturday, 10AM to 6PM</p>
          </span>
        </div>
        <div>
          <i class="fa-regular fa-envelope"></i>
          <span>
            <h5>mohammadumair20112005@gmail.com</h5>
            <p>Email us your query</p>
          </span>
        </div>
      </div>
      <div class="contact-col">
        <form  method="post">
          <input type="text" name="name" placeholder="Enter your name" required>
          <input type="email" name="email" placeholder="Enter email address" required>
          <input type="text" name="subject" placeholder="Enter your subject" required>
          <textarea rows="8" name="message" placeholder="Message" required></textarea>
          <button type="submit" class="hero-btn red-btn">Send Message</button>
        </form>
      </div>
    </div>
  </section>

  <!-- ------Footer------- -->
  <section class="footer">
    <h4>About Us</h4>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis esse facere iure nostrum quod, molestias <br> ex
      culpa cum tempore natus qui at animi vitae!</p>
    <div class="icons">
      <i class="fa-brands fa-facebook-f"></i>
      <i class="fa-brands fa-twitter"></i>
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-brands fa-linkedin-in"></i>
    </div>
    <hr>
    <p>Made with <i class="fa-regular fa-heart"></i> by Mohammad Umair</p>
  </section>
  
  <script src="./JS/index.js"></script>
</body>

</html>