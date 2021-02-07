<doctype html>
<html>
    <head>
        <title>
            Sesiones y Cookies en Laravel
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <h2>
            Sesiones y Cookies en Laravel 
        </h2>
        <?= Form::open() ?>
        <?= Form::label('correo', 'Dirección de correo: ') ?>
        <?= Form::text('correo') ?>
        <br>
        <?= Form::label('nombre', 'Nombre: ') ?>
        <?= Form::text('nombre') ?>
        <br>
        <?= Form::label('ciudad', 'Ciudad: ') ?>
        <?= Form::text('ciudad') ?>
        <br>
        <?= Form::submit('Enviar') ?>
        <?= Form::close() ?>
    </body>
</html>

