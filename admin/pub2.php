<?php

session_start();
// On inclus le contenu du fichier manipulation.php
include '../config/manipulation2.php';

if (!isset($_SESSION['ID'])) {
    header("Location: ../login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Publication Actualités récentes</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
<div class="row">
<div class="col col-md-6">
<br>
<br>
<h1>Publication Actualités récentes</h1>
<a href="../dashboard.php">Dashboard </a>
<br>
<a href="../logout.php">Se deconnecter</a>
<br>
<br>
<br>
<form method="post">
    <div class="mb-3">
    <label for="photo" class="form-label">Image</label>
    <input type="text" name="photo" class="form-control" >
    </div>

    <div class="mb-3">
    <label for="categorie" class="form-label">Catégorie</label>
    <input type="text" name="categorie" class="form-control" >
    </div>

    <div class="mb-3">
    <label for="titre" class="form-label">Titre</label>
    <input type="text" name="titre" class="form-control" >
    </div>

    <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea type="text" name="description" class="form-control" ></textarea>
    </div>

    <div class="mb-3">
    <label for="auteur" class="form-label">Auteur</label>
    <input type="text" name="auteur" class="form-control" >
    </div>

    <button type="submit" name="publier" class="btn btn-primary">Publier</button>
</form>

</div>
</div>
</div>
   
</body>
</html>

<?php

// On recupère les informations du formulaire une fois soumisent

if(isset($_POST['publier']))
{
    if (!empty($_POST['photo']) AND !empty($_POST['categorie']) AND !empty($_POST['titre']) AND !empty($_POST['description']) AND !empty($_POST['auteur'])){

        $photo = htmlspecialchars($_POST['photo']);
        $categorie = htmlspecialchars($_POST['categorie']);
        $titre = htmlspecialchars($_POST['titre']);
        $description = htmlspecialchars($_POST['description']);
        $auteur = htmlspecialchars($_POST['auteur']);

        publierProduit($photo, $categorie, $titre, $description, $auteur);
    }

}

?>