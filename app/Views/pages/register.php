<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/index.css">
    <title><?=$title?></title>
</head>
<body>
    <section class="px-3 text-white slota shadow-sm">
        <div class="col px-4 pt-5">
            <div class="row">
                <div class="col-sm-12 col-lg-6 text-start">
                    <img  class="img-fluid mb-5" src="<?=base_url()?>/assets/img/icons/logo.gif" alt="">
                </div>
                
                <div class="col-sm-12 col-lg-6 desclang d-none d-md-block">
                    <button type="submit" class="btn btn-block btnreg shadow-sm p-2">INICIAR SESION</button>

                </div>
            </div>
        </div>
    </section>
    
    <div class="container-fluid">
        <div class="col px-sm-3 px-md-4 py-4 slotb mb-4">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="col-12 loginbox">
                        <div class="card  shadow-sm">
                            <div class="card-body">
                                <h4>¡Regístrate en Habbo!</h4>
                                <form action="/action_page.php" class="d-grid">
                                    <div class="mb-3 mt-3">
                                        <label for="username" class="form-label">Nombre de usuario:</label>
                                        <input type="text" class="form-control" id="username" placeholder="Usuario..." name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo electronico:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Usuario..." name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pwd" class="form-label">Tu contraseña:</label>
                                        <input type="password" class="form-control" id="pwd" placeholder="Contraseña..." name="pswd">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pwd" class="form-label">Repite tu contraseña:</label>
                                        <input type="password" class="form-control" id="pwd" placeholder="Contraseña..." name="pswd">
                                    </div>
                                    
                                    <div class=mb-3">
                                        <div class="alert alertterm">
                                        Al registrarte en <strong>Habbo</strong> estás aceptando nuestros <a href="#" class="alert-link">Términos y Condiciones</a>   así como nuestra <a href="#" class="alert-link">Política de Privacidad y Cookies</a>, además de recibir boletines informativos vía E-Mail.
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-block btnreg shadow-sm p-2">CREAR MI CUENTA</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-12 col-md-12">
                    <div class="col-lg-12 col-sm-12 mb-3">
                        <h3>¿Por qué Habbo?</h3>
                        <p>Contamos con una de las mayores comunidades de Habbo y siempre estamos innovando para mejorar tu experiencia de juego.</p>
                        <img src="<?=base_url()?>/assets/img/icons/ducks.png" alt="" class="img-fluid rock float-end">
                    </div>
                </div>
                
            </div>            
        </div>
    </div>
    <script src="<?=base_url()?>/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>