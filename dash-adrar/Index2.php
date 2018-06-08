<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
    <?php
    $tab["name"]=isset($_GET["name"]) ? $_GET['name'] : NULL;
    $tab["email"]=isset($_GET["email"]) ? $_GET['email'] : NULL;
    $tab["password"]=isset($_GET["password"]) ? $_GET['password'] : NULL;
    $tab["passwordconfirm"]=isset($_GET["passwordconfirm"]) ? $_GET['passwordconfirm'] : NULL;
    $bdd = new PDO('mysql:host=localhost;dbname=adrar', 'root', '');
    if (($tab["name"] != NULL)&&($tab["email"] !=NULL)&&($tab["password"] !=NULL)&&($tab["passwordconfirm"] !=NULL)){     
        if ($tab["password"] == $tab["passwordconfirm"]) {       
        $req=$bdd->prepare("INSERT INTO inscription(name, email, password) VALUES(:name, :email, :password)");         
        $req->bindParam(':name', $tab["name"]);
        $req->bindParam(':email', $tab["email"]);
        $req->bindParam(':password', $tab["password"]);
        $req->execute();
        ?>
        <meta http-equiv="refresh" content="3;URL=http://localhost/dash-adrar/register.html">
        <?php
        }
        else{          
        echo "la confirmation du mot de passe est incorecte"; 
        } 
        } 
        else if (($tab["name"] == NULL)||($tab["email"]==NULL)||($tab["password"]==NULL)||($tab["passwordconfirm"]==NULL)){     
        echo "un champ est vide";
        }   
        ?>
        
      <p class="login-box-msg">Votre inscription a bien etait prise en compte</p>
    <?php


    ?>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
