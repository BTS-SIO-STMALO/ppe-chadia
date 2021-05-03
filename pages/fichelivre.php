<?php
session_start();

include '../include/conbdd.php';
?>
<?php include '../templates/header.php'; ?>
<?php include '../templates/footer.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/homeconnecte.css">
    <title>Fiche livre</title>
</head>
<body>
   <?php 

   $id_livre = $_GET['id'];
   $stmt = $pdo->prepare("SELECT * FROM livre WHERE id =?");
    $stmt->execute([$id_livre]); 
    $result = $stmt->fetch();

   ?>
<div class="titre">
    <h1>Pousy Biblio</h1></div>
    <div id="titreDuLivre"><h2><?php echo $result['titre'];?></h2> </div>
</div>
   <table>
   <tr>
       <td>Titre</td>
       <td><?php echo $result['titre'];?></td>
   </tr>
   <tr>
       <td>Auteur</td>
       <td><?php echo $result['auteur'];?></td>
   </tr>
   <tr>
       <td>Année d'edition</td>
       <td><?php echo $result['anne_edition'];?></td>
   </tr>
   <tr>
       <td>Langue</td>
       <td><?php echo $result['langue'];?></td>
   </tr>
  
   
   
</table>


<button class="button3"><a href="traitementemprunt.php?id=<?php echo $result['id'];?>">Emprunter<a></button>





















</body>