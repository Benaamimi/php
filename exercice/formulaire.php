<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

  <h1 class="text-center mb-3">Les formulaires</h1>
   <?php
    if (isset($_SESSION['message'])){
        ?>
        <!-- <?= $test;?> -->
       <p class="alert alert-warning alert-dismissible fade show"><?php echo $_SESSION['message'];
                unset($_SESSION['message']); ?></p>
     <?php
    }
     ?>
    </p>
    <div>
        <form action="./traitement.php" method="POST" >

            <div>
                <label for="name">Nom</label>
                <input type="text" name="name" >
            </div>
            <div>
                <label for="pswd">Mot de passe</label>
                <input type="password" name="pswd" >
            </div>
            <div>
                <label for="color">Couleur</label>
                <input type="color" name="color" >
            </div>
            <div>
                <label for="date">Date</label>
                <input type="date" name="date" >
            </div>
            <div>
                <label for="color">Email</label>
                <input type="email" name="email" >
            </div>
            <div>
                <label for="week">jour de la semaine</label>
                <select name="week">
                    <option value="lundi">lundi</option>
                    <option value="mardi">mardi</option>
                    <option value="mercredi">mercredi</option>
                    <option value="jeudi">jeudi</option>
                    <option value="vendredi">vendredi</option>
                    <option value="samedi">samedi</option>
                    <option value="dimanche">dimanche</option>
                </select>
            </div>
            <div>
                <span>Quels plats aimez-vous?</span>
                <label for="burger">burger</label>
                <input type="checkbox" name="burger" value="burger" />
                <label for="pizza">pizza</label>
                <input type="checkbox" name="pizza" value="pizza" />
            </div>
            <div>
                <span>Etes-vous d'accord?</span>
                <label for="yes">oui</label>
                <input type="radio" value="oui" id="yes" name="agree" />
                <label for="no">non</label>
                <input type="radio" value="non" id="no" name="agree" />
            </div>
            <div>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
                <label for="description">Message (facultatif)</label>
            </div>
            <input type="submit" name="submit" value="Envoyer" />
        </form>     
        </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>