@extends('layouts.app')

@section('content')
<html>
  <head>
  <title>Water Care</title>
  </head>
  <body>
  <h3 style="text-align:center; margin:20px">Configuración general de la cuenta</h3>

  
    
    
    <h4 style="text-align:left; margin:20px; padding:10px">
        Las copias de seguridad, si se hacen con regularidad, te permiten mantener a salvo tus fotos, documentos y programas instalados.<br />

        Así, un eventual fallo del disco duro o el ataque de un virus arrollador no te pillará desprevenido y te será muy fácil recuperar <br /> todos tus archivos y los valores de configuración previos al desastre informático.<br />

        ¿Qué es una copia de seguridad? ¿Qué tipos de copia de seguridad existen?<br />
        Una copia de seguridad -también conocida como copia de respaldo, copia de reserva o backup, en inglés- <br />
        Es el proceso de guardar los datos originales de un dispositivo para poder recuperarlos de nuevo en caso de pérdida.<br />

        <br />Existen dos tipos principales de copias de seguridad:<br />

        <ul>
            <li>Copia de seguridad de los archivos.</li>
            <li>Copia de seguridad del sistema.</li>
        </ul>
        <br />

        <h3 style = "margin:20px">Copia de seguridad</h3>
        <h4 style="text-align:left; margin:20px; padding:10px">Realiza una copia de tus historiales en tu pc, preferentemente en el disco duro.<br />
        Una vez seleccionado el lugar donde se guardaran los datos, simplemente de <a href="#">Click aquí</a> y sus datos seran descargados listos para moverse al lugar de almacenamiento que usted desee.
     </h4>
     <img src="{{asset('img/data.jpg')}}" style = "width:450px; align:right;margin:20px; padding:10px">
</body>
</html>
@endsection