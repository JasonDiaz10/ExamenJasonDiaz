<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Usuarios</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <!-- CSS  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="short_contact_list">
                               
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="img/logovet1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a  href="index.php">Inicio</a></li>
                                         <li><a href="#">Citas<i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                                <li><a href="citas.php">Registrar Citas</a></li>
                                                <li><a href="citas.php">Modificar Citas</a></li>
                                                <li><a href="citas.php">Eliminar Citas</a></li>
                                                <li><a href="citas.php">Listar Citas</a></li>
                                        </ul>
                                        <li><a href="#">Usuario <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="usuario.php">Registrar Usuario</a></li>
                                                <li><a href="usuario.php">Activación de Usuario</a></li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header  -->

    
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>Usuarios</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
  

    <!-- ================ Creacion usuario section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="mantenimiento.php" method="POST" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                   
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="cedula" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cédula'" placeholder="Cédula">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="nombre" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre Completo'" placeholder="Nombre Completo">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="telefono" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefono'" placeholder="Teléfono">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="correo" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Correo Electrónico'" placeholder="Correo Electrónico">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="direccion" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Dirección'" placeholder="Dirección">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="estado" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Estado'" placeholder="Estado">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="rol" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Rol'" placeholder="Rol">
                                    </div>
                                </div>
                               
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Crear Usuario</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
     
    <!-- ================ Creacion usuario section end ================= -->
    
        <!-- JS here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/scrollIt.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nice-select.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/gijgo.min.js"></script>
    
        <!--contact js-->
        <script src="js/contact.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mail-script.js"></script>
    
        <script src="js/main.js"></script>
        <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            disableDaysOfWeek: [0, 0],
      
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
        var timepicker = $('#timepicker').timepicker({
         format: 'HH.MM'
     });
        </script>
    </body>
    
    </html>
    
 