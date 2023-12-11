<?php
$text = $_GET["text"];
$word = $_GET['word'];
$censored_text = str_replace($word, "***", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="uncensored">
            <h2 class="margin-b">Paragrafo</h2>
            <p class="bold margin-b">Lunghezza <?php echo strlen($text); ?> caratteri</p>
            <p class="margin-b"><?php echo $text; ?></p>
        </div>
        <div class="censored">
            <h2 class="margin-b">Paragrafo con censura</h2>
            <p class="bold margin-b">Parola censurata: <?php echo $word; ?></p>
            <p class="bold margin-b">Lunghezza <?php echo strlen($censored_text); ?> caratteri</p>
            <p><?php echo $censored_text ?></p>
        </div>
    </div>
</body>
</html>