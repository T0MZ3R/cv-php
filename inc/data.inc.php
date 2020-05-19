<?php 
    session_start();
    $pdo = new PDO("mysql:host=localhost;dbname=cv", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

    $resultuser = $pdo->query("SELECT * FROM utilisateur");
    $user = $resultuser->fetch(PDO::FETCH_ASSOC);
    
    $resultResume = $pdo->query("SELECT * FROM `resume`");
    $resultParagraphe = $pdo->query("SELECT * FROM paragraphe");

    $paragrapheArray = array();
    while($paragraphe = $resultParagraphe->fetch(PDO::FETCH_ASSOC)){
       array_push($paragrapheArray, $paragraphe["paragraphe"]);
    }

?>