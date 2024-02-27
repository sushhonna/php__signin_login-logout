<?php

$success = 0;
$user = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'dbconnect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    // $query = "insert into registrations (username,password) values('$username','$password')";
    // $result = mysqli_query($con, $query);
    // if($result){
    //     echo "data entered successfully.";
    // }else{
    //     die(mysqli_error($conn));
    // }

    $sql = "select * from registrations where username='$username'";

    $result = mysqli_query($con, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            // echo "User already exist.";
            $user = 1;
        } else {
            $query = "insert into registrations (username,password) values('$username','$password')";
            $result = mysqli_query($con, $query);
            if ($result) {
                // echo "Signup successfully.";
                $success = 1;
                // header("location:login.php");
            } else {
                die(mysqli_error($conn));
            }
        }
    }

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <?php

    if ($user) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sorry..</strong> User already exist.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
    ?>

    <?php

    if ($success) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success..</strong> You are successfully signed up.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
    ?>

    <div class="container mt-5">
        <h1 class="text-center">Welcome to sign up our website</h1>
        <form action="sign.php" method="post">
            <div class="form-group m-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter your name.">
            </div>
            <div class="form-group m-3">
                <label>Email ID</label>
                <input type="text" name="email" class="form-control" placeholder="Enter your email ID.">
            </div>
            <div class="form-group m-3">
                <label>Mobile</label>
                <input type="text" name="mobile" class="form-control" placeholder="Enter your mobile.">
            </div>
            <div class="form-group m-3">
                <label>Password</label>
                <input type="text" name="password" class="form-control" placeholder="Enter your password.">
            </div>
            <div class="d-flex flex-row justify-content-between m-3">
                <button type="submit" class="btn btn-success">Signup</button>
                <button class="btn btn-primary text-light"><a href="login.php" class="text-light text-decoration-none">Login</a></button>
            </div>

        </form>
    </div>

    <!--  below bootstrap script is for JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>