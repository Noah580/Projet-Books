<?php
// Fonction permetant la connexion a la base de données
function ConnectDB(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'root', 'root');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (Exception $e) {
        echo 'erreur de connexion à la db';
    }
}
?>