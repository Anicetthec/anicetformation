<?php
// Proverbes et motivation
$proverbs = [
    "La connaissance est le pouvoir.",
    "Ne jamais abandonner, même face à l’échec.",
    "L’apprentissage est un voyage sans fin.",
    "La sécurité commence par la vigilance.",
    "Chaque problème a une solution."
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Proverbes & Motivation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Proverbes & Motivation</h1>
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
            <?php foreach($proverbs as $item) { echo "<li>$item</li>"; } ?>
        </ul>
    </main>
    <footer>
        <p>&copy; 2025 - Présentation IA & Cybersécurité</p>
    </footer>
</body>
</html>
