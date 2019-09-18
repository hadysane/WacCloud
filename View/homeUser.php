<?php include '../Controller/redirect_visit.php';?>
<?php include '../Controller/displayInfo.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>My_Cloud - My Account</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/style.css">
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
       <main class="container mt-5 mb-5">
            <h1 class="mb-5">My Cloud</h1>

            <section class=" border border-dark border-5 p-5 rounded mb-2">
                <h3>Profile</h3>
                <h4>Username : <?php echo $result_login['username']; ?></h4>
                <h4>Email : <?php echo $result_login['email']; ?></h4>
                <h4>Lastname : <?php echo $result_login['lastname']; ?></h4>
                <h4>Firstname : <?php echo $result_login['firstname']; ?></h4>
            </section>

            <section class=" mt-5">

                <h3>Upload files</h3>
                <div class="hide alert alert-danger mt-3" id="display-error"></div>
                <div class="hide alert alert-success mt-3" id="display-success"></div>
                    <form id="uploadForm" method="post" action="../Controller/upload.php" enctype="multipart/form-data">
                        <div class="form-row">
                            <label class="m-1" for="upload_item">Upload</label>
                            <input type="file" name="upload_item" id="upload_item" multiple>
                        </div>
                       
                        <button type="submit" name="submit" class="btn btn-primary m-3">Upload</button>
                    </form>

                <table id="tab_upload" class="table table-hover mb-5">
                    <thead>
                        <tr>
                            <th scope="col">Id File</th>
                            <th scope="col">Name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Path</th>
                        </tr>
                    </thead>
                    <tbody id="filesUpload"></tbody>
                    
                </table>
            </section>
       </main>
       <script
			src="https://code.jquery.com/jquery-3.3.1.js"
			integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../assets/homeUser.js"></script>
    </body>
</html>