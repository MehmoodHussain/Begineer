<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Panel</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <!-- start header div --> 
    <?php include('header.php');?>
 
    <!-- end header div -->   
     
    <!-- start wrap div -->   
    <div id="wrap">
        <!-- start PHP code -->
<?php
include('conn.php');
session_start();
if (!isset($_SESSION['username'])){
header('location:index.php');
}
//
?>
<a href="logout.php">logout</a>
</br>
</br>

<?php

$username=$_SESSION['username'];

$result=mysql_query("select * from users where username='$username'")or die(mysql_error);
$row=mysql_fetch_array($result);

$user=$row['username'];
$n=$row['names'];

echo $user;
//ss
?> 
    
        <!-- stop PHP Code -->
     
        <!-- title and description -->    
        <h3>Register a Course</h3>
        <p>Please select course Detail below</p>
         <form action ="subject.php" >
		 <select name="course">
		 
		 <?php 
	include('db.php');
	
	$sql1="select  course From courses ";
			$qry1 = mysql_query($sql1);
			while($rec = mysql_fetch_array($qry1))
            {
               $cred = $rec['course']; 
            
			
		

		 

		 ?>
		 <option Value="None">select course</option>
		  <option><?php } echo $cred;?></option>
		  </select>
		  <BR>
		  <BR>
		    <input type="submit" value="submit">
		 </form>


    
         
        <!-- start sign up form -->   
       
        <!-- end sign up form --> 
         
    </div>
    <!-- end wrap div --> 
</body>
</html>