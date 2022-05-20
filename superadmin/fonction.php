<?php

function ajouter($name, $username, $password, $role){

    if(require("../config/test.php")){
        $requete= $maBaseDD2->prepare("INSERT INTO admins (`name`, username, `password`, `role`) VALUES (?, ?, ?, ?)") ;
        $requete->execute(array($name, $username, $password, $role));
        $requete->closeCursor() ;
    }
}

function afficher(){
    if(require("../config/test.php")){
        $requete= $maBaseDD2->prepare("SELECT * FROM admins") ;
        $requete->execute() ;
        $tableau= $requete->fetchAll(PDO::FETCH_OBJ) ; 
        return $tableau ;
        $requete->closeCursor() ;
    }
}

function modifier($name, $username, $password, $role, $id){
    if(require("../config/test.php"))
    {
        $requete = $maBaseDD2->prepare("UPDATE admins SET `name`=?, username=?, `password`=?, `role`=? WHERE id=?");
        $requete->execute(array($name, $username, $password, $role, $id));
        $requete->closeCursor();
    }
}


function supprimer($id){
    if(require("../config/test.php")){
        $requete= $maBaseDD2->prepare("DELETE FROM admins WHERE id=?") ;
        $requete->execute(array($id));
        $requete->closeCursor() ;
    }
}

?>