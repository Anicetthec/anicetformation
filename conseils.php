<?php
// Conseils en informatique
$advice = [
    "Sauvegardez régulièrement vos données.",
    "Utilisez des mots de passe complexes et uniques.",
    "Mettez à jour vos logiciels pour éviter les failles de sécurité.",
    "Ne cliquez pas sur des liens suspects dans vos emails.",
    "Protégez votre vie privée en ligne."
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Conseils Informatique</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conseils en Informatique</h1>
        <nav>
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="conseils.php">Conseils Informatique</a></li>
                <li><a href="proverbes.php">Proverbes & Motivation</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <ul>
            <?php foreach($advice as $item) { echo "<li>$item</li>"; } ?>
        </ul>
    </main>
    <footer>
        <p>&copy; 2025 - Présentation IA & Cybersécurité</p>
    </footer>
</body>
</html>
