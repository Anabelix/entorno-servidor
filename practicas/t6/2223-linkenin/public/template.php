<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <style>
        body {
            background-color: #EAEAEA;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .contenedor {
            width: 50%;
            background-color: white;
            text-align: center;
            margin: 0 auto;
        }
    </style>
    <script defer>
        console.log('Hola mi gente!!!');
    </script>
</head>
<body>
    <div class="contenedor">
        <h1><?=$pageHeader?></h1>
        <?=$content?>
    </div>
</body>
</html>