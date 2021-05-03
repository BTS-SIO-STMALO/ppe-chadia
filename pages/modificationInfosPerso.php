<?php
session_start();
include '../include/conbdd.php';

var_dump($_POST);

if(!empty($_POST['motDePasseActuel'])){
    
    $stmt = $pdo->prepare("SELECT * FROM `inscrit` WHERE email='".$_SESSION['utilisateur']['email']."' AND mot_de_passe='".$_POST['motDePasseActuel']."'");
    $stmt->execute(); 
    $result = $stmt->fetchAll();
    if(empty($result)){
        echo 'existe pas';
        
    }
    else{
        if(!empty($_POST['nom'])){
            $stmt = $pdo->prepare("UPDATE inscrit SET nom = '".$_POST['nom']."' WHERE inscrit.email = '".$_SESSION['utilisateur']['email']."' AND inscrit.mot_de_passe='".$_POST['motDePasseActuel']."'");
            $stmt->execute(); 
            
        }
        
        if(!empty($_POST['prenom'])){
            $stmt = $pdo->prepare("UPDATE inscrit SET prenom = '".$_POST['prenom']."' WHERE inscrit.email = '".$_SESSION['utilisateur']['email']."' AND inscrit.mot_de_passe='".$_POST['motDePasseActuel']."'");
            $stmt->execute();         }
        
        if(!empty($_POST['date_naissance'])){
            $stmt = $pdo->prepare("UPDATE inscrit SET date_naissance = '".$_POST['date_naissance']."' WHERE inscrit.email = '".$_SESSION['utilisateur']['email']."' AND inscrit.mot_de_passe='".$_POST['motDePasseActuel']."'");
            $stmt->execute();         }
        
        if(!empty($_POST['pass'])){
            $pass=['pass'];
        }
        
        if(!empty($_POST['email'])){
            $stmt = $pdo->prepare("UPDATE inscrit SET email = '".$_POST['email']."' WHERE inscrit.email = '".$_SESSION['utilisateur']['email']."' AND inscrit.mot_de_passe='".$_POST['motDePasseActuel']."'");
            $stmt->execute(); 
        }
        
        if(!empty($_POST['tel'])){
            $stmt = $pdo->prepare("UPDATE inscrit SET tel = '".$_POST['tel']."' WHERE inscrit.email = '".$_SESSION['utilisateur']['email']."' AND inscrit.mot_de_passe='".$_POST['motDePasseActuel']."'");
            $stmt->execute();        }
        
        if(!empty($_POST['nom_rue'])){
            $stmt = $pdo->prepare("UPDATE inscrit SET nom_rue = '".$_POST['nom_rue']."' WHERE inscrit.email = '".$_SESSION['utilisateur']['email']."' AND inscrit.mot_de_passe='".$_POST['motDePasseActuel']."'");
            $stmt->execute();    
        }
        
        if(!empty($_POST['ville'])){
            $stmt = $pdo->prepare("UPDATE inscrit SET ville = '".$_POST['ville']."' WHERE inscrit.email = '".$_SESSION['utilisateur']['email']."' AND inscrit.mot_de_passe='".$_POST['motDePasseActuel']."'");
            $stmt->execute();         
        }
        
        if(!empty($_POST['code_postal'])){
            $stmt = $pdo->prepare("UPDATE inscrit SET code_postal = '".$_POST['code_postal']."' WHERE inscrit.email = '".$_SESSION['utilisateur']['email']."' AND inscrit.mot_de_passe='".$_POST['motDePasseActuel']."'");
            $stmt->execute(); 
        }
    }
}
else{
    
}





?>