<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="./plugins/datatables/dataTables.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="Tab.php" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#">
            <i class="fa fa-bars"></i>
          </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-comments-o"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger">
                      <i class="fa fa-star"></i>
                    </span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted">
                    <i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted">
                      <i class="fa fa-star"></i>
                    </span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted">
                    <i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning">
                      <i class="fa fa-star"></i>
                    </span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted">
                    <i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-bell-o"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fa fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fa fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fa fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
            <i class="fa fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="./index.html" class="nav-link active">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  Tableau de bord
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="./general.html" class="nav-link">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                  Ajouter un site
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="./data.php" class="nav-link">
                <i class="nav-icon fa fa-table"></i>
                <p>
                  Liste des sites
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="./profile.html" class="nav-link">
                <i class="nav-icon fa fa-book"></i>
                <p>
                  Profil
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?php

  $tab["url"]=isset($_GET["url"]) ? $_GET['url'] : NULL;
  $tab["login"]=isset($_GET["Identifiant"]) ? $_GET['Identifiant'] : NULL;
  $tab["password"]=isset($_GET["mdp"]) ? $_GET['mdp'] : NULL;
  $tab["cms"]=isset($_GET["CMS"]) ? $_GET['CMS'] : NULL;
  $tab["status"]=isset($_GET["Status"]) ? $_GET['Status'] : NULL;
  $tab["description"]=isset($_GET["Description"]) ? $_GET['Description'] : NULL;
  $Confirmation=isset($_GET["mdp2"]) ? $_GET['mdp2'] : NULL;
  $bdd = new PDO('mysql:host=localhost;dbname=adrar', 'root', '');
if(!empty($_GET['Envoyer'])){  
  if (filter_var($tab["url"], FILTER_VALIDATE_URL)){
    if($tab["login"] == ""){
      ?>
        <script> alert("Veuillez saisir un identifiant")</script>
        <meta http-equiv="refresh" content="1;URL=http://localhost/dash-adrar/general.html">
        <?php 
    }
    else{
      if($tab["password"]==""){
        ?>
        <script> alert("Veuillez saisir un un Mot de passe")</script>
        <meta http-equiv="refresh" content="1;URL=http://localhost/dash-adrar/general.html">
        <?php 
      }
      else{
        if($Confirmation==$tab["password"]){
          if($tab["status"]== ""){
          ?>
          <script> alert("Selectionner un Status")</script>
          <meta http-equiv="refresh" content="1;URL=http://localhost/dash-adrar/general.html">
          <?php
          }
          else{
            if($tab["cms"]== ""){
            ?>
            <script> alert("Selectionner un Cms")</script>
            <meta http-equiv="refresh" content="1;URL=http://localhost/dash-adrar/general.html">
            <?php
            }
            else{
              $req=$bdd->prepare("INSERT INTO formulaire(url, login, password, cms, status, description) VALUES(:url, :login, :password, :cms, :status, :description)");
              $req->bindParam(':url', $tab["url"]);
              $req->bindParam(':login', $tab["login"]);
              $req->bindParam(':password', $tab["password"]);
              $req->bindParam(':cms', $tab["cms"]);
              $req->bindParam(':status', $tab["status"]);
              $req->bindParam(':description', $tab["description"]);
              $req->execute();
            }
          }  
        }
        else{
          ?>
            <script> alert("La confirmation est incorrect")</script>
            <meta http-equiv="refresh" content="1;URL=http://localhost/dash-adrar/general.html">
            <?php
        }
      }
    }  
  }
  else {
    ?>
    <script> alert("Saisir un URL correct")</script>
    <meta http-equiv="refresh" content="1;URL=http://localhost/dash-adrar/general.html">
    <?php
  }
}
?>


                <section class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-6">
                        <h1>Data Tables</h1>
                      </div>
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item">
                            <a href="#">Home</a>
                          </li>
                          <li class="breadcrumb-item active">Data Tables</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                  <!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Hover Data Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example2" class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                <?php
                foreach ($tab as $key => $value){
                  ?>
                                  <th>
                                    <?php echo $key?>
                                  </th>
                                  <?php
                }
                ?>

                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <?php 
                  $requete1=$bdd->query('SELECT url, login, password, cms, status, description from formulaire'); 
                  while($donnees=$requete1->fetch(PDO::FETCH_ASSOC)){             
                    foreach ($donnees as $key => $value) {
                      if ($key=='description'){
                        ?>
                                <td>
                                  <?php echo $value ?>
                                </td>
                              </tr>
                              <tr>
                                <?php }
                        else{
                        ?>
                                <td>
                                  <?php echo $value ?>
                                </td>
                                <?php
                        }
                    } 
                  } 
                
              
                ?>
                                  </td>

                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->

                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-alpha
    </div>
    <strong>Copyright &copy; 2014-2018
      <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- SlimScroll -->
  <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="../../plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- page script -->
  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>
</body>

</html>