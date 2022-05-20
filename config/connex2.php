<?php

// Etablir une connexion vers la base de données appelée : bddproduits

try {
    $maBaseDD = new PDO("mysql:host=localhost;dbname=bddproduits;charset=utf8","root","");
    $maBaseDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (Exception $e)
{
    $e->getMessage();
}

?>