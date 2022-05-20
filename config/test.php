<?php

try {
    $maBaseDD2 = new PDO("mysql:host=localhost;dbname=bddlogin;charset=utf8","root","");
    $maBaseDD2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (Exception $e)
{
    $e->getMessage();
}

?>