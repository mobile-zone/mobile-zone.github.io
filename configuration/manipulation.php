<?php

// Les fonctions qui vont intérargir avec la base de données

// fonction Ajouté
function publierArticle($photo, $categorie, $titre, $auteur){
   if(require("connex.php"))
   {
     $maRequete = $maBaseDD->prepare("INSERT INTO articles (photo, categorie, titre, pubdate, auteur) VALUES (?, ?, ?, NOW(), ?)");

     $maRequete->execute(array($photo, $categorie, $titre, $auteur));

     $maRequete->closeCursor();
   }
}

// fonction Afficher

function afficherArticle()
{
    if(require("connex.php"))
    {
      $maRequete = $maBaseDD->prepare("SELECT * FROM articles ORDER BY id DESC");
 
      $maRequete->execute();

      $data = $maRequete->fetchAll(PDO::FETCH_OBJ);

      return $data;
 
      $maRequete->closeCursor();
    }
}



?>