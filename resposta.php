<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resposta</h1>

    <?php
        
        echo "GET";
        echo print_r($_GET);

        echo "<br>";
           
        echo "POST";
        echo print_r($_POST);

        echo "<br>";
           
        echo "REQUEST";
        echo print_r($_REQUEST);
    ?>

</body>
</html>