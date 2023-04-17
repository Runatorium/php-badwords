<?php
$phrase = $_GET['phrase'];
$word = $_GET['wordToCensor'];


$frase = explode(' ', $phrase, );
$length = sizeof($frase);


for ($i = 0; $i <= $length - 1; $i++) {

    if ($frase[$i] == $word) {
        $frase[$i] = "***";
    }

    echo $frase[$i] . ' ';
}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php $frase; ?>
    </h1>
</body>

</html>