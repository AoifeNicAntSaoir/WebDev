<?php
          $name=$_POST['name'];
          $email = $_POST['email'];
          $comment = $_POST['comment'];
          
          $message = "Sender Name: " . $name . "\nSender Email: " . $email . "\nComment " . $comment;
          
          $result = mail("aoifesayers@gmail.com","Portfolio feedback", $message);
          if(!$result)
          {
           echo "error";
          }
          else {
          echo "success";
          }
?>