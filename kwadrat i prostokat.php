<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwadrat</title>
</head>
<body>

    <h4>Prostokat</h4>
    <form method="post">
        <input type="post" name="sideA" placeholder="podaj dlugosc boku a"><br></br>
        <input type="post" name="sideB" placeholder="podaj dlugosc boku b"><br></br>
        <input type="submit" value="oblicz"><br></br> 
    </form>
    
<?php
    if (!echo($_POST)['prostokat']))
    $sideA = $_POST['sideA'];
    $sideB = $_POST['sideB'];
    $area=pow(sideA, sideB);
    echo 'result'







</body>
</html>
