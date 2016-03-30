   
   <center> <div id="header"> 
     <div id="mainmenu"><ul>
        <li><a href='index.php'>Home</a></li>



       


        
<?php

error_reporting(E_ALL^E_NOTICE);
session_start();
if(!$_SESSION['username'])
{
?>

    <li><a href='login.php'>Login</a>
    <li><a href='index.php'>Sign up</a></li>
     <li><a href='#'>About</a></li>
    <li><a href='#'>Contact us</a></li>
<?php
}
else if($_SESSION['username'])
{
    ?>
    <li><a href='panel.php'>Panel</a></li>
    <li><a href='res.php'>My Courses</a></li>
     <li><a href='#'>About</a></li>
    <li><a href='#'>Contact us</a></li>
     <li><a href='logout.php'>Logout</a></li>


    <?php
}
?>



</ul></div>

    


    <!-- end header div -->  
     </div></center>