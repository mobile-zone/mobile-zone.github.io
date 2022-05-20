<?php

// Les fonctions qui vont intérargir avec la base de données

// fonction Ajouté
function publierProduit($photo, $categorie, $titre, $description, $auteur){
   if(require("connex2.php"))
   {
     $maRequete = $maBaseDD->prepare('INSERT INTO produits (`photo`, `categorie`, `titre`, `description`, `pubdate`, `auteur`) VALUES (?, ?, ?, ?, NOW(), ?)');

     $maRequete->execute(array($photo, $categorie, $titre, $description, $auteur));

     $maRequete->closeCursor();
   }
}

// fonction Afficher

function afficherProduit()
{
    if(require("connex2.php"))
    {
      $maRequete = $maBaseDD->prepare("SELECT * FROM produits ORDER BY id DESC");
 
      $maRequete->execute();

      $data = $maRequete->fetchAll(PDO::FETCH_OBJ);

      return $data;
 
      $maRequete->closeCursor();
    }
}



?>