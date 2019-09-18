<?php include '../Controller/redirect_visit.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/style.css"/>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">My Cloud</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="homeUser.php">My Cloud<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../View/updateUser.php">Update my account</a>
                    </li>
                </ul>
                <form class="form-inline m-3 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
                <a class="nav-link btn btn-danger text-white" href="../Controller/deconnexion.php">Deconnexion</a>
            </div>
        </nav>
        <main class="container">
            <div class="ml-5 mt-4">
                <h1>Update profil</h1>
            </div>

             <div class="border border-dark border-5 p-5 rounded m-5">
             <h3>Deactivate account</h3>
               <a class="btn btn-lg btn-danger text-white deactivate">Deactivate</a>
            </div>

            <div class="border border-dark border-5 p-5 rounded m-5">
                <h3 class="mb-3">Update informations</h3>

                <div class="alert alert-info hide" id="display-info"></div>

                <form id="update-info" method="post"> 
                <!-- action="../Controller/update_info.php" -->
                    <div class="form-group">
                        <label for="new_lastname">Lastname</label>
                        <input type="text" class="form-control" name="new_lastname" id="new_lastname">
                    </div>

                    <div class="form-group">
                        <label for="new_firstname">Firstname </label>
                        <input type="text" class="form-control" name="new_firstname" id="new_firstname">
                    </div>

                    <div class="form-group">
                        <label for="new_username">Username </label>
                        <input type="text" class="form-control" name="new_username" id="new_username">
                    </div>

                    <div class="form-group">
                        <label for="email_updt">Email</label>
                        <input type="text" class="form-control" name="email_updt" id="email_updt">
                    </div>

                    <input type="submit" value="Validate" name="submit_update_info" class="btn btn-lg btn-info">
                    </form>
                </div>

                <div class="border border-dark border-5 p-5 rounded m-5">
                    <form id="form_update_pass" method ="post">
                        <h3 class="mb-3">Update password</h3>
                        <div class="alert alert-danger hide" id="display-error"></div>
                        <div class="alert alert-success hide" id="display-success"></div>
                        <div class="form-group">
                            <label for="password_updt">New password</label>
                            <input type="password" class="form-control" name="password_updt" id="password_updt">
                        </div>
                        <div class="form-group">
                            <label for="confirm_pass_updt">Confirm password</label>
                            <input type="password" class="form-control" name="confirm_pass_updt" id="confirm_pass_updt">
                        </div>   
                        <input type="submit" value="Validate" name="submit_update_pass" class="btn btn-lg btn-info" >
                    </form>
                </div>
            </div>
        </main>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../assets/update_info.js"></script>
    <script src="../assets/update_pass.js"></script>
    <script src="../assets/deactivate.js"></script>
</html>