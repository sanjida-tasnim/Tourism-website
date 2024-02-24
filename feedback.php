<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = 'chtgsanjidashawon@gmail.com';
  $headers = 'From: '.$mailFrom;
  $txt = "You have received an email from ".$name. ".\n\n".$message;
  mail($mailTo, $subject, $txt, $headers);

  header('Location: vaiups.php?mailsend');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <style>
      body{
        margin: 0;
        background-image: url(aaa.jpg);
        background-repeat: no-repeat;
        background-size: cover;
      }
      .contact{
        margin-top: 200px;
        margin-left: 350px;
        margin-right: 350px;
        color: white;
        background-color: rgba(0,0,0,0.6);
        border: 2px solid white;
      }
      button{
        color: white;
        background-color: darkorange;
        border: none;
        padding: 10px 12px;
        margin-left: 350px;
        margin-bottom: 15px;

      }
      input{
        color: white;
      }
      span{
        margin-left: 15px;
      }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <form class="contact" action="vaiups.php" method="post"><br>
     <span>Name <input type="text" name="name" style="margin-left: 20px;background-color: rgba(0,0,0,0.6);"></span><br><br>
     <span>Email <input type="text" name="email" style="margin-left: 20px;background-color: rgba(0,0,0,0.6);"></span><br><br>
     <span>Subject <input type="text" name="subject" style="margin-left: 10px;background-color: rgba(0,0,0,0.6);"></span><br><br>
     <span>Message <textarea name="message" rows="8" cols="80" style="margin-left: 2px;background-color: rgba(0,0,0,0.6);color: white;"></textarea></span><br><br>
             <button type="submit" name="submit" >Send Mail</button>
    </form>
  </body>
</html>
