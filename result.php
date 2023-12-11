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
</head>
<body>
    <h2>Paragrafo</h2>
    <p>Lunghezza <?php echo strlen($text); ?> caratteri</p>
    <p><?php echo $text; ?></p>
    
    <p>Parola censurata: <?php echo $word; ?></p>
    <p>Lunghezza <?php echo strlen($censored_text); ?> caratteri</p>
    <p><?php echo $censored_text ?></p>
</body>
</html>