<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MESSAGE</h1>
    <h2><?php
    // if (isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']); 
    // }
    ?></h2>

    
</body>
</html>