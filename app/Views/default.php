<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/adab.css">
    <script src="https://kit.fontawesome.com/3b1347dda6.js" crossorigin="anonymous"></script>

    <title><?= $this->renderSection('title') ?></title>
</head>
<body>
<section class="px-4 text-white slota shadow-sm mb-0">
        <div class="d-flex">
            <div class="d-none d-md-block hotelcont flex-fill">
                <img src="<?=base_url()?>/assets/img/icons/hotel.png" alt="" class="hotel">
            </div>
            <div class="desclang text-center py-3">
                <img  class="img-fluid" src="<?=base_url()?>/assets/img/icons/logo.gif" alt="">
                <h5 class="mb-3">50 Online</h5>
                <div class="registerbox">
                    <a type="button" href="<?=base_url()?>/register" class="btn btn-lg btnreg shadow-sm">!JUGAR AHORA¡</a>
                    <a type="button" data-bs-toggle="modal" data-bs-target="#login" href="<?=base_url()?>/register" class="btn btn-lg btnlogin shadow-sm">!DESCARGAR APP¡</a>
                </div>

            </div>
        </div>
</section>
<section class="px-4 bg-light shadow-sm py-2 mb-4 menu">
    <nav class="navbar navbar-expand-sm navbar-light h-25">
        <div class="container-fluid ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                   
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('dashboard')?>"><i class="fa-solid fa-house-chimney"></i> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><i class="fa-solid fa-earth-americas"></i> Comunidad</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?=base_url('comunity')?>"> Noticias</a></li>
                            <li><a class="dropdown-item" href="<?=base_url('team')?>">Equipo</a></li>
                            <li><a class="dropdown-item" href="<?=base_url('/tops')?>">Tops</a></li>
                            <li><a class="dropdown-item" href="#">Reglas de Habbo</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('/comunity')?>"><i class="fa-solid fa-cart-shopping"></i> Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('/gallery')?>"><i class="fa-solid fa-camera-retro"></i> Habbo Fotos</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)"><i class="fa-solid fa-book"></i> Catalogo</a>
                    </li>
                </ul>

                <div class="d-flex h-25">
                   d
                </div>
            </div>
        </div>
    </nav>
</section>
    <?= $this->renderSection('content') ?>
<div class="p-4 footer text-white">
        <div class="d-flex align-items-center">
            <div class="">
                <img  class="img-fluid" src="<?=base_url()?>/assets/img/icons/logo.gif" alt="">
            </div>
            <div class="p-2 flex-grow-1 align-self-center">
                <span>
                
                    © Habbo 2021. Todos los derechos reservados | <a href="<?=base_url('legal/privacy')?>">Política de Privacidad</a>  | <a href="<?=base_url('legal/terms-of-service')?>">Términos & Condiciones</a>
                </span>
            </div>
        </div>
       
    </div>

    <script src="<?=base_url()?>/bootstrap/js/bootstrap.min.js"></script>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>
</html>