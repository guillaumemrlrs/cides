<?php

try {
    $dns = 'mysql:host=localhost:3306;dbname=cides';
    $utilisateur = 'guillaume';
    $motDePasse = 'vUp0n^40';
    $connection = new PDO( $dns, $utilisateur, $motDePasse );
    $connection->query("SET NAMES utf8");
} catch ( Exception $e ) {
    echo "Connection à MySQL impossible : ", $e->getMessage();
    die();
}
?>
