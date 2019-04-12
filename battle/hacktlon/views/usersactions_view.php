<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>

    <!-- Bootstrap CSS CDN -->

    <!-- Our Custom CSS -->
    <link href="assets/css/bootstrap/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/style.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
    <!-- Font Awesome JS -->
    <script src="assets/css/fontawesome/js/all.js" ></script>

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
        <table class="table table-striped table-bordered table-responsive-sm">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Email</th>
                <th scope="col">Image</th>
                <th scope="col">Statut</th>
                <th scope="col">Active</th>
                <th scope="col">Password</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php  foreach($users as $member):?>
                <tr>
                    <td><?=$member['id'] ?></td>
                    <td><?=$member['nom']?></td>
                    <td><?=$member['prenoms']?></td>
                    <td><?=$member['email']?></td>
                    <td><img src="<?=$member['image']?>" alt="" class="img-fluid" ></td>
                    <td><?=$member['statut']?></td>
                    <td><?=$member['active']?></td>
                    <td><?=$member['password']?></td>
                    <td >
                        <a href="edit-<?=$member['id']?>"><i class="fa fa-edit text-primary"></i></a>
                        <a href="usersactions-<?=$member['id']?>"><i class="fa fa-trash text-danger"></i></a>
                        <a href="usersactions-<?=$member['id']?>" onclick="lock(<?=$member['id']?>)"><i class="fa fa-lock text-warning"></i></a>
                        <a href="usersactions-<?=$member['id']?>" onclick="unlock()"><i class="fa fa-unlock text-success"></i></a>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

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
<script type="text/javascript">
  function lock(<?=$member['id']?>)
  {
      $id = <?=$member['id']?>;
  $(document).ready(function () {
      $.ajax({
          type: "POST",
          url: "usersactions-$id",
          data: {
              id: "$id",
              action: "block"
          },
          success: function(data){
              Du code pour changer la classe du boutton
          },
          error: function(){
              Alert du msg d'erreur
          }
      })
  });
  }
  function unlock()
  {
      console.log('hello');
  }
</script>
</body>
</html>