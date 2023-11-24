<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
    <style>
        form{text-align: center;}
    </style>
</head>
<body>
    <form action="./db.php" method="post">
        <p>
            <label for="nom">*Nom :</label>
            <br>
            <input type="text" name="nom" id="nom" placeholder="votre nom" required>
        </p>
        <p>
            <label for="prenom">*Prénom :</label>
            <br>
            <input type="text" name="prenom" id="prenom" placeholder="votre prénom" required>
        </p>
        <p>
            <label for="email">*Email :</label>
            <br>
            <input type="email" name="email" id="email" placeholder="votre email" required>
        </p>
        <p>
            <label for="sujet">Sujet :</label>
            <br>
            <input type="text" name="sujet" id="sujet" placeholder="votre sujet">
        </p>
        <p>
            <label for="message">Message :</label>
            <br>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </p>
        <button type="submit">ENVOYER</button>
    </form>
</body>
</html>