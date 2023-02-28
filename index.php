<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hernández Bienes Raíces</title>
        <meta name="description" content="Bienvenido a R. Mackintosh, Agente de Liquidación y Negociación Propio con casi 100 años de experiencia en el Mercado de Capitales.">
        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="static/bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <!-- STYLES -->
        <link rel="stylesheet" href="static/css/styles.css">
        <link rel="stylesheet" href="static/css/fixed.css">
        <link rel="stylesheet" href="static/css/header.css">
        <!-- LOGO -->
        <link rel="shortcut icon" type="image/x-icon" href="static/img/logo_titulo.jpeg">
        <!-- FONT AWESOME -->
        <script src="https://kit.fontawesome.com/8ca6f1cadf.js" crossorigin="anonymous"></script>
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Oswald&family=Roboto:wght@300&display=swap" rel="stylesheet">
        <!-- MATERIALIZE -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
        <meta name="keywords" content="hernandez, hernandez bienes raices, bienes raices, inmobiliaria, propiedades, alquileres, emprendimientos">
        <meta property="og:title" content="Hernández Bienes Raíces">
        <meta property="og:description" content="R. Mackintosh. Casi 100 años de experiencia en el Mercado de Capitales.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://hernandezbienesraices.com.ar/">
    </head>
    
    <body>
        
        <header id="header">
            <a href="#home" class="header__logo"><img src="static/img/logo.jpeg" alt=""></a>

            <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle"></ion-icon>

            <nav class="nav" id="nav-menu">
                <div class="nav__content bd-grid">
                    
                    <ion-icon name="close-outline" class="nav__close" id="nav-close"></ion-icon>
                    
                    <div class="nav__perfil">
                        <div class="nav__img">
                            <img src="static/img/logo.jpeg" alt="">
                        </div>
                        
                        <div>
                            <a href="#" class="nav__name">Hernández Bienes Raíces</a>
                        </div>
                    </div>
    
                    <div class="nav__menu">
                        <ul class="nav__list">
                            <li class="nav__item"><a href="#home" class="nav__link">Inicio</a></li>
                            <li class="nav__item"><a href="#features" class="nav__link">Servicios</a></li>
                            <li class="nav__item"><a href="#about-us" class="nav__link">Nosotros</a></li>
                            <li class="nav__item"><a href="#contact" class="nav__link">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        
        <main>
            
            <section id="home">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active" style="background-image: url(static/img/hero1.png);">
                            <div class="carousel-caption text-center">
                                <h1>Bienvenido <br class="mobile-break1">a<br class="mobile-break2"> Hernández Bienes Raíces</h1>
                                <a href="#contact" class="btn btn-outline-light btn-lg">Contacto</a>
                            </div>
                        </div>
                        <div class="carousel-item" style="background-image: url(static/img/hero2.png);">
                            <div class="carousel-caption text-center">
                                <h1>Atención personalizada</h1>
                                <a href="#contact" class="btn btn-outline-light btn-lg">Contacto</a>
                            </div>
                        </div>
                        <div class="carousel-item" style="background-image: url(static/img/hero3.png);">
                            <div class="carousel-caption text-center">
                                <h1>Seguridad, Confianza y Transparencia</h1>
                                <a href="#contact" class="btn btn-outline-light btn-lg">Contacto</a>
                            </div>
                        </div>
                        <a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a href="#carouselExampleIndicators" class="carousel-control-next" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </section>
            <span class="anchor" id="features"></span>
            <section class="features-container">
                <h2 class="features__title">Nuestros servicios</h2>
                <h2 class="features__subtitle">Para ver nuestras propiedades haga click <a href="https://www.zonaprop.com.ar/venta-q-hernandez-bienes-raices.html" target=”_blank”>acá</a>.</h2>
                <div class="features">
                    <div class="feature__box feature__box1">
                        <i class="fas fa-street-view"></i>
                        <h4 class="feature__box-title1 uppercase">Ventas</h4>
                    </div>
                    <div class="feature__box feature__box2">
                        <i class="fas fa-chart-line"></i>
                        <h4 class="feature__box-title2 uppercase">Alquileres</h4>
                        <p class="feature__box-description feature__box-description2">Destinado a inversores interesados en compañías que cotizan en el mercado argentino.</p>
                    </div>
                    <div class="feature__box feature__box3">
                        <i class="fas fa-file-invoice-dollar"></i>
                        <h4 class="feature__box-title3 uppercase">Emprendimientos</h4>
                        <p class="feature__box-description feature__box-description3">Instrumentos de renta fija destinado a inversores que buscan anticipar el flujo de fondos con un horizonte de mediano y largo plazo.</p>
                    </div>
                </div>
            </section>
            <span class="anchor" id="about-us"></span>
            <section class="about-us__container">
                <div class="about-us">
                    <div class="about-us__box">
                        <div class="about-us__container">
                            <h3 class="about-us__title">Nosotros</h3>
                            <h4 class="about-us__description">Hernández Bienes Raíces es una inmobiliaria encabezada por el martillero Christian Hernández, que combina a la perfección los años de experiencia de operaciones en propiedades usadas como emprendimientos, junto con la tecnología actual en medio de publicidad y actualidad del mercado inmobiliario.<br>
                                <br>
                                El principal objetivo de Hernández Bienes Raíces es representar a una nueva camada de agentes inmobiliarios demostrando una inmejorable calidad de servicio y de valores personales como la honestidad, transparencia y profesionalismo.<br>
                            </h4>
                        </div>
                    </div>
                </div>
            </section>

            <section class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.845033852502!2d-58.4469885!3d-34.63335620000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca3398e26401%3A0x19da4d6da1fae684!2sParque%20Chacabuco%2C%20Ach%C3%A1val%20763%2C%20C1406CWK%20CABA!5e0!3m2!1sen!2sar!4v1676666412326!5m2!1sen!2sar" width="600" height="450"frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </section>
            <span class="anchor" id="contact"></span>
            <footer>
                <div class="contact">
                    <span class="anchor" id="form-span"></span>
                    <div class="contact__box">
                        <div class="contact__form">
                            <form action="send_mail.php" method="post" class="form">
                                <div class="form__header">
                                    <h3 class="form__title uppercase">Consultas</h3>
                                </div>
                                <?php
                                if (!isset($_GET['contact'])) {
                                }
                                else {
                                    $contactCheck = $_GET['contact'];
                                    if ($contactCheck == "empty") {
                                        echo "<div class='contact-message-box'><p class='contact-message error'>Debe completar todos los campos.</p></div>";
                                    }
                                    elseif ($contactCheck == "success") {
                                        echo "<div class='contact-message-box'><p class='contact-message success'>Gracias por contactarse con nosotros. Le responderemos a la brevedad.</p></div>";
                                    }
                                }
                                ?>
                                <div class="form-item">
                                    <input type="text" class="form-input" name="name" placeholder="Nombre" aria-label="nombre" required minlength="2">
                                </div>
    
                                <div class="form-item">
                                    <input type="number" class="form-input" name="telefono" placeholder="Teléfono (opcional)" aria-label="telefono" minlength="6">
                                </div>
    
                                <div class="form-item">
                                    <input type="text" class="form-input" name="email" placeholder="Email" aria-label="email" required minlength="4">
                                </div>
                                
                                <div class="form-item">
                                    <textarea class="form-input" name="message" placeholder="Mensaje" aria-label="mensaje" required minlength="4"></textarea>
                                </div>
                                
                                <div class="form__item">
                                    <input type="hidden" class="form__input" id="form_name" name="subject" value="Enviado desde www.hernandezbienesraices.com.ar" aria-label="subject" required minlength="2">
                                </div>
                                
                                <button class="form-button uppercase g-recaptcha" type="submit" name="submit" id="submit">Enviar</button>
                            </form>    
                        </div>
                        <div class="contact__container">
                            <div class="contact__box-info">
                                <div class="contact__info-box">
                                    <h3 class="contact__title uppercase">Ubicación</h3>
                                    <h4 class="contact__description">Achaval 763 8°A, Ciudad Autónoma de Buenos Aires</h4>
                                </div>
                                <div class="contact__info-box">
                                    <h3 class="contact__title uppercase">Email</h3>
                                    <h4 class="contact__description">christian@hernandezbienesraices.com.ar</h4>
                                </div>
                                <div class="contact__info-box">
                                    <h3 class="contact__title uppercase">Teléfono</h3>
                                    <h4 class="contact__description">11 4096 9241</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </main>
        <!-- IONICONS -->
        <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
        <!-- JQUERY -->
        <script src="static/js/jquery-3.3.1.min.js"></script>
        <!-- BOOTSTRAP JS-->
        <script src="static/bootstrap-4.1.3-dist/js/bootstrap.bundle.js"></script>
        <!-- HIDE MENU -->
        <script src="static/js/menu.js"></script>
    </body>    
</html>