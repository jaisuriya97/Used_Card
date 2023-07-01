<?php
$con = new mysqli('localhost', 'root', '', 'users');
if (isset($_POST['submit'])) {
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $add =  $_POST['address'];
  $password = $_POST['password'];

  $sql = "INSERT INTO `userdata` (uname,email,phone,password,ad) VALUES('$uname','$email','$phone','$password','$add')";
  if ($con->query($sql) === TRUE) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <b>Well Done</b> &nbsp;&nbsp;&nbsp;  Submitted successfuly
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup
    </title>
    <style>
    .nav ul li:hover {
      color: #0d6efd;

      background-color: #0d6efd;
      border-radius: 5px;
      transition-duration: 1s;
    }

    header .nav-link:hover {
      color: white !important;
    }

    .album .container h3:hover {
      color: black !important;
      cursor: pointer !important;
      transition-duration: 1s;
    }

    .testimonial-card .card-up {
      height: 120px;
      overflow: hidden;
      border-top-left-radius: 0.25rem;
      border-top-right-radius: 0.25rem;
    }

    .testimonial-card .avatar {
      width: 110px;
      margin-top: -60px;
      overflow: hidden;
      border: 3px solid #fff;
      border-radius: 50%;
    }

    .map-container-2 {
      overflow: hidden;
      padding-bottom: 56.25%;
      position: relative;
      height: 0;
    }

    .map-container-2 iframe {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }

    span:hover {
      color: #0d6efd;
    }

    .nav .col-md-2 button:hover {
      color: #fff;
    }

    .sig {
      text-decoration: none;
      color: #fff;
    }

    .sig:hover {
      color: #fff;
    }

    .log {
      text-decoration: none;
      color: #0d6efd;
    }

    .log:hover {
      color: white;
    }
  </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<section class="nav">
    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom w-100>"
        <a  >
       
        </a>
        <a href="homepage.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none"> <h1 style="color: #0d6efd;">Cars</h1> </a>

        <ul class="nav col-12 col-md-auto mb-3  justify-content-center mb-md-0 ">
          <li><a href="homepage.php" class="nav-link px-2  link-dark">&nbsp;&nbsp;&nbsp; Cars for Sale&nbsp;&nbsp;</a></li>
          <li><a href="homepage.php" class="nav-link px-2 link-dark">&nbsp;Research & Reviews&nbsp;</a></li>
          <li><a href="homepage.php" class="nav-link px-2 link-dark">&nbsp;&nbsp;Service & Repair&nbsp;&nbsp;</a></li>
          <li><a href="homepage.php" class="nav-link px-2 link-dark">&nbsp;&nbsp;About&nbsp;&nbsp;</a></li>
        </ul>

        <div class="col-md-2 text-end">
          <button type="button" class="btn btn-outline-primary " onclick="location.href = 'login.php';">Login</button>
          <button type="button" class="btn btn-primary m-2" onclick="location.href = 'signup.php';">Sign-up</button>

        </div>
      </header>
    </div>
  </section>
    <div class="container mt-5">
    <form method="POST">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uname" autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"autocomplete="off">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone" autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address" autocomplete="off">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
  </div>
  <input type="submit" value="Submit" class="btn btn-primary" name="submit">
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>