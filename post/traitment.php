<?php

if(isset($_POST['name']) && isset($_POST['pswd']) ){

    if(!empty ($_POST['name']) && !empty($_POST['pswd'])){
        // strip_tag retourene le contenu en supprimant tout element HTML 
        $name = strip_tags($_post['name']);

        // cette fonction retourne le contenu avec les caractères speciaux neutraliser
        $name =htmlspecialchars($_POST['name']);
        var_dump($name);

    }
    
} else {

    echo 'Veuillez remplir votre nom';
} 

else {

    echo 'Erreur dans le formulaire';
}




    

echo "hello!...";

echo '<pre>';
var_dump($_POST);
echo '</pre>';