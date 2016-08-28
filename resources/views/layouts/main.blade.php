<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Anton|Mogra|Sigmar+One|Raleway" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="/js/script.js" type="text/javascript"></script>
        <title>Coinsol MQ</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"> Coinsol</a>
                </div>
                <div class="collapse navbar-collapse" id="collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span><b> Inicio</b></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-book"></span><b> Historia</b></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-briefcase"></span><b> Portafolio</b></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span><b> ¿Quienes somos?</b></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-comment"></span><b> Contáctenos</b></a></li>
                    </ul>
                  </div>
            </div>
        </nav>
        <div class="container-fluid">
            @yield('content')
            <div class="row">
                <footer id="pie" class="text-center" >
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <br>
                            <span class="glyphicon glyphicon-envelope icono"></span>
                            <h2>Contáctenos</h2>
                             <br>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#contacto">Enviar Comentario</button>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <br>
                            <span class="fa fa-share-alt icono"></span>
                            <h2>Social</h2>
                            <div class="row">
                                <i class="fa fa-facebook-official fa-4x"></i>
                                <i class="fa fa-instagram fa-4x"></i>
                            </div>
                            <div class="row">
                                <i class="fa fa-whatsapp fa-4x"></i>
                                <i class="fa fa-twitter fa-4x"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <br>
                            <span class="glyphicon glyphicon-globe icono"></span>
                            <h2>Dirección</h2>
                            <address>
                                <strong>
                                    <p>COINSOL MQ</p>
                                </strong>
                                <p>km 2+200 Variante Aeropuerto José María Córdoba, Via Las Palmas</p>
                                <p>Envigado, Colombia</p>
                                <p><abbr title="Teléfono">Tel:</abbr> (123) 456-7890</p>
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div>
                            <h2>Derechos reservados &copy; <?php echo date('Y'); ?></h2>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
