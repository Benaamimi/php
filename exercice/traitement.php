<?php

session_start();

if(isset ($_POST['name']) && isset($_POST['pswd']) && isset($_POST['email'])){

    if(!empty($_POST['name'])&&!empty($_POST['pswd'])&&!empty($_POST['email']) ){
        
        // foreach($_POST as $key => $value){
        //     $_POST[$key] = strip_tags($value);
        // }
        
        $_SESSION['message']='le formulaire a bien ete envoyé';
        header ('location: ./formulaire.php');
        exit();
    }
    else{
        $_SESSION['message']='le formulaire est vide';
        header ('location: ./formulaire.php');
        exit();
    }
}


