<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Filtro parole</h1>
        <form action="result.php" method="GET">
    
            <p><label for="text">Inserisci del testo</label></p>
            <textarea name="text" id="text" cols="50" rows="5"></textarea>  
    
            <label for="word">Parola da censurare</label>
            <input type="text" id="word" name="word">  
    
            <button type="submit">Invia</button>
    
        </form>
    </div>
</body>
</html>