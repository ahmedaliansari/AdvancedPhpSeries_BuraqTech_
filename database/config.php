<?php
$connect = mysqli_connect("localhost","root","","class");
if($connect){
    echo "connect";
}
else{
    echo mysqli_errno;
}

?>