<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="#" method="GET">
<input type="text" name="nom">
<input type="text" name="prenom">
<input type="mail" name="email">
<button type="submit">Valider</button>
</form>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
$requet = $bdd->prepare('SELECT nom,prenom FROM exo');
$requet->execute();
$data = $requet->fetchAll(PDO::FETCH_ASSOC);
$requet2 = $bdd->prepare('SELECT email FROM exo WHERE email= '.$_GET["email"].'');
$requet2->execute();
$data2 = $requet2->fetchAll(PDO::FETCH_ASSOC);
print_r($data2);

if((isset($_GET["nom"]))&&(isset($_GET["prenom"]))&&(isset($_GET["email"]))) {
if(($_GET["email"])!=$data2["email"]){
    echo"";
}
else{
    echo"Il existe deja";
    
}
$tab["nom"]=$_GET["nom"];
$tab["prenom"]=$_GET["prenom"];
$tab["email"]=$_GET["email"];


$req=$bdd->prepare("INSERT INTO exo(nom, prenom, email) VALUES(:nom, :prenom, :email)");
              $req->bindParam(':nom', $tab["nom"]);
              $req->bindParam(':prenom', $tab["prenom"]);
              $req->bindParam(':email', $tab["email"]);
              $req->execute();
}


foreach ($data as $key => $value) {
    echo $value["nom"].'<br>'.$value["prenom"];
}




?>
    
</body>
</html>