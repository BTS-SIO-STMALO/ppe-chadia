<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/homeconnecte.css">
    <title>Home connecté</title>

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
</head>
<body>
    <?php include '../templates/header.php'; ?>
    <?php include '../templates/footer.php'; ?>
    <div class="container">

        <div class="card mt-4">
            <div class="card-header text-center">
            <h1>Pousy Biblio</h1>
            </div>
            <div class="card-body">
                <form method="post" action="modificationInfosPerso.php">
                    <div class="input-group m-2">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Prenom</span>
                        </div>
                        <input type="text" class="form-control" name="prenom" placeholder=" <?php echo $_SESSION['utilisateur']['prenom'] ?>">
                    </div>

                    <div class="input-group m-2">
                        <div class="input-group-prepend">
                        <span class="input-group-text">nom</span>
                        </div>
                        <input type="text" class="form-control" name="nom" placeholder=" <?php echo $_SESSION['utilisateur']['nom'] ?>">
                    </div>
                    <div class="input-group m-2">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Date de naissance</span>
                        </div>
                        <input type="date" class="form-control" name="date_naissance" placeholder=" <?php echo $_SESSION['utilisateur']['date_naissance'] ?>">
                    </div>
                    <div class="input-group m-2">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Téléphone</span>
                        </div>
                        <input type="text" class="form-control" name="tel" placeholder=" <?php echo $_SESSION['utilisateur']['tel'] ?>">
                    </div>
                    <div class="input-group m-2">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Email</span>
                        </div>
                        <input type="text" class="form-control" name="email" placeholder=" <?php echo $_SESSION['utilisateur']['email'] ?>">
                    </div>
                    <div class="input-group m-2">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Ville</span>
                        </div>
                        <input type="text" class="form-control" name="ville" placeholder=" <?php echo $_SESSION['utilisateur']['ville'] ?>">
                    </div>
                    <div class="input-group m-2">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Adresse</span>
                        </div>
                        <input type="text" class="form-control" name="nom_rue" placeholder=" <?php echo $_SESSION['utilisateur']['nom_rue'] ?>">
                    </div>
                    <div class="input-group m-2">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Code Postale</span>
                        </div>
                        <input type="text" class="form-control" name="code_postal" placeholder=" <?php echo $_SESSION['utilisateur']['code_postal'] ?>">
                    </div>

                    <div class="input-group m-2">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Mot de passe actuel</span>
                        </div>
                        <input type="password" name="motDePasseActuel" class="form-control" required>
                    </div>

                    <button class="button2" type="submit">Modifier Mes informations</button>
                </form>
            </div>
        </div>
    </div>