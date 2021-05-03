<?php
session_start();





    include '../include/conbdd.php';

    if(empty( $_SESSION['utilisateur'])){
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
    }
   
    $reponse = $pdo->query('SELECT date_emprunt, titre FROM emprunt INNER JOIN livre ON emprunt.id_livre = livre.id WHERE emprunt.id_inscrit='.$_SESSION['utilisateur']['id']);
    $donnees = $reponse->fetchAll();

   ?>
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/homeconnecte.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <title>Home connecté</title>
</head>
<body>
<?php include '../templates/header.php'; ?>
<?php include '../templates/footer.php'; ?>
<div class="titre">Bienvenue dans  Pousy Biblio <strong><?php echo $_SESSION['utilisateur']['prenom']; ?></strong></div>
<div id="conteneur">
 <div class="section1">
    <ul class="list-group">
    <li class="list-group-item bg-info"> Livres empuntés</li>
    <?php 
    
        foreach($donnees as &$livre){
             
            echo '<li class="list-group-item"><b>Livre </b> '.$livre['titre'].' <b> réservé le </b>'.$livre['date_emprunt'].'</li>';
        }
     
     ?>
    </ul>
 </div>      
 <div class=section2>
     
 <img src=" ../images/map.PNG"> 

 </div>







</div>

    
</body>