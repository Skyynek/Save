<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="1;URL=http://localhost/dash-adrar/general.html">
    <title>Document</title>
</head>
<body>
<?php
$tab["Lien"]=$_GET["URL"];
$tab["Login"]=$_GET["Identifiant"];
$tab["Password"]=$_GET["mdp"];
$tab["Check"]=$_GET["mdp2"];
$tab["Cms"]=$_GET["CMS"];
$tab["Status"]=$_GET["Status"];
$tab["Desc"]=$_GET["Description"];

if (filter_var($tab["Lien"], FILTER_VALIDATE_URL)){
    if($tab["Login"] == ""){
        ?>
        <script> alert("Veuillez saisir un identifiant")</script>
        <?php 
        }
        else{
            if($tab["Password"]==""){
                ?>
                <script> alert("Veuillez saisir un un Mot de passe")</script>
                <?php 
                }
            else{
                if($tab["Check"]==$tab["Password"]){
                    if($tab["Status"]== ""){
                        ?>
                        <script> alert("Selectionner un Status")</script>
                        <?php
                    }
                    else{
                        if($tab["Cms"]== ""){
                            ?>
                            <script> alert("Selectionner un Cms")</script>
                            <?php
                            }
                        else{
                            header('Location: http://localhost/dash-adrar/data.html');
                        }
                    }
                }
                else{
                ?>
                <script> alert("La Confirmation est incorrect")</script>
                <?php
                }
            }
        }
    }
else{
    ?>
    <script> alert("L'URL est incorect")</script>
    <?php 
    }

                      ?>
    
</body>
</html>