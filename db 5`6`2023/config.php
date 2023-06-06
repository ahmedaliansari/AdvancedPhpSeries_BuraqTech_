 <?php
 
 $host="localhost";
 $username="root";
 $pass="";
 $db="9to11";
 $connect=mysqli_connect($host,$username,$pass,$db);

 if(isset($connect)){

    echo "Database has been connected";
 }
 else{
    echo mysqli_errno;

 }
 
 ?>