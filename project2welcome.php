
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project 2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom CSS for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>

<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="project2welcome.php">Project 2 PHP/MySQL</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExampleDefault">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="project2welcome.php">Welcome <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="database.php">Inventory</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="navbar-text"><?php
                session_start();

                if($_SESSION['logged']==true){
                    $log_user = $_SESSION["username"];
                    echo "Welcome: $log_user";
                }
                elseif($_SESSION['logged']==false or $_SESSION['logged'] == null )
                    echo "Welcome: Guest";
                ?></></li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li><a href="project2_loginpage.php"><span class="fa fa-sign-in" aria-hidden="true"></span> Login</a></li>
        </ul>
            <li><a href="register.php" class="btn btn-primary" role="button"><strong>Sign Up</strong></a></li>
    </div>
</nav>
</div>
<main role="main" class="container">

    <div id="starter-template"></div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://static.pexels.com/photos/109371/pexels-photo-109371.jpeg" alt="First slide">
                <div class="carousel-caption">
                    <h3>Welcome!</h3>
                    <p>PC and Laptop Accessories</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://static.pexels.com/photos/8841/apple-desk-office-working-8841.jpg" alt="Second slide">
                <div class="carousel-caption">
                    <h3>Work Made Simpler</h3>
                    <p>PC and Laptop Accessories</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://static.pexels.com/photos/450035/pexels-photo-450035.jpeg" alt="Third slide">
                <div class="carousel-caption">
                    <h3>All Within Reach</h3>
                    <p>PC and Laptop Accessories</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</main><!-- /.container -->
</body>
</html>