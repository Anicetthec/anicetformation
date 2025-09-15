<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - IA & Cybersécurité</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Contactez-moi</h1>
        <nav>
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="conseils.php">Conseils Informatique</a></li>
                <li><a href="proverbes.php">Proverbes & Motivation</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="#" method="post" class="contact-form">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            <button type="submit">Envoyer</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2025 - Présentation IA & Cybersécurité</p>
    </footer>
</body>
</html>
