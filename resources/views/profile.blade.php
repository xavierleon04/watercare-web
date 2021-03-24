

<!DOCTYPE html>
<html lang= "{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Perfil de usuario</title>


        <!-- Font Awesome -->
            <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            rel="stylesheet"
            />
            <!-- Google Fonts -->
            <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
            />
            <!-- MDB -->
            <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
            rel="stylesheet"
            />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        </head>
    <body class="bg-light">
        <div class="container">
            <div class="row">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10 mt-5 pt-5">
                        <div class="row z-depth-3">
                            <div class="col-sm-4 bg-info rounded-left">
                                <div class="card-block text-center text-white">
                                    <i class="fas fa-user-tie fa-7x mt-5"></i>
                                    <h2 class="font-weight-bold mt-4">{{ $user->name }}</h2>
                                    <p>Usuario</p>
                                    <i class="far fa-edit fa-2x mb-4"></i>
                                </div>
                            </div>
                            <div class="col-sm-8 bg-white rounded-right">
                                <h3 class="mt-3 text-center">Información</h3>
                                <hr class="badge-primary mt-0 w-25">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="font-weight-bold">Correo electrónico:</p>
                                        <h6 class="text-muted">{{ $user->email}}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
        
                </div> 
            </div>
        </div> 
         
    </body>
</html>
