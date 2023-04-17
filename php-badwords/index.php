<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Php BadWords-form</title>
</head>

<body>
    <form method="GET" action="words.php">
        <label for="phrase">phrase to display</label>
        <input type="text" name="phrase" id="phrase" placeholder="Inserisci la frase" />
        <div class="adjust">
            <label for="phrase">word to censor</label>
            <input type="text" name="wordToCensor" id="phrase" placeholder="Inserisci la frase" />
        </div>
        <button type="submit">Send</button>
    </form>
</body>

</html>