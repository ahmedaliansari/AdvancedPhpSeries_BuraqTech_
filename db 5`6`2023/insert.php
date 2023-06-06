
<?php
include("config.php");

 $req=$_REQUEST["up"];
if(isset($_POST["update"])){
 
  extract($_POST);
$upq=mysqli_query($connect,"UPDATE from registration set name='$fullname',email='$email' where id='$req'");

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Inline form</h2>
  <p>Make the viewport larger than 768px wide to see that all of the form elements are inline, left aligned, and the labels are alongside.</p>
  <?php if(isset($_REQUEST["up"])){


      ?>
  
  <form class="form-inline" action="insert.php" method="post">
<?php } 
else{
  
  ?>

 <form class="form-inline" action="insertphp.php" method="post">
  
<?php } ?>

  <div class="form-group">
      <label for="email">FULL NAME:</label>
<?php 

if(isset($_REQUEST["up"])){
$req=$_REQUEST["up"];

$upquery=mysqli_query($connect,"select *from registration where id='$req'");
$row=mysqli_fetch_assoc($upquery);
}
?>

      <input type="text" class="form-control" id="email" value="<?php if(isset($_REQUEST["up"])){

echo $row["name"];
      } ?>" placeholder="Enter FullName" name="fullname">
    </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" value="<?php if(isset($_REQUEST["up"])){

echo $row["email"];
      } ?>" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" value="<?php if(isset($_REQUEST["up"])){

echo $row["password"];
      } ?>" name="pwd">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Image Link" name="img">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>

    <?php if(isset($_REQUEST["up"])){ ?>
    <button type="submit" class="btn btn-success" name="update">Update</button>
    <?php }
    
    else{?>
     <button type="submit" class="btn btn-default">Submit</button>
     <?php }?>
  </form>
</div>


<table class="table">
  <thead>
   <th>Emp ID</th>
   <th>Name</th>
   <th>Email</th>
   <th>Password</th>
   <th>Image</th>
   <th>Action</th>
  </thead>
  <tbody>

  <?php
  

  $query=mysqli_query($connect,"Select *from registration");
  while($row=mysqli_fetch_assoc($query)){

  ?>
    <tr>
      <td>
<?php echo $row["id"];?>
      </td>
      <td>
<?php echo $row["name"];?>
      </td>
      <td>
<?php echo $row["email"];?>
      </td>
      <td>
<?php echo $row["password"];?>
      </td>
      <td>
<img src="<?php echo $row['image'];?>" width="100px" alt="">
      </td>
<td>
  <a href="insert.php?up=<?php echo $row["id"]; ?>">Edit</a>
  <br>
<a href="delete.php?dlt=<?php echo $row["id"]; ?>">Delete</a></td>
    </tr>
    <?php
      }
    
    ?>
  </tbody>
</table>
</body>
</html>
