<?php
session_start();
include '../include/conbdd.php';
$reponse = $pdo->query('SELECT * FROM livre');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/homeconnecte.css">
    <title>Catalogue</title>
    
</head>

<body>
<?php include '../templates/header.php'; ?>
<?php include '../templates/footer.php'; ?>
<label for="site-search">Rechercher par titre:</label>
<input type="search" id="site-search" >

<button>rechercher</button>
<div id="conteneur">
        <?php
            while ($donnees = $reponse->fetch()){
            ?>
             <div class="element"><img src=" ../images/livreouvert.jpg"> <h3>
                  <?php echo $donnees['titre']; ?></h2><button class="button1">
                      <a href="../pages/fichelivre.php?id=<?php echo $donnees['id']; ?>">Voir la description<a></button></div>
            <?php
            }?>
            
        ?>       
      



</div>