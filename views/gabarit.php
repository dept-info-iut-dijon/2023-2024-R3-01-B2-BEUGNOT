<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="public/css/main.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $titre ?></title>
</head>

<body>
<header>
    <!-- Menu -->
    <nav>
    <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Pokédex</a></li>
        <li><a href="#">Équipe</a></li>
        <li><a href="#">Inventaire</a></li>
        <li><a href="#">Options</a></li>
    </ul>
</nav>

</header>
<!-- #contenu -->
<main id="contenu">
<?= $contenu ?>
</main>
<footer>

</footer>
</body>

</html>