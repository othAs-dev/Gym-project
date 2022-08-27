<?php $name_url = explode("/", $_SERVER["SCRIPT_NAME"]); ?>
<?php require_once './elements/functionAddImg.php'; ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <title> <?php $titleFalse = "Le studio biarritz"; echo $title ?? $titleFalse; ?></title>
    </head>
    <body> 
       <?php if($name_url[1] === "index.php") : ?>
        <header class = "">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> <!-- header -->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active rond-slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="rond-slide"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="rond-slide"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./images/slider/corde.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="text-slide text-center mb-5">2 INSCRIPTIONS SIMULTANEES = UN 3EME ABONNEMENT DE 6 MOIS OFFERT</h4>
                        <button class="p-3 bg-transparent border-white rounded text-white mb-5 mt-5">Plus d'infos</button>
                    </div>
                    
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./images/slider/slide_2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./images/slider/bodybuild.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"></a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"></a>
        </div>
    </header>
        <?php elseif( $name_url[1] === "contact.php") : ?>
            <header class="bgImg-3" >
            </header>
        <?php elseif ($name_url[1] === "activite.php") :  ?>
            <header class = "bgImg-2">
        </header>
        <?php endif; ?>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top nav-fixed ">
            <div class="navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand text-white pr-5" href="index.php">
                    <img src="./images/logo.png">
                </a>
                <button class="burger">
                    <span class="bar"></span>
                </button>
                <ul class="navbar-nav navbar__links">
                    <?php echo addLinks("nav-item active navbar__link", "nav-link text-white pr-3", "./html/error-404.html", "L'EQUIPE") ?>
                    <?php echo addLinks("nav-item active navbar__link", "nav-link text-white pr-3", "activite", "LES ACTIVITES") ?>
                    <?php echo addLinks("nav-item active navbar__link", "nav-link text-white pr-3", "./html/error-404.html", "NOS OFFRES") ?>
                    <?php echo addLinks("nav-item active navbar__link", "nav-link text-white pr-3", "./html/error-404.html", "PLANNING") ?>
                    <?php echo addLinks("nav-item active navbar__link", "nav-link text-white pr-3", "./html/error-404.html", "LE BLOG") ?>
                    <?php echo addLinks("nav-item active navbar__link", "nav-link text-white pr-3", "contact", "CONTACT") ?>
                    <li class="d-flex align-items-center navbar__link">
                        <a class="ml-5 text-white text-decoration-none nav-link" href="./html/error-404.html">
                            <i class="iconify mobile" data-icon="fontisto:mobile-alt" style="color: white;"></i>
                            05 59 47 84 18
                        </a>
                    </li>
                    <li class="d-flex align-items-center pl-2 navbar__link">
                        <a class=" nav-link reseaux" href="./html/error-404.html">
                            <i class="iconify" data-icon="dashicons:facebook" style="color: white;"></i>
                        </a>
                    </li>
                    <li class="d-flex align-items-center navbar__link">
                        <a class="nav-link reseaux" href="./html/error-404.html">
                            <i class="iconify mr-2 ml-2" data-icon="ant-design:instagram-outlined"
                                style="color: white;"></i>
                        </a>
                    </li>
                    <li class="d-flex align-items-center navbar__link">
                        <a class="nav-link reseaux" href="./html/error-404.html">
                            <i class="iconify" data-icon="cib:tripadvisor" style="color: white;"></i>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
