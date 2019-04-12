<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->

    <!-- Our Custom CSS -->
    <link href="assets/css/bootstrap/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/style.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
    <!-- Font Awesome JS -->
    <script defer src="assets/css/fontawesome/js/all.js" ></script>

</head>

<body>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Ecole NaN</h3>
            <strong>EN</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="dashboard">
                    <i class="fas fa-home"></i>
                    Acceuil
                </a>
            </li>

            <li>
                <a href="course">
                    <i class="fas fa-briefcase"></i>
                    Cours
                </a>
            </li>
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-user-alt"></i>
                    Utilisateurs </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="users">Creer</a>
                        </li>
                        <li>
                            <a href="usersactions">Actions</a>
                        </li>
                    </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-image"></i>
                    Portfolio
                </a>
            </li>

        </ul>

    </nav>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span></span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <h2 class="text-center"><p class="alert alert-primary">UTILISATEURS</p></h2>

        <form action="users" method="post" class="rounded" style="padding: 30px;  font-weight: bold; background:rgb(246 84 45);" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="nom" class="col-form-label col-sm-6">Nom:</label>
                    <div class="col-sm-12">
                        <input type="text" id="nom" name="nom" class="form-control" placeholder="Votre nom">
                        <span class="form-text text-light" style="font-weight: normal; font-style: italic;"></span>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="prenoms" class="col-form-label col-sm-6">Prenom:</label>
                    <div class="col-sm-12">
                        <input type="text" id="prenoms" name="prenoms" class="form-control" placeholder="Votre prenom" />
                        <span class="form-text text-light" style="font-weight: normal; font-style: italic;"></span>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="mail" class="col-form-label col-sm-6">Mail:</label>
                    <div class="col-sm-12">
                        <input type="text" id="mail" name="mail" class="form-control" placeholder="Votre mail"
                    </div>
                </div>
            </div>
                <div class="form-group col-md-6">
                    <label for="contact" class="col-form-label col-sm-6">Contact:</label>
                    <div class="col-sm-12">
                        <input type="text" id="contact" name="contact" class="form-control" placeholder="Votre numero"
                    </div>
                </div>
            </div>
                <div class="form-group col-md-6">
                    <label for="image" class="col-form-label col-sm-6">Image:</label>
                    <div class="col-sm-12">
                        <input type="file" id="image" name="image" class="form-control" accept="image/*">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="statut" class="col-form-label col-sm-6">Statut:</label>
                    <div class="col-sm-12">
                        <input type="number" id="statut" name="statut" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="active" class="col-form-label col-sm-6">Active:</label>
                    <div class="col-sm-12">
                        <input type="number" id="active" name="active" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="mdp" class="col-form-label col-sm-6">Mot de passe:</label>
                    <div class="col-sm-12">
                        <input type="password" id="mdp" name="mdp" class="form-control" placeholder="Votre mot de passe" ">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn offset-lg-4 col-lg-6 offset-md-4 col-md-6   col-12" style="background:rgb(123 90 194);">AJOUTER</button>
                </div>
            </div>
</div>
        </form>
    </div>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="assets/css/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<!-- Popper.JS -->
<script src="assets/css/bootstrap/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/css/bootstrap/js/bootstrap.min.js" ></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>

</html>