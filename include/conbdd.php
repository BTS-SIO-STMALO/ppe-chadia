<?php
//ce fichier inclut la connexion de la base de donnée//



    $pdo = new PDO('mysql:host=localhost;dbname=pousybook;charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

?>