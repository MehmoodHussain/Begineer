<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>SUbject</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
    

</head>
<body>
    <!-- start header div --> 
<?php include('header.php');?>



     
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

        <h3>SELECT SUBJECTS BASED CATEGORY</h3>
        <p>Please select course Detail below</p>
         <form action="regs.php" METHOD="POST">
        <?php
        
            $userid=$user;



    $course = $_GET['course'];


                        if($course=="MATHEMATICS")
            {
                
            $course_code ="MAT";        
            }
            else if($course=="BOTANY")
            {
                
            $course_code ="BOT";    
            }
    else{
$course_code ="NONE"; 

    }
 
echo "<br>";
echo "<br>";

  
    //$course_code = mysql_escape_string($_POST['course_code']);
         echo " COURSE SELECTED  IS <B>::  $course </B>COURSE CODE:: <B>$course_code</B> :";
echo "<br>";

echo "<br>";


//echo $course_code;		 


	 //echo $course;

	

		

            if($course=='MATHEMATICS')
            
            {
ECHO " <input type='checkbox' name='c1' value='GOMETRY'/>";echo "GOMETRY";
echo "<br>";
ECHO " <input type='checkbox' name='c2' value='GOMETRY1'/>";echo "GOMETRY1";
echo "<br>";
ECHO " <input type='checkbox' name='c3' value='ALGEBRA'/>";echo "ALGEBRA";
echo "<br>";
ECHO " <input type='checkbox' name='c4' value='MAT 211'/>";echo "MAT 211 ";
echo "<br>";
ECHO " <input type='checkbox' name='c5' value='MAT 213'/>";echo "MAT 213"; 
echo "<br>";
ECHO " <input type='checkbox' name='c6' value='MAT 413'/>";echo "MAT 413";
echo "<br>";




            }
           else if($course=='BOTANY')
            {
ECHO " <input type='checkbox' name='c1' value='BOTANY 111'/>"; echo "BOTANY 111";echo "<br>";
ECHO " <input type='checkbox' name='c2' value='BOTANY 110'/>";echo "BOTANY 110";echo "<br>";
ECHO " <input type='checkbox' name='c3' value='BOTANY 200'/>";echo "BOTANY 200";echo "<br>";
ECHO " <input type='checkbox' name='c4' value='BOTANY 220'/>";echo "BOTANY 220";echo "<br>";
ECHO " <input type='checkbox' name='c5' value='BOTANY 300'/>";echo " BOTANY 300";echo "<br>";
ECHO " <input type='checkbox' name='c6' value='BOTANY 400'/>";echo "BOTANY 400";echo "<br>";


            }
else
{


    echo "Select the course type to proceed thank you";
}

		 
		 ?>
	<br>
<input type='HIDDEN' name="course" value="<?php echo $userid;?>"/>
<input type='HIDDEN' name="course" value="<?php echo $course;?>"/>
<input type='HIDDEN' name="course" value="<?php echo $course_code;?>"/>
	<input type="submit"	value="Apply"/>

		 </form>
    


        <!-- start sign up form -->   
       
        <!-- end sign up form --> 
         
    </div>
    <!-- end wrap div --> 
</body>
</html>