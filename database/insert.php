<?php
include("config.php");
extract($_POST);
$data = "insert into registration (id,name,email,password,img) value ('','$name','$email','$pswd','$img')";
$dataStore = mysqli_query($connect,$data);

if($dataStore>0){
    echo "<script>alert('Data successfully inserted');</script>";
    header("Location:form.php");
}

else{
    echo "Data not inserted";
}

?>