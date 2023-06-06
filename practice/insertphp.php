<?php
include("config.php");
extract($_POST);
$q="insert into registration (id,name,email,password,img) values('','$name','$email','$pwd','$img')";
$query=mysqli_query($connect,$q);

if($query>0)
{
    echo "Data has been Inserted";
    header("Location:insert.php");
}
else{
    echo "Data Has not been inserted";
}
?>