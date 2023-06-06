<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Stacked form</h2>
  <form action="insert.php" method="post">
  <div class="mb-3 mt-3">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="mb-3">
      <label for="pwd">Image:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Image link" name="img">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<table class="table table-dark">
    <thead>
        <th>Student id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Image</th>
    </thead>

<tbody>

<?php
include("config.php");
$datainsert = mysqli_query($connect,"select *from registration");
while($row = mysqli_fetch_assoc($datainsert)){
?>

<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["password"]; ?></td>
    <td><img src="<?php echo $row['img']; ?>" width="100px"></td>
    <td>
      <a class="text-dart" href="delete.php?dlt=<?php echo $row["id"];?>">Delete</a>
    </td>
</tr>
<?php
}
?>
</tbody>
</table>


</body>
</html>


