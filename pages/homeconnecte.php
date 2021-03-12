
<?php

// include fichier de connexion bdd pour etablir la connexion avec la bdd :
    include '../include/conbdd.php';
 // recuperation des informations formulaire

    if(!empty($_POST['email'])){
        $email=['email'];
    }
    else{
        echo "merci de renseigner votre mail";
        exit();
    }
    if(!empty($_POST['pass'])){
        $pass=['pass'];
    }    else{
        echo "merci de renseigner votre password";
        exit();
    }

        //bdd contient info inscrit !
      

    ?>