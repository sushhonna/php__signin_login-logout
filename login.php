<?php

$login = 0;
$invalid = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'dbconnect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from registrations where username='$username' and password = '$password'";

    $result = mysqli_query($con, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $login = 1;
            session_start();
            $_SESSION['username'] = $username;
            header('location:home.php');
        } else {
            $invalid = 1;
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

    if ($login) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success..</strong> You are successfully loged in.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }

    ?>

    <?php

    if ($invalid) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Error..</strong> Invalid credential.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }

    ?>


    <div class="container mt-5">
        <h1 class="text-center">Welcome to login our website</h1>
        <form action="login.php" method="post">
            <div class="form-group m-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter your name.">
            </div>
            <div class="form-group m-3">
                <label>Password</label>
                <input type="text" name="password" class="form-control" placeholder="Enter your password.">
            </div>
            <button type="submit" class="btn btn-success w-100 m-3">Login</button>
        </form>
    </div>

    <!--  below bootstrap script is for JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>