<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>MY courses</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <!-- start header div --> 
           
  
<?php include('header.php');?>




    <!-- end header div -->


 
    <!-- end header div -->   
     
    <!-- start wrap div -->   
    <div id="wrap">


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


<?php

$username=$_SESSION['username'];

$result=mysql_query("select * from users where username='$username'")or die(mysql_error);
$row=mysql_fetch_array($result);

$user=$row['username'];
$n=$row['names'];

echo $user;
//ss
?> 
        <!-- start PHP code -->
        <?php
         
           include('db.php');
		   //include('session.php');

 
        ?>
        <!-- stop PHP Code -->
     <hr>
     <h3>
        <!-- title and description -->    
        <h3> My Registered Course</h3>
      
       <table border="1" bgcolor="grey" color="white">

        <th>Course1</th>
        <th>course2</th>
        <th>course3</th>
        <th>course4</th>
        <th>course5</th>
         <th>course6</th>
        <th>course</th>
        <th>course code</th>
        <tr>
            <td>
		 
		 <?php 
	//$username=$_SESSION['username'];
	
	$sql1="select  * From stu_courses where userid='$user' ";
			$qry1 = mysql_query($sql1);
			$rec = mysql_fetch_array($qry1);
            $c1 = $rec['course1'];
            $c2 = $rec['course2'];
			$c3 = $rec['course3'];
		$c4 = $rec['course4'];
        $c5 = $rec['course5'];
        $c6= $rec['course6'];
        $cred = $rec['course'];
        $co = $rec['course_code'];
		 
		 ?>
		 <tr>
		  <TD><?php echo $c1;?></td>
             <TD><?php echo $c2?></td>
                 <TD><?php echo $c3;?></td>
                     <TD><?php echo $c4;?></td>
                         <TD><?php echo $c5;?></td>
                             <TD><?php echo $c6;?></td>
                                 <TD><?php echo $rec['course'];?></td>
                                 <TD><?php echo $co;?></td>
	</tr>
		  <BR>
		  <BR>
		</td>
    </tr>
</table>

    
     </h3>    
        <!-- start sign up form -->   
       
        <!-- end sign up form --> 
         <hr>
    </div>


    <!-- end wrap div --> 
</body>
</html>