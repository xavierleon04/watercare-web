
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Water Care</title>
    <link rel="stylesheet" href="{{ url('css/estilos.css') }}">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    
    <h1 class="title">¿Necesitas ayuda?</h1>
    
    <div class="container">
       
        <div class="card">
            <img src="{{asset('img/tr.jpeg')}}">
            <h4>Sistema y Seguridad</h4>
            <p>Realiza respaldos de tu información e historiales del sistema.</p>
            <a href="sistema">Leer más</a>
        </div>
        
        <div class="card">
            <img src="{{asset('img/c2.jpg')}}">
            <h4>Ajustes</h4>
            <p>Acceso de cuenta, Idioma, entre otros.</p>
            <a href="ajustes">Leer más</a>
        </div>
        
        <div class="card">
            <img src="{{asset('img/c3.jpg')}}">
            <h4>Manual del sistema</h4>
            <p>En este apartado se encuentra la documentación del sistema de llenado de tinaco implementado. </p>
            <a href="#">Leer más</a>
        </div>
        
    </div>
    
</body>
</html>



