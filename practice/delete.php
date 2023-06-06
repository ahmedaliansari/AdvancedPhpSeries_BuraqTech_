<?php
include("config.php");
$reqid=$_REQUEST["dlt"];
$query="delete from registration where id='$reqid'";
$query2=mysqli_query($connect,$query);
header("Location:insert.php");
?>