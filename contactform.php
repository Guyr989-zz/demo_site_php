<!-- sends email to demo@demo.com -->
<?php
 if(isset($_POST['name'],$_POST['mail'],$_POST['message'])){
     $name = $_POST['name'];
     $subject = "Demo Email";
     $mailFrom= $_POST['mail'];
     $message = $_POST['message'];
     
     $mailTo = "demo@demo.com";
     $headers = "From: ".$mailFrom;
     $txt = "You have recived an email from ".$name;
     
    //  print_r("An email was sent to ".$mailTo);

     mail($mailTo, $subject, $txt, $headers);
     header("location:index.php?mailsent");
 }



