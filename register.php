
<title>Project 2</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Custom CSS for this template -->
<link href="style.css" rel="stylesheet">

<style type="text/css">
    form {
        margin: 0 auto;
        width:300px;
    }

    #td1{

        height: 100%;
        width: 100%;
        display: table;
    }

    #td2{

        vertical-align: middle;
        display: table-cell;
        height: 100%;
    }
    #tbl{

        margin: 0 auto;

    }
</style>

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
                <li class="nav-item">
                    <a class="nav-link" href="project2welcome.php">Welcome <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Inventory</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="navbar-text">Welcome</></li>
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
	<p align="center">

		<form method="post" action="register_back.php" >
		<table id="tbl"  >
			<tr>
				<td><label> Username: </label></td>
				<td><input type="text" name="username" /></td>
			</tr>
			<tr>
				<td><label> Password: </label></td>
				<td><input type="text" name="password" /></td>
			</tr>
			<tr>
				<td><label> Clearance Code: </label></td>
				<td><input type="text" name="code" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="Create new Account" /></td>
			</tr>
		</table>
		</form>
	
	</p>
</main>
</body>
</html>

