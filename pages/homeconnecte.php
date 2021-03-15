<?php
session_start();





    include '../include/conbdd.php';

    if(!empty($_POST['email'])){
        $email=$_POST['email'];
    }
    else{
        echo "merci de renseigner votre email";
        exit();
    }
    if(!empty($_POST['pass'])){
        $pass=$_POST['pass'];
    }    else{
        echo "merci de renseigner votre password";
        exit();
    }

    $stmt = $pdo->prepare("SELECT * FROM inscrit WHERE email =? and mot_de_passe = ?");
    $stmt->execute([$email,$pass]); 
    $result = $stmt->fetch();
    if($result == null){
        echo "vous vous êtes trompé de compte/mot de passe";
        exit();
    }
    $_SESSION['utilisateur'] = $result;
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
<div class="titre">Bienvenue dans  Pousy Biblio <strong><?php echo $result['prenom']; ?></strong></div>
<div id="conteneur">
       <!-- <div class="element"><img src="http://www.rmmagazine.com/wp-content/uploads/2013/03/open-book.jpg">alt="book"> -->
       <div class="element"><img src=" ../images/livreouvert.jpg"> <h2>nom du livre</h2><a href="../pages/catalogue.php">voir le catalogue<a></div>
       <div class="element"><img src=" ../images/livreouvert.jpg"> <h2>nom du livre</h2><a href="../pages/catalogue.php">voir le catalogue<a></div>
       <div class="element"><img src=" ../images/livreouvert.jpg"> <h2>nom du livre</h2><a href="../pages/catalogue.php">voir le catalogue<a></div>
       <div class="element"><img src=" ../images/livreouvert.jpg"> <h2>nom du livre</h2><a href="../pages/catalogue.php">voir le catalogue<a></div>






</div>

    
</body>