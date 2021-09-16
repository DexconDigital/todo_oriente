<!DOCTYPE html>
<html lang="es">

<!-- Mirrored from premiumlayers.net/demo/html/estatepro/listing-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Mar 2018 15:21:24 GMT -->
<?php
    $codigo = 0;
    if (isset($_GET["dt"])){
        $codigo = $_GET["dt"];
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalle de inmueble - Inmobiliaria Todo Oriente</title>

    <!--Favicons-->

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

<body class="default">
    <?php
    $codigo = $_GET["dt"];
?>
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
                <div class="fleft page_name">Detalle de inmueble</div>
                <div class="fright page_dir">
                    <ul class="list-inline">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="propiedades.php">Inmuebles</a></li>
                        <li>Detalle de inmueble</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="row contentRow">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-12">
                    <div class="row m0 listing_details">
                        <div class="info_content row m0">
                            <div class="row m0 imageRow">
                                <div id="mycarousel" class="owl-carousel owl-theme"></div>
                                <div class="saleTag" id="saleTag"></div>
                                <div class="saleTag" style="left: 10px;display: inline-table;">
                                    <span id="tipoI"></span>
                                </div>
                            </div>
                            <div class="row m0 description">
                                <div class="row m0">
                                    <div class="row m0 priceRow">

                                    </div>
                                    <h4 class="location"></h4>
                                    <a href="#" class="detail_page_specify_btn specify_btn" id="margin-movil"> <span id="precio"></span></a>
                                    <a href="#" class="detail_page_specify_btn specify_btn"><i class="fa fa-arrows-alt"></i> <span id="construccion"></span>m<sup>2</sup></a>
                                    <a href="#" class="detail_page_specify_btn specify_btn"><i class="fa fa-bed"></i><span id="habitaciones"></span> alcobas</a>
                                    <a href="#" class="detail_page_specify_btn specify_btn"><i class="fa fa-bath"></i><span id="banos"></span> baños</a>
                                    <a href="#" class="detail_page_specify_btn specify_btn"><i class="fa fa-building"></i>Codigo <span id="codigo"></span></a>
                                </div>
                                <div class="row m0 additional_features">
                                    <h4 class="location">Información</h4>
                                    <a href="#" id="estrato" class="feature"><i class="fa fa-check-circle"></i> </a>
                                    <a href="#" class="feature"><i class="fa fa-check-circle"></i> <span id="areal"></span></a>
                                    <a href="#" id="barrio" class="feature"><i class="fa fa-check-circle"></i> </a>
                                    <h4 class="location">Descripción</h4>
                                    <p id="descripcion"></p>
                                </div>
                                <div class="row m0 propertyLocation">
                                    <h4 class="location">Ubicación del inmueble</h4>
                                    <div id="mapa">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Grid Listing-->
                </div>
                <div class="col-sm-4 sidebar">
                    <div class="row m0 widget bg-yellow">
                        <h4 class="text-white">Propiedades similares</h4>
                        <div id="sugerencias"></div>
                    </div>
                    <div id="sugerencias">

                    </div>

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
                            <li><a class="p-0 no-hover text-light" href="tel:6045577902">(604) 557 79 02</a></li>
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

    <?php echo "<script> var codigoInm ='" . $codigo . "';</script>"; ?>
    <script>
        if (codigoInm != 0) {
            var latitud = 0;
            var longitud = 0;
            $.ajax({
                url: "http://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/" + codigoInm + "",
                async: true,
                type: "GET",
                dataType: "json",
                beforeSend: function(xhr) {
                    xhr.setRequestHeader(
                        "Authorization",
                        'Basic ' + btoa('Authorization:XAZ2FaGk4qDZN5IiCFOVfMUKnptf3h2Mhhw2yfEm-874')
                    );
                },
                success: function(data) {
                    if (data.msn == "Inmueble NO Disponible") {
                        modalOpen();
                        return;
                    }
                    var j = 1;
                    var carrousel = '';
                    if (data.fotos == undefined || data.fotos.length == 0) {
                        carrousel += '<div class="item active">' +
                            '<img src="images/no_image.png" alt=""/ style="width:100%; height:500px">' +
                            '</div>';
                    } else {
                        carrousel += '<div class="item active">' +
                            '<img src="' + data.fotos[0].foto + '" alt=""/  style="width:100%; height:500px">' +
                            '</div>';

                        for (var y = 1; y < Object.keys(data.fotos).length - 1; y++) {
                            if (data.fotos[y].foto != undefined) {
                                carrousel += '<div class="item">' +
                                    '<img src="' + data.fotos[y].foto + '" alt=""/ style="width:100%; height:500px">' +
                                    '</div>';
                                j++;
                            }
                        }
                        if (data.video != null) {
                            carrousel += '<div class="item">' +
                                '<iframe width="auto" height="500" src="' + data.video + '" style="width:100%" ></iframe>' +
                                '</div>';
                        }
                    }

                    $("#mycarousel").html(carrousel);
                    $("#mycarousel").owlCarousel({
                        items: 1,
                        loop: true,
                        margin: 10,
                        lazyLoad: true,
                        merge: true,
                        autoplay: true,
                        autoplayTimeout: 4000,
                    });
                    var color = ""
                    var cannon = new Number(data.ValorCanon).toLocaleString("en-US");
                    cannon = (data.Gestion == "Arriendo/venta") ? "$ " + cannon + "<br>" : '';
                    color += (data.Gestion == "Arriendo/venta" || data.Gestion == "Arriendo/venta ") ? 'arriendo_venta' : '';
                    color += (data.Gestion == "Arriendo" || data.Gestion == "Arriendo ") ? 'rentTag' : '';
                    $('#mycarousel').carousel();
                    $("#construccion").append("" + data.AreaConstruida);
                    $("#areal").append("Area del lote: " + data.AreaLote + " m<sup>2</sup>");
                    $("#saleTag").append(data.Gestion).addClass(color);
                    $("#habitaciones").append(" " + data.alcobas);
                    $("#banos").append(" " + data.banos);
                    $("#precio").append(cannon + "$ " + data.precio);
                    $("#estrato").append("Estrato:  " + data.Estrato);
                    $("#barrio").append("Ubicación: " + data.depto + ", " + data.barrio);
                    $("#banos2").append("Baños: " + data.banos);
                    $("#alcobas").append("Alcobas: " + data.alcobas);
                    $("#tipoI").append("" + data.Tipo_Inmueble);
                    $("#codigo").append("" + data.idInm);
                    $("#descripcion").append("" + data.descripcionlarga);

                    window.localStorage.setItem("codigo", data.idInm)
                    window.localStorage.setItem("gestion", data.Gestion)
                    window.localStorage.setItem("Tipo_Inmueble", data.Tipo_Inmueble)
                    $("#ubicacion").append(data.barrio + ", " + data.ciudad + ", " + data.depto);

                    latitud = data.latitud;
                    longitud = data.longitud;

                    $("#mapa").append('<iframe id="map" style="border:0;width:100%;height:30rem;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=' + latitud + ',' + longitud + '&hl=es&z=16&amp;output=embed"    ></iframe>');
                    $("#similarjs").append('<script src="js/similar.js"></' + 'script>');
                },
                error: function(data) {
                    console.log("Fail");
                }
            });

        } else {
            modalOpen();
        }

        function modalOpen() {
            $("body").append('<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
                '<div class="modal-dialog" role="document">' +
                '<div class="modal-content">' +
                '<div class="modal-header">' +
                '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>' +
                '<h4 class="modal-title" id="myModalLabel">Modal title</h4>' +
                '</div>' +
                '<div class="modal-body">' +
                'El inmueble no existe en Inmobiliaria Todo Oriente' +
                '</div>' +
                '<div class="modal-footer">' +
                '<button type="button" class="btn btn-default" data-dismiss="modal" onclick="redirect()">Cerrar</button>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>');

            $(".modal").modal();

        }

        function redirect() {
            window.location.href = "index.html";
        }

    </script>
    <div id="similarjs"></div>
</body>

</html>
