<?php
session_start();
include '../include/conbdd.php';


$id_utilisateur =$_SESSION['utilisateur']['id'];
$id_livre =$_GET['id'];
$sql = "INSERT INTO emprunt (id,id_inscrit, id_livre,date_emprunt)
VALUES (null,?,?,NOW())";
$stmt= $pdo->prepare($sql);
$resultat = $stmt->execute([$id_utilisateur,$id_livre]);
$reponse = $pdo->query('SELECT * FROM livre where id =' . $id_livre);
$donnees = $reponse->fetch();?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/homeconnecte.css">
        <?php include '../templates/header.php'; ?>
        <?php include '../templates/footer.php'; ?>
    </head>
     <body>
         <div class="emprunte"> <p> vous avez bien emprunté le livre <?php echo $donnees['titre'];?>
     </body>

