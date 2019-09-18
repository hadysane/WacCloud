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
                        <a class="nav-link" href="signUp.php">Sign Up</a>
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
                <h1>Sign Up </h1>
                <div class="hide alert alert-success mt-3" id="display-success"></div>
                <form class="mt-3" method="post" id="register">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="lastname">Lastname</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="firstname">Firstame</label>
                            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Firstname">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="exemple@My_Cloud.com">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <div class="form-group">
                        <label for="rpt_password">Repeat password</label>
                        <input type="password" name="rpt_password" class="form-control" id="rpt_password">
                    </div>

                    <button type="submit" class="btn btn-success btn-lg btn-block mt-2">Register</button>
                </form>
                <p class="mt-3">
                    Already have an account ?<a href="logIn.php"> Login now !</a>
                </p>
                <div class="hide alert alert-danger mt-3" id="display-error"></div>
            </div>
        </main>
    <script
			src="https://code.jquery.com/jquery-3.3.1.js"
			integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous">
    </script>
    <script src="../assets/register.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>    
</html>