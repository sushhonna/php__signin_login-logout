<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome page</title>
    <style>
        img {
            width: 100%;
            height: 280px !important;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex flex-row justify-content-around  mt-5">
        <h1 class="text-center text-primary">Welcome
            <i>
                <?php
                echo $_SESSION['username'];
                ?>
            </i>
            to our website
        </h1>
        <div class="text-left">
            <a href="logout.php" class="btn btn-warning">Logout</a>
            <a href="sign.php" class="btn btn-info">Signup?</a>
        </div>
    </div>

    <section class="my-3">
        <div class="py-3">
            <h3 class="text-center">About Us</h3>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 h-25">
                    <img src="girl.jpg" alt="sushma" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">I am Sushma Honna</h2>
                    <p class="py-2">I am a software developer with ahving 7 years of rich experiance in frond
                        end
                        development skills
                        like html, css, js,ts, php, angular bootstrap etc..
                        I am Angular developer with 7+ years of experience in front end. I worked on Angular
                        2/4/5/6.
                        Since last 2
                        years I am working on Angular 6, Javascript, Typescript, HTML, CSS, Bootstrap and
                        Highcharts
                        library, I have
                        good experience in bug tracking tools such as JIRA, Version Control tools such as GIT.
                        My area
                        of interest is UI
                        developer with different Javascript framework.
                    </p>
                    <a href="contact.php" class="btn btn-success">More details</a>
                </div>
            </div>
        </div>

    </section>


</body>

</html>