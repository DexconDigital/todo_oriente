<!DOCTYPE html>
<html lang="es">

<?php

$gs = 0;
$ti = 0;
$ci = 0;
$zo = 0;
$pre = 0;
if (isset($_GET["gs"]) && isset($_GET["ti"]) && isset($_GET["ci"]) && isset($_GET["zo"]) && isset($_GET["pre"])) {
    $gs = $_GET["gs"];
    $ti = $_GET["ti"];
    $ci = $_GET["ci"];
    $zo = $_GET["zo"];
    $pre = $_GET["pre"];
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inmuebles -Inmobiliaria Todo Oriente</title>

    <link rel="shortcut icon" href="favicon/favicon.png" type="image/x-icon">
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
<style>
    #inmb>.btn-group {
        width: 150px;
    }

    #code {
        background: none #fff;
        border-radius: 5px;
        border: none;
        line-height: 37px;
        padding: 0 10px;
        color: #b2b2b2;
        width: 90px;
    }

</style>

<body class="default" onload="imprimir(1)">

    <header>
        <div class="topHeader">
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
                            <li><a href="tel:0345577902"><i class="fa fa-phone"></i> (034) 557 79 02</a></li>
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
                        <li><a href="contacto.html">Contáctenos</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <!--Header End-->

    <section class=" pageCover">
        <div class="container">
            <div class=" ">
                <div class="fleft page_name">Inmuebles</div>
                <div class="fright page_dir">
                    <ul class="list-inline">
                        <li><a href="index.html">Inicio</a></li>
                        <li>Inmuebles</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="searchForm media" style="margin-top:15px">
                <div class="formTitle media-left media-middle"><span>Busca </span><br>Tu inmueble</div>

                <div class="media-body form_elements">
                    <div class="fleft form_element">
                        <label for="operacion">Operación</label>
                        <select name="" id="operacion" class="selectpicker propertyType">
                        </select>
                    </div>
                    <div class="fleft form_element">
                        <label for="ciudad">Ciudad</label>
                        <select name="" id="ciudad" class="selectpicker propertyLocation">
                            <option value="0">Ciudad</option>
                        </select>
                    </div>

                    <div class="fleft form_element" id="inmb">
                        <label for="inmueble">Tipo de Inmueble</label>
                        <select name="" id="inmueble" class="selectpicker propertyLocation">
                        </select>
                    </div>
                    <div class="fleft form_element">
                        <label for="zona">Zona</label>
                        <select name="" id="zona" class="selectpicker propertyLocation">
                            <option value="0">Zona</option>
                        </select>
                    </div>
                    <div class="fleft form_element">
                        <label for="price">Precio</label>
                        <select name="" id="price" class="selectpicker propertyLocation">
                            <option value="0" class="holasdasd">precio</option>
                            <option value="1">$ 500.000 a $ 1.000.000</option>
                            <option value="2">$ 1.000.001 a $ 5.000.000</option>
                            <option value="3">$ 5.000.001 a $ 8.000.000</option>
                            <option value="4">$ 8.000.001 a $ 30.000.000</option>
                            <option value="5">$ 30.000.001 a $ 50.000.000</option>
                            <option value="6">$ 50.000.001 a $ 300.000.000</option>
                            <option value="7">$ 300.000.001 a $ 600.000.000</option>
                            <option value="8">$ 600.000.001 a $ 1.000.000.000</option>
                            <option value="9">$1.000.000.001 a $ 2.000.000.000</option>
                            <option value="10">$2.000.000.001 a $ 12.000.000.000</option>
                        </select>
                    </div>

                    <div class="fleft form_element"> <label for="code">Código</label>
                        <input id="code" class="codeInm" placeholder="ej :122">
                    </div>

                    <div class="fleft form_element">
                        <button type="submit" class="btn btn-default" id="search-1">Buscar</button>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--Search Form-->

    <section class="contentRow">
        <div class="container">
            <div id="propiedad">
                <div class="container">
                    <h3>Cargando...</h3>
                </div>
            </div>
        </div>
         <div class="pagination-area mb-60 col-sm-12 col-md-12">
                <ul class="list-inline text-center">
                    <div class="pagina" style="color:black;"></div>
                    <li id="anterior" style="display:none;">
                        <a href="#" id="banterior" onclick="paginator('ant')">
                            <i class="fa fa-angle-left" aria-hidden="true" id="flechas"></i>
                        </a>
                    </li>
                    <li id="siguiente" style="display:none;">
                        <a href="#" id="bsiguiente" onclick="paginator('sig')">
                            <i class="fa fa-angle-right" aria-hidden="true" id="flechas"></i>
                        </a>
                    </li>
                </ul>
            </div>
    </section>

    <!--Content Area End-->

    <!--Another Common Area-->
    <section class="pt70 footerBanner">
        <div class="  inner">
            <div class="container bg-transparent">
                <div class="">
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

    <footer>
        <div class="container">
            <div>
                <div class="col-sm-6 col-md-6 col-lg-4 widget recentPostWidget">
                    <div class="  widgetInner">
                        <h4 class="widgetTitle">Últimas Noticias</h4>
                        <ul class="nav" id="ulti-noticias2">
                            <li><a href="single-post.html">New Search Platform Update</a></li>
                            <li><a href="single-post.html">Envato's Most Wanted - $5,000 for Ghost Themes</a></li>
                            <li><a href="single-post.html">Update: WordPress Theme Submission Requirements</a></li>
                            <li><a href="single-post.html">Envato Staff Vs Community Nike+ competition</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 widget aboutWidget">
                    <div class="  widgetInner">
                        <a href="index.html"><img src="images/logos/footer.png" alt=""></a>
                        <p> Somos un equipo de trabajo profesional con
                            vocación de servicio al cliente. Desde 2016
                            prestamos nuestro servicio inmobiliario en todo
                            el Oriente Antioqueño.<br>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 widget oppeningHoursWidget">
                    <div class="  widgetInner">
                        <h4 class="widgetTitle">Contáctenos</h4>
                        <ul class="nav">
                            <li>Llámenos</li>
                            <li><a class="p-0 no-hover text-light" href="tel:0345577902">(034) 557 79 02</a></li>
                            <li>Envíenos un correo</li>
                            <li><a class="p-0 no-hover text-light" href="mailto:gerencia@inmobiliariatodooriente.com">gerencia@inmobiliariatodooriente.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyrightRow">
                <center>
                    <div class="col-sm-12 copyright">© 2018 <a href="http://www.dexcondigital.com/" target="_blank">Dexcon Digital</a>, Todos los derechos reservados</div>
                </center>
            </div>
        </div>
    </footer>

    <!--Go to Top-->
    <a href="#" class="scrollup" style="color:black"><i class="fa fa-angle-up fa-2x"></i></a>
    <!-- Style Switch -->

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
    <!-- <script src="vendors/styleswitch/styleswitch.js"></script>
   <script src="vendors/styleswitch/style_switch_custom.js"></script>-->

    <!--Strella JS-->
    <script src="js/estate-pro.js"></script>

    <?php echo '<script>var gs = ' . $gs . '</script>'; ?>
    <?php echo '<script>var ti = ' . $ti . '</script>'; ?>
    <?php echo '<script>var ci = ' . $ci . '</script>'; ?>
    <?php echo '<script>var zo = ' . $zo . '</script>'; ?>
    <?php echo '<script>var pre = ' . $pre . '</script>'; ?>

    <script>
        if (typeof(Storage) !== "undefined") {
            // Store
            localStorage.setItem("gs", gs);
            localStorage.setItem("ci", ci);
            localStorage.setItem("ti", ti);
            localStorage.setItem("zo", zo);
            localStorage.setItem("pre", pre);
        } else {
            document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
        }

    </script>
    <script src="js/search.js"></script>
    <script src="js/notices.js"></script>
    <script src="js/paginador.js"></script>

</body>

<!-- Mirrored from premiumlayers.net/demo/html/estatepro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Mar 2018 14:04:25 GMT -->

</html>
