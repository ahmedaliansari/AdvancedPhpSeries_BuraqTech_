
<?php
include("config.php");
if(isset($_POST)){
  extract($_POST);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Form Design</title>
  </head>
<body>
 <body>
   <div class="container-fluid bg-dark text-light py-3">
       <header class="text-center">
           <h1 class="display-6">Welcome to my page</h1>
           <span>{ Hafiz Ahmed ALi Ansari }</span>
       </header>
   </div>
   <section class="container my-2 bg-dark w-50 text-light p-2">
    <form class="row g-3 p-3 form-inline" action="insertphp.php" method="post">
        <div class="col-md-12">
          <label for="inputEmail4" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="name" placeholder="Type Your Name" name="name">
        </div>
        <div class="col-md-12">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Type Your E-Mail " name="email">
        </div>
        <div class="col-md-12">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password Here" name="pwd">
        </div>
        <div class="col-md-12">
          <label for="link" class="form-label">Image</label>
          <input type="text" class="form-control" id="img" placeholder="Enter link Here" name="img">
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-outline-light">Submit Now</button>
        </div>
      </form>
   </section>
  </body>
<table class="table bg-dark text-light">
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
<img src="<?php echo $row['img'];?>" width="100px" alt="">
      </td>
<td>
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
