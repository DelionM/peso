<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peso</title>
</head>
<body>
    <h1>Peso corporal</h1>
    <?php
    function nombre($nombre){
        print ("Tu nombre es: $nombre <br>");
    }

    function calcula($peso, $altura){
        return $peso / ($altura**2);
    }

    nombre("Giovanni");
    $peso = 64;
    $altura = 1.62;
    print('Y tu IMC es: de '.calcula($peso, $altura));
    print('<br>');
    ?>

</body>
</html>