




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <h1>Dashboard</h1>
        <button class="btn btn-outline-primary"><a href="signup.php" class="text-decoration-none text-dark">Create User</a></button>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col"> Address</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>

    </tr>
  </thead>
  <tbody>
  <?php
  $con = new mysqli('localhost', 'root', '', 'users');
  $sql= "select * from `userdata`";
  $result = mysqli_query($con,$sql);
  if ($result){
    while($row = mysqli_fetch_assoc($result)){
      $id  = $row['id'];
      $uname = $row['uname'];
      $email = $row['email'];
      $phone = $row['phone'];
      $password = $row['password'];
      $add = $row['ad'];
      echo '<tr>
      <th scope="row">'.$uname.'</th>
      <td>'.$email.'</td>
      <td>'.$phone.'</td>
      <td>'.$password.'</td>
      <td>'.$add.'</td>
      <td><button class="btn btn-primary"><a href="update.php? updateid='.$id.' " class="text-light text-decoration-none">Update</a></button>
      <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light text-decoration-none">Delete</a></button></td>
    </tr>';
    }
  }
  else{
    die(mysqli_error($con));
}
?>

    <!-- 
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table></div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>