
<?php

// include fichier de connexion bdd pour etablir la connexion avec la bdd :
    include '../include/conbdd.php';
 // recuperation des informations formulaire

    if(!empty($_POST['nom'])){
        $nom=$_POST['nom'];
    }
    else{
        echo "merci de renseigner votre nom";
        exit();
    }
    if(!empty($_POST['prenom'])){
        $prenom=$_POST['prenom'];
    }
    else{
        echo "merci de renseigner votre prenom";
        exit();
    }
    if(!empty($_POST['date'])){
        $date=$_POST['date'];
    }
    else{
        echo "merci de renseigner votre date de naissance";
        exit();
    }
    if(!empty($_POST['pass'])){
        $pass=$_POST['pass'];
    }
    else{
        echo "merci de renseigner votre mot de passe";
        exit();
    }
    if(!empty($_POST['email'])){
        $email=$_POST['email'];
    }
    else{
        echo "merci de renseigner votre email";
        exit();
    }
    if(!empty($_POST['tel'])){
        $tel=$_POST['tel'];
    }
    else{
        echo "merci de renseigner votre numéro de téléphone";
        exit();
    }
    if(!empty($_POST['nomrue'])){
        $nomrue=$_POST['nomrue'];
    }
    else{
        echo "merci de renseigner le nom de votre rue";
        exit();
    }
    if(!empty($_POST['ville'])){
        $ville=$_POST['ville'];
    }
    else{
        echo "merci de renseigner votre ville";
        exit();
    }
    if(!empty($_POST['codepostale'])){
        $codepostale=$_POST['codepostale'];
    }
    else{
        echo "merci de renseigner votre code postale";
        exit();
    }
  
        $sql = "INSERT INTO inscrit (id,nom, prenom,date_naissance,nom_rue,ville,code_postal,email,tel,mot_de_passe)
        VALUES (null,?,?,?,?,?,?,?,?,?)";
        $stmt= $pdo->prepare($sql);
        $resultat= $stmt->execute([$nom,$prenom,$date,$nomrue,$ville,$codepostale,$email,$tel,$pass]);
    
        if($resultat == true){
?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="../css/reset.css">
            <link rel="stylesheet" href="../css/inscription.css">
            </head>
            <body>
                <div class ="motAcceuil">
                <h1>Pousy biblio </h1>
                <h2>Bonjour <?php echo $prenom; ?> </h2>
                    <em><p> vous étes bien inscrit dans le site veuillez acceder à la page de connexion</p></em>
                    <button class="button1" type="button"><a href="../pages/connexion.php">
                     Connexion
                    </button> 
                </div>
            </body>
            </html>
           
<?php
            
        }
        else{
            print_r($pdo->errorInfo());
        }




?>