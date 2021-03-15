<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/inscription.css">
</head>
<body>
    <h1>inscription</h1>
<form method="post" action="traitement.php">
    <label>Votre nom</label>  <input type="text" name="nom" />
    <label>Votre prenom</label>  <input type="text" name="prenom" />
    <label>Votre date de naissance</label>  <input type="date" name="date" />
    <label>Votre email</label>  <input type="email" name="email" />
    <label for="pass">Votre mot de passe </label> <input type="password" name="pass" id="pass" />
    <label>Votre numéro de téléphone</label>  <input type="tel" name="tel" />
    <label>Nom de rue</label>  <input type="text" name="nomrue" />
    <label>Ville</label>  <input type="text" name="ville" />
    <label>Code Postale</label>  <input type="tel" name="codepostale" />
    <input type="submit" value="Envoyer" id="send"/>
</form>


</body>
</html>
