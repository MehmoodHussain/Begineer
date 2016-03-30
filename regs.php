<?PHP
include('db.php');
$course=$_POST['course'];
$course_code=$_POST['course_code'];
$userid=$_POST['userid'];
$c1=$_POST['c1'];
$c2=$_POST['c2'];
$c3=$_POST['c3'];
$c4=$_POST['c4'];
$c5=$_POST['c5'];
$c6=$_POST['c6'];


        mysql_query("INSERT INTO stu_courses (userid,course1,course2,course3,course4,course5,course6,course_code, course) VALUES('". mysql_escape_string($userid) ."','". mysql_escape_string($c1) ."', '". mysql_escape_string($c2) ."', '". mysql_escape_string($c3) ."', '". mysql_escape_string($c4) ."', '". mysql_escape_string($c5) ."', '". mysql_escape_string($c6) ."', '". mysql_escape_string($course_code) ."',
         '". mysql_escape_string($course) ."') ") 
        
            or die(mysql_error());
             header('Location: res.php');
         ?>