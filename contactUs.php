<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="contactstyle.css">
</head>
<body>
<?php require 'TopMenu.php'?>
  <div class="contact-pages">
    <h2>Contact Us</h2>
    <div class="contacts-info">
      
      <div class="itemss">
        <i class="icon fas fa-phone"></i>
        +01818831738
      </div>
      <div class="itemss">
        <i class="icon fas fa-envelope"></i>
        g&g@address.com
      </div>
      <div class="itemss">
        <i class="icon fas fa-clock"></i>
        Sunday - Thursday 8:00 AM to 8:00 PM
      </div>
    </div>
    <form action="" class="contact-forms">
      <input type="text" class="textb" placeholder="Your Name">
      <input type="email" class="textb" placeholder="Your Email">
      <textarea placeholder="Your Message"></textarea>
      <input type="submit" class="btn" value='Send'>
    </form>
  </div>
<!--  -->
  
<div>
   <?php include 'BottomMenu.php'; ?>
</div>

</body>
</html>