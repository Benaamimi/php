<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <?php
    $title = 'home';
    $logo = 'PARIS';
    include './template/header.php'
    ?>
    <main>
        <section>
            <h1>Bienvenue sur la page d'accueil</h1>
        </section>
    </main>
    <footer>
    <?php
    include './template/footer.php'
    ?>
    </footer>
</body>
</html>