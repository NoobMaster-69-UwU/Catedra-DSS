<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Banco Agricultura</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/bisss.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
</head>

<body>
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $('#select-backed-zelect').zelect()
    </script>

    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2>Finance Business</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Our Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->

            <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <br>
    <br>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">

                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registro</h2>
                    <form action="../Controlador/ctrlUser.php" method="POST" enctype="multipart/form-data">

                    <div class="row row-space">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input class="input--style-2" maxlength="30" type="text" name="nom"
                                        placeholder="Nombres" onkeypress="return solonumeros(event);"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <input class="input--style-2 select--no-search" type="text" maxlength="30"
                                        placeholder="Apellidos" name="ape" onkeypress="return soloLetras(event);" required>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input class="input--style-2" maxlength="30" type="text" name="tel"
                                        placeholder="Numero Telefonico" onkeypress="return solonumeros(event);"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <input class="input--style-2 select--no-search" type="text" maxlength="30"
                                        placeholder="DUI" name="name" onkeypress="return soloLetras(event);" required>
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <input class="input--style-2" type="date" name="fecha" placeholder="Fecha de Nacimiento"
                                onkeypress="return solonumeros(event);" required>
                        </div>

                        <div class="input-group">
                            <input class="input--style-2" type="text" name="email" maxlength="30"
                                placeholder="Correo Eletronico" onkeypress="return soloLetras(event);" required>
                        </div>

                        <div class="row row-space">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" name="sueldo" placeholder="Sueldo"
                                        required>
                                </div>
                            </div>
                            </div>
                            
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple">
                                    <select id="select-backed-zelect">
                                            <option disabled="disabled" selected="selected">Departamento</option>
                                            <option>Ahuachapán</option>
                                            <option>Cabañas</option>
                                            <option>Chalatenango</option>
                                            <option>Cuscatlán</option>
                                            <option>La Libertad</option>
                                            <option>Morazán</option>
                                            <option>La Paz</option>
                                            <option>Santa Ana</option>
                                            <option>San Miguel</option>
                                            <option>San Salvador</option>
                                            <option>San Vicente</option>
                                            <option>Sonsonate</option>
                                            <option>La Unión</option>
                                            <option>Usulután</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            
                        

                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit" name="accion"
                                value="Registrarse">Registrarme</button>
                        </div>

                        <br>
                        <div class="link">¿Ya estás registrado? <a href="../Vista/loginUsu.php">Inicia sesión aquí</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-partners owl-carousel">

                        <div class="partner-item">
                            <img src="assets/images/client-01.png" title="1" alt="1">
                        </div>

                        <div class="partner-item">
                            <img src="assets/images/client-01.png" title="2" alt="2">
                        </div>

                        <div class="partner-item">
                            <img src="assets/images/client-01.png" title="3" alt="3">
                        </div>

                        <div class="partner-item">
                            <img src="assets/images/client-01.png" title="4" alt="4">
                        </div>

                        <div class="partner-item">
                            <img src="assets/images/client-01.png" title="5" alt="5">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Starts Here -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-item">
                    <h4>Finance Business</h4>
                    <p>Vivamus tellus mi. Nulla ne cursus elit,vulputate. Sed ne cursus augue hasellus lacinia sapien
                        vitae.</p>
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="https://fb.com/templatemo" target="_blank"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h4>Useful Links</h4>
                    <ul class="menu-list">
                        <li><a href="#">Vivamus ut tellus mi</a></li>
                        <li><a href="#">Nulla nec cursus elit</a></li>
                        <li><a href="#">Vulputate sed nec</a></li>
                        <li><a href="#">Cursus augue hasellus</a></li>
                        <li><a href="#">Lacinia ac sapien</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item">
                    <h4>Additional Pages</h4>
                    <ul class="menu-list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">How We Work</a></li>
                        <li><a href="#">Quick Support</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-item last-item">
                    <h4>Contact Us</h4>
                    <div class="contact-form">
                        <form id="contact footer-contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Full Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                            pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message"
                                            placeholder="Your Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Send
                                            Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; 2020 Financial Business Co., Ltd.

                        - Design: <a rel="nofollow noopener" href="https://templatemo.com"
                            target="_blank">TemplateMo</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) {                   //declaring the array outside of the
            if (!cleared[t.id]) {                      // function makes it static and global
                cleared[t.id] = 1;  // you could use true and false, but that's more typing
                t.value = '';         // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>

</body>

</html>