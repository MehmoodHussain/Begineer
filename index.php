<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>HOME</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <!-- start header div -->
<?php include('header.php');?>
    <!-- start wrap div -->  
    <div id="wrap">
         
        <!-- start php code -->
        <?php

        include('db.php');
 if(isset($_POST['name']) && !empty($_POST['name']) AND isset($_POST['email']) && !empty($_POST['email'])){
    $name = $_POST['name']; // Turn our post into a local variable
    $email = $_POST['email']; // Turn our post into a local variable
	$phone = $_POST['phone'];
    $names = $_POST['names'];
	             
if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
    // Return Error - Invalid Email
    $msg = 'The email you have entered is invalid, please try again.';
}
else
{
    // Return Success - Valid Email
    $msg = 'Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email.';
}

$hash = md5( rand(0,1000) );	
$password = ( rand(100000,600000) );	
	
	mysql_query("INSERT INTO users (username, password, email, hash,phone,names) VALUES(
'". $name."', 
'". md5($password) ."', 
'". $email ."', 
'". $hash."',
'". $phone ."',
'". $names."') ") or die(mysql_error());

$to      = $email; // Send email to our user
$subject = 'Signup | Verification'; // Give the email a subject 
$message = '
 
Thanks for signing up!
Your
 account has been created, you can login with the following credentials 
after you have activated your account by pressing the url below.
 
------------------------
Username: '.$name.'
Password: '.$password.'
------------------------
 
Please click this link to activate your account:
http://www.yourwebsite.com/verify.php?email='.$email.'&hash='.$hash.'
 
'; // Our message above including the link
                     
$headers = 'From:noreply@m.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email
	
}
             
?>
         
        <!-- stop php code -->
     
        <!-- title and description -->   
 
<?php
//session_start();
if(!$user)
{
?>

       <h3>Signup Form</h3>
        <p>Please  fill in to create your account</p>
         <?php 
    if(isset($msg)){  // Check if $msg is not empty
        echo '<div class="statusmsg">'.$msg.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
    } 
?>



        <!-- start sign up form -->  
        <form action="" method="post">
            <label for="name">Full Names:</label><BR>
            <input type="text" name="name" value="" /><BR>
             <label for="name">Username:</label><BR>
            <input type="text" name="names" value="" /><BR>
            
            <label for="email">Email:</label><BR>
            <input type="text" name="email" value="" /><BR>
             <label for="email">Phone:</label><BR>
            <input type="phone" name="phone" value="" /><BR>
             
            <input type="submit" class="submit_button" value="Sign up" />
        </form>
        <!-- end sign up form -->
         
    </div>

    <?php
}
else if($user)
{
    ?>
    Welcome <?php echo $user;?> <BR>TO ONLINE PORTAL
	<BR> TO REGISTER A COURSE >LOGIN>SELECT ACOURSE>SELECT UNITS.
	<BR>THIS IS ONLINE COURSE REGISTRATION SYSTEM

    <?php
}

?>
    <!-- end wrap div -->
</body>
</html>