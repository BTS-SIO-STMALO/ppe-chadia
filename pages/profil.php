<?php 
session_start();
// print_r($_SESSION['utilisateur']);
// echo "bonjour Monsieur " . $_SESSION['utilisateur']['prenom'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/homeconnecte.css">
    <title>Home connecté</title>
</head>
<body>
    <?php include '../templates/header.php'; ?>
    <?php include '../templates/footer.php'; ?>
        <div class="titre"> Pousy Biblio </div>
        <table>
            <h3>Mes informations personnelles</h3>
            <tr>
                <td>Prenom</td>
                <td><?php echo  $_SESSION['utilisateur']['prenom'];?></td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><?php echo  $_SESSION['utilisateur']['nom'];?></td>        
            </tr>
            <tr>
                <td>Date de naissance</td>
                <td><?php echo  $_SESSION['utilisateur']['date_naissance'];?></td>        
            </tr>
            <tr>
                <td>Téléphone</td>
                <td><?php echo  $_SESSION['utilisateur']['tel'];?></td>        
            </tr>
            <td>Email</td>
                <td><?php echo  $_SESSION['utilisateur']['email'];?></td>
            </tr>
            <tr>
                <td>Ville</td>
                <td><?php echo  $_SESSION['utilisateur']['ville'];?></td>        
            </tr>
            <tr>
                <td>Adresse</td>
                <td><?php echo  $_SESSION['utilisateur']['nom_rue'];?></td>        
            </tr>
            <tr>
                <td>Code postal</td>
                <td><?php echo  $_SESSION['utilisateur']['code_postal'];?></td>        
            </tr>
</table>
<button class="button2"><a href="#">Modifier Mes informations<a></button>