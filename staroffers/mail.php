<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "thangaram611@gmail.com";
  $email = $_REQUEST['email'];
  $name = $_REQUEST['name'];
  $phno = $_REQUEST['phno'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['msg'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
    header('Location: mail_redir.php');
  }
  
  //if "email" variable is not filled out, display the form
  else  {
    header('Location: index.html');
  }
?>