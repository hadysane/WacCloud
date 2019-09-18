<?php include '../Controller/redirect_user.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>My_Cloud - Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="../index.php">My Cloud</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logIn.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signUp.php">Sign up</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <main class="container">
            <div class="m-4">
                <h1>Login</h1>
                <div>
                    <div class="hide alert alert-danger mt-3" id="display-error"></div>
                    <form class="mt-3" method="post">
                        <div class="form-group">
                            <label for="username_login">Username</label>
                            <input type="text" name="username_login" class="form-control" id="username_login">
                        </div>

                        <div class="form-group">
                            <label for="password_login">Password</label>
                            <input type="password" name="password_login" class="form-control" id="password_login">
                        </div>

                        <button type="submit" class="btn btn-success btn-lg btn-block mt-2">Connect</button>
                    </form>
                </div>
                <div class="m-3">
                    <p>
                        New on My Cloud ? <a href="signUp.php">Register now !</a>
                    </p>
                </div>
            </div>
        </main>
        <script
			src="https://code.jquery.com/jquery-3.3.1.js"
			integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../assets/login.js"></script>
    </body> 
</html>