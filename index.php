<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words</title>
</head>
<body>
    <form action="result.php" method="GET">

        <label for="text">Inserisci del testo</label>
        <textarea name="text" id="text" cols="30" rows="10"></textarea>

        <label for="word">Parola da censurare</label>
        <input type="text" id="word" name="word">  

        <button type="submit">Invia</button>

    </form>
</body>
</html>