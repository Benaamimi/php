<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction à PHP</title>
</head>
<body>
    <h1>Découverte de PHP</h1>
    <?php
    // pour ouvrir un bloc PHP, on utilise la balise ou je suis!
    ?>
    <p>je suis un HTML</p>
    <?php
    // --------------------------------
    echo '<h2>Les commentaires:</h2>';
    // --------------------------------
    // commentaire
    
    # commentaire
    
    /* 
    commentaire long
    */
    // --------------------------------
    echo '<h2>Affichage:</h2>';
    // --------------------------------
    echo 'Hello, World!';

    // echo permet d'afficher du texte dans le naviguateur
    // --------------------------------
    echo '<h2>Les variables:</h2>';
    // --------------------------------
    
    // Déclaration d'une variable avec `$`
    $unNom;
    
    // Affectation de la variable nommée unNom
    $unNom = 127 ;
    echo $unNom;
    echo '<br>';
    echo gettype($unNom);
    
    echo '<br>';
    // creer des variables type text :
    $unTxt = 'Hello';
    echo gettype($unTxt);
    echo '<br>';
    $unNombre = 23.8;
    echo gettype($unNombre);
    echo '<br>';
    $unBooleen = false;
    echo gettype($unBooleen);
    
    // --------------------------------
    echo '<h2>Concaténation:</h2>';
    // --------------------------------
    $a = 'Bonjour';
    $b = 'tout le monde!';
    echo $a . ' ' .$b . '<br>' .'Je suis en cours de PHP';
    echo '<br>';
    echo "$a $b, je suis un message en PHP";
    echo '<br>';
    echo '$a $b, je suis un message en PHP';
    
    // --------------------------------------------------
    echo '<h2>Constantes et constantes magiques:</h2>';
    // --------------------------------------------------
    // une constante permet de 
    // Utiles pour conserver les paramètre de la base de donnée
    // la constante se déclare en MAJ
    define("CAPITAL", "Paris");
    echo CAPITAL;
    echo '<br>';
    echo __FILE__ .'<br>'; //Affiche le chemin complet vers le fichier
    echo __LINE__ . '<br>'; //Affiche le numéro de la ligne courante
    echo __DIR__; //Affiche le chemin vers le dossier ou se trouve le fichier
    
    echo '<h2>Exo:</h2>';
    echo "bleu - blanc - rouge";
    $blue = 'bleu';
    $white = 'blanc';
    $red = 'rouge';
    echo '<br>';
    echo "$blue - $white - $red" . '<br>' ;
    echo $blue . ' - ' .$white . ' - ' .$red . '<br>';
    echo '$blue - $white - $red';
    
    // -------------------------------------------
    echo '<h2>Les operateur arithmétiques:</h2>';
    // -------------------------------------------
    $a = 10;
    $b = 2;
    echo $a + $b . '<br>';
    echo $a - $b . '<br>';
    echo $a * $b . '<br>';
    echo $a / $b . '<br>';
    echo $a % $b . '<br>';
    $a++;
    echo $a . '<br>';
    $a = $a + 1;
    echo $a . '<br>';
    $a += 2;
    echo $a . '<br>';
    $a *= 2;
    echo $a . '<br>';
    $a %= 2;
    echo $a . '<br>';
    
    // -------------------------------------------------------------------
    echo '<h2>Les structures conditionnelles (if / elseif / else) :</h2>';
    // -------------------------------------------------------------------
    $a = 23;
    $b = 5;
    $c = 2;
    
    if ($a < $b){
        echo "$a est superieur à $b";
    }elseif ($a == $b){
        echo "$a est égal à $b";
    }else {
        echo "si aucune condition n'est rempli le 'esle' sera executé <br>";
    }
    
    // L'opérateur AND `&&` permet de verifier que 2 condition soient realiser en même temps
    if ($a > $b && $b > $c){
        echo "OK pour les 2 condotions <br>";
    }
    
    // L'opérateur OR `||` permet de verifier qu'au moins l'une des 2  condition soit realisée
    if ($a === 9 || ($b > $c && $a > $b)){
        echo "OK pour au moins une condotions <br>"; 
    }
    
    $couleur = 'jaune';
    
    switch($couleur){
        case 'bleu':
            echo 'Vous aimez le bleu';
            break;
            case 'rouge':
                echo 'Vous aimez le rouge';
                break;
                case 'vert';
                echo 'Vous aimez le vert';
                break;
                default : echo 'vous n \'aimez ni le bleu, ni le rouge, ni le vert <br>';              
            }
            
            $couleur = 'rouge';
            
            switch($couleur){
                case 'bleu':
                    echo 'Vous aimez le bleu';
                    break;
                    case 'rouge':
                        echo 'Vous aimez le rouge';
                        break;
                        case 'vert';
                        echo 'Vous aimez le vert';
                        break;
                        default : echo 'vous n \'aimez ni le bleu, ni le rouge, ni le vert';              
                    }
                    
                    echo '<br>';
                    
                    
                    $couleur = 'bleu';
                    
                    switch($couleur){
                        case 'bleu':
                            echo 'Vous aimez le bleu';
                            break;
                            case 'rouge':
                                echo 'Vous aimez le rouge';
                                break;
                                case 'vert';
                                echo 'Vous aimez le vert';
                                break;
                                default : echo 'vous n \'aimez ni le bleu, ni le rouge, ni le vert';              
                            }
                            
                            $couleur = 'violet'; 
                            
                            if ($couleur == 'bleu'){
                                echo "Vous aimez le bleu";
    }elseif($couleur == 'rouge'){
        echo "Vous aimez le rouge";
    }elseif($couleur == 'vert'){
        echo "Vous aimez le vert";
    }else{
        echo 'vous n \'aimez ni le bleu, ni le rouge, ni le vert';
    }
    
    echo '<br>';
    $animal = 'chat';
    
    switch($animal){
        case 'chien':
            echo 'ouff!!!';
            break;
            case 'chat':
                echo 'MIAO!!!';
                break;
                case 'canard':
                    echo 'coin coin!!!';
                    break;
                    default : 
                    echo "je ne sais pas!";              
                }
                     
    // ------------------------
    echo '<h2>Tableaux:</h2>';
    // ------------------------
    
    $liste = [ 'france', 'italie', 'espagne', 'portugual'];
    echo $liste[3];
    print $liste[2]. '<br>';
    
    //Le var_dump permet de debeuguer 
    echo '<pre>';
    var_dump($liste);
    echo '</pre>';
    
    echo '<br>';
    
    echo '<pre>';
    print_r($liste);
    echo '</pre>';
    
    $liste2 = array('france', 'italie', 'espagne', 'portugual');
    echo $liste2[0];
    
    $liste2[] = 'Allemagne';
    echo '<pre>';
    var_dump($liste2);
    echo '</pre>';
    
    // -----------------------------------
    echo '<h3>Tableaux associatifs:</h3>';
    // -----------------------------------
    $user = [
        'prenom' => 'Tarik', 
        'nom' => 'BENAAMIMI', 
        'age' => 40, 
        'Phone' => '07 52 76 81 80'
    ];
    
    echo 'bonjour je m\'apelle' .$user['prenom']; 
    
    // ------------------------------------------------------
    echo '<h3>les structures itéractives : les boucles</h3>';
    // ------------------------------------------------------
    // Boucle while : 
    $i = 0; 
    while ($i<=5){
        echo $i. '<br>';
        $i++;
    }

    // echo '<select>'
    // $i = 1920;
    // while($i <= 2020){
    //     echo "<option>$i<option>";
    //     $i++;
    // }
    // echo'</select>'
    ?>

    <select name="" id="">
        <?php
        $i = 1920;
        while ($i <= 2020){
        ?>
            <option value="<?php echo $i; ?>"><?= $i; ?><option>
        <?php
            $i++;
        }
        ?>
    </select>

    <p>boucle for: (methode pratique) </p>

    <select name="" id="">
    <?php
        for($i = 1920; $i <= 2020; $i++){
    ?>
        <option value="<?= $i; ?>"><?= $i; ?><option>
    <?php
        }
    ?>
    </select>

    <p>autre methode:</p>

    <select name="" id="">
    <?php
        for($i = 1920; $i <= 2020; $i++){
    
       echo  "<option value=\"$i\">$i<option>";
    }
    ?>
    </select>

    

    <?php
    // ------------------------------------------------------
    echo '<h3>Boucles foreach</h3>';
    // ------------------------------------------------------
    $animaux = [ 'chat', 'tigre', 'poisson', 'ours', 'lion'];
    for($i= 0 ; $i <= count($animaux) ; $i++){
        echo $animaux[$i]. "<br>";
    }

    foreach($animaux as $animal){
        echo $animal . "<br>";
    }

    echo "<h3>creation tableau associatif: </h3>";
    $voitures = [
        'couleur' => 'jaune', 
        'modele' => 'mercedes', 
        'annee' => 2018
    ];

    foreach($voitures as $voiture){
        echo $voiture . "<br>";
    }

    foreach($voitures as $key => $voiture){
        echo "$key : $voiture ". "<br>";
    }

    echo "<h3>extraire(substr)</h3>";
    // echo substr("bonjour, je m'apelle Tarik, je suis en formation",0, 10);
    $description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae cupiditate eos animi laudantium, veritatis dolores similique commodi quis perspiciatis quia! Ipsa, est. Libero, optio autem incidunt omnis perspiciatis expedita? Totam rem, harum iure nisi eos officiis repellendus esse repellat, nulla aut fugiat, enim sed? Vero quod nulla incidunt accusantium dolor.";

    echo substr($description, 0, 100) ,("..."), "<br>";

    $newdesc = substr($description, 0, 100);
    echo $newdesc .'...' .'<br>';

    echo "<h3>trim()</h3>";
    // trim
    // Supprime les espace au debut et la fin de la chaine de caractère
    $message = '\'<------>benaamimit@gmail.com <------>\' ';
    echo trim($message);


    echo "<h3>separation:</h3>";
    
    function sep(){
        echo '<br>';
    }
    
    echo 'hello!';
    sep();
    echo 'bonjour!';
    
    
    echo "<h3>fonction avec parametre et return:</h3>";
    
    function bonjour($name){
        return "bonjour je m'apelle $name";
    }
    $name = 'Tarik';
    $result = bonjour($name);
    sep();
    echo $result;
    
    // -------------------practice------------------//
    
    function factureEssence($litre, $price){
        
        $prixTotal = $litre * $price;
        return "votre facture est de $prixTotal euro pour $litre litre d'essence";
    }
    
    sep();
    $result = factureEssence(40, 1.6);
    echo $result;
    
    //------------------------------------ 
    echo "<h2>Les super globales:</h2>";
    //------------------------------------ 
    
    var_dump($_SERVER);
    
    function debbug($var){
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
    
    debbug($_SERVER);
     
    echo "<h3>Affichage</h3>";
    echo "adresse IP du server : ".$_SERVER["SERVER_NAME"];
    sep();
    echo "nom du fichier executé : ".$_SERVER["SCRIPT_NAME"];
    sep();
    echo "chemin du fichier executé : ".$_SERVER["SCRIPT_FILENAME"];
    
    var_dump($_GET); //$_GET contient les information envoyée en url
    
    
    //-----------------------------------------
    echo "<h2>Les inclusions de fichier:</h2>";
    //-----------------------------------------
    include './include.inc.php';
    require './include.inc.php';
    include_once './include.inc.php';
    require_once './include.inc.php';
    echo $doranco;

    
    

    
 



    








    ?>




</body>
</html>