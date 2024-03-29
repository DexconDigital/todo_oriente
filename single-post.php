﻿<!DOCTYPE html>
<html lang="es">

<!-- Mirrored from premiumlayers.net/demo/html/estatepro/single-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Mar 2018 15:21:42 GMT -->
<?php

$codigo = $_GET["codigo"];

//$link = mysqli_connect("MYSQL7003.site4now.net","a30380_noticia","2018noticias","db_a30380_noticia");
//$link = mysqli_connect("localhost","root","","2018noticias");
$link = mysqli_connect("50.62.209.73:3306","todooriente_user","nosequeponer123","TodoOriente_noticias");

    $sql = "SELECT * FROM noticias WHERE id = $codigo";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    while ($field = mysqli_fetch_array($result)) {
        $nombre = $field['nombre'];
        $id = $field['id'];
        $descripcion = $field['descripcion'];
        $imagen = $field['imagen'];
        $noticia = $field['noticia'];
        $fecha_complete = strtotime($field['fecha']);
    }

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalle de noticia - Inmobiliaria Todo Oriente</title>

    <!--Favicons-->
    <link rel="shortcut icon" href="favicon/favicon.png" type="image/x-icon">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--Bootstrap and Other Vendors-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl.carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/owl.carousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/flexslider/flexslider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap-select/css/bootstrap-select.min.css" media="screen" />

    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Philosopher:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>

    <!--Mechanic Styles-->
    <link rel="stylesheet" href="css/style.css">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- Style Switch -->

    <link rel="alternate stylesheet" type="text/css" href="css/skins/skin1.css" title="skin1" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="css/skins/skin2.css" title="skin2" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="css/skins/skin3.css" title="skin3" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="css/skins/skin4.css" title="skin4" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="css/skins/skin5.css" title="skin5" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="css/skins/skin6.css" title="skin6" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="css/skins/skin7.css" title="skin7" media="screen" />

    <!--Light Skin-->
    <link rel="stylesheet" href="css/skins/style-light.css">
    <link rel="stylesheet" href="css/headers/header1.css">
    <link rel="stylesheet" href="css/headers/header2.css">
    <link rel="stylesheet" href="css/headers/header3.css">
    <link rel="stylesheet" href="css/headers/header4.css">

    <!--Responsive Style-->
    <link rel="stylesheet" href="css/responsive.css">

    <!--Customizer-->
    <link rel="stylesheet" href="css/customizer.css">

</head>

<body class="default">

    <header class="row">
        <div class="row m0 topHeader">
            <div class="container">
                <div class="row">

                    <div class="col-md-2 social_menu">
                        <h5 style="font-family: 'Roboto', sans-serif; color:#676767; font-size:15px; text-align:center">INMOBILIARIA TODO ORIENTE S.A.S.</h5>
                    </div>
                    <div class="col-md-10 top_menu">
                        <ul class="list-inline">
                            <li><a href="https://www.instagram.com/inmobiliariatodooriente/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=100013773819965" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:gerencia@inmobiliariatodooriente.com "><i class="fa fa-envelope-o"></i>gerencia@inmobiliariatodooriente.com</a></li>
                            <li><a href="tel:6045577902"><i class="fa fa-phone"></i> (604) 557 79 02</a></li>
                            <li><a href="#"><i class="fa fa-map-marker"></i> Calle 47 # 76 02 Rio del Este Parque Comercial en Rionegro Antioquia.</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNavigation">
                        <i class="fa fa-bars"></i> Menu
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logos/logo.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="mainNavigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.html" aria-expanded="false">INICIO</a>
                        </li>
                        <li>
                            <a href="quienes-somos.html" aria-expanded="false">QUIÉNES SOMOS</a>
                        </li>
                        <li>
                            <a href="servicios.html" aria-expanded="false">SERVICIOS</a>
                        </li>
                        <li>
                            <a href="asesores.html" aria-expanded="false">ASESORES</a>
                        </li>
                        <li>
                            <a href="propiedades.php" aria-expanded="false">INMUEBLES</a>
                        </li>
                        <li>
                            <a href="clientes.html" aria-expanded="false">CLIENTES</a>
                        </li>
                        <li>
                            <a href="noticias.html" aria-expanded="false">NOTICIAS</a>
                        </li>
                        <li><a href="contacto.html">Contactenos</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <!--Header End-->

    <section class="row pageCover">
        <div class="container">
            <div class="row m0">
                <div class="fleft page_name">Detalle de noticia</div>
                <div class="fright page_dir">
                    <ul class="list-inline">
                        <li><a href="index.html">Inicio</a></li>
                        <li>Detalle de noticia</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="row contentRow blogWsidebar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 blogCol" id="noticia">

                </div>
                <div class="col-sm-4 sidebar">
                </div>
            </div>
        </div>
    </section>

    <!--Content Area End-->

    <!--Another Common Area-->
    <section class="row pt70 footerBanner">
        <div class="row m0 inner">
            <div class="container bg-transparent">
                <div class="row">
                    <img src="images/foot-brand.png" alt="footer banner" class="img-responsive fleft property">
                    <div class="casa_contacto">
                        <div class="fleft banner_texts">
                            <h2>Venda <span>o</span> Arriende</h2>
                            <h3>Su Inmueble</h3>
                        </div>
                        <a href="contacto.html" class="btn_contacto sell_rent_link fright">Contáctenos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 widget recentPostWidget">
                    <div class="row m0 widgetInner">
                        <h4 class="widgetTitle">Últimas Noticias</h4>
                        <ul class="nav" id="ulti-noticias2">
                            <li><a href="single-post.html">New Search Platform Update</a></li>
                            <li><a href="single-post.html">Envato's Most Wanted - $5,000 for Ghost Themes</a></li>
                            <li><a href="single-post.html">Update: WordPress Theme Submission Requirements</a></li>
                            <li><a href="single-post.html">Envato Staff Vs Community Nike+ competition</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 widget aboutWidget">
                    <div class="row m0 widgetInner">
                        <a href="index.html"><img src="images/logos/footer.png" alt=""></a>
                        <p> Somos un equipo de trabajo profesional con
                            vocación de servicio al cliente. Desde 2016
                            prestamos nuestro servicio inmobiliario en todo
                            el Oriente Antioqueño.<br>
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 widget oppeningHoursWidget">
                    <div class="row m0 widgetInner">
                        <h4 class="widgetTitle">Contáctenos</h4>
                        <ul class="nav">
                            <li>Llámenos</li>
                            <li><a class="p-0 no-hover text-light" href="tel:6045577902" >(604) 557 79 02</a></li>
                            <li>Envíenos un correo</li>
                            <li><a class="p-0 no-hover text-light" href="mailto:gerencia@inmobiliariatodooriente.com">gerencia@inmobiliariatodooriente.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyrightRow row">
                <center>
                    <div class="col-sm-12 copyright">© 2018 <a href="http://www.dexcondigital.com/" target="_blank">Dexcon Digital</a>, Todos los derechos reservados</div>
                </center>
            </div>
        </div>
    </footer>

    <!--Go to Top-->
    <a href="#" class="scrollup" style="color:black"><i class="fa fa-angle-up fa-2x"></i></a>

    <!--jQuery, Bootstrap and other vendor JS-->

    <!--jQuery-->
    <script src="js/jquery-2.1.3.min.js"></script>

    <!--Bootstrap JS-->
    <script src="js/bootstrap.min.js"></script>

    <!--Owl Carousel-->
    <script src="vendors/owl.carousel/js/owl.carousel.min.js"></script>

    <!--Bootstrap Select-->
    <script src="vendors/bootstrap-select/js/bootstrap-select.min.js"></script>

    <!--FlexSlider-->
    <script src="vendors/flexslider/jquery.flexslider-min.js"></script>

    <!--StyleSwitch-->
    <script src="vendors/styleswitch/styleswitch.js"></script>
    <script src="vendors/styleswitch/style_switch_custom.js"></script>

    <!--Strella JS-->
    <script src="js/estate-pro.js"></script>
    <script src="js/notices.js"></script>

    <!--asignacion de valores a variables js-->
    <?php echo "<script>var titulo =' " . $nombre . "'</script>"; ?>
    <?php echo "<script>var id =' " . $id . "'</script>"; ?>
    <?php echo "<script>var descripcion =' " . $descripcion . "'</script>"; ?>
    <?php echo "<script>var imagen =' " . $imagen . "'</script>"; ?>
    <?php echo "<script>var noticia =' " . $noticia . "'</script>"; ?>
    <?php echo "<script> var año = ".date('Y', $fecha_complete)."</script>";?>
    <?php echo "<script> var mes = ".date('m', $fecha_complete)."</script>";?>
    <?php echo "<script> var dia = ".date('d', $fecha_complete)."</script>";?>
    <script>
        var imagen = 'todo-oriente-noticias//admin/' + imagen + '';

        imagen = imagen.replace(/\s/g, '');

        var noticia = '<div class="row m0 single_blog">' +
            '<img src="' + imagen + '" alt="Single Blog - Feature Image" class="img-responsive featureImg">' +
            '<div class="row m0 post_meta">' +
            '<a href="#"><i class="fa fa-calendar"></i>' + año + "-" + mes + "-" + dia + '</a>' +
            '</div>' +
            '<div class="post_desc">' +
            '<h4 class="blogTitle">' + titulo + '</h4>' +
            '<p>' + noticia + '</p>' +
            '</div>' +
            '</div>';

        $("#noticia").html(noticia);

    </script>
</body>

<!-- Mirrored from premiumlayers.net/demo/html/estatepro/single-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Mar 2018 15:21:42 GMT -->

</html>
