<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/kit/free/apple-icon.png">
    <link rel="icon" href="../assets/img/kit/free/favicon.png">
    <title>
        LaCMS
    </title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/material-kit.css?v=2.0.2">

    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/assets-for-demo/demo.css" rel="stylesheet" />
    <!-- iframe removal -->
</head>

<body class="landing-page ">

    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ url('/') }}">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">content_paste</i> Documentation
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="" class="dropdown-item">
                                <i class="material-icons">cloud</i> LaCMS API
                            </a>
                            <a href="" class="dropdown-item">
                                <i class="material-icons">code</i> LaCMS Client WebApp
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/RichardTrujilloTorres/lacms-api/archive/master.zip" onclick="scrollToDownload()">
                            <i class="material-icons">cloud_download</i> Download
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" 
                            href="https://github.com/RichardTrujilloTorres" target="_blank" 
                            data-original-title="Follow me on GitHub">
                            <i class="fa fa-github"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" 
                            href="https://www.instagram.com/rickynroses87/" target="_blank" 
                            data-original-title="Follow me on Instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" 
                            href="https://www.facebook.com/richard.trujillo.5494" target="_blank" 
                            data-original-title="Follow me on Facebook">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="page-header header-filter" data-parallax="true" 
        style=" background-image: url('../assets/img/backgrounds/tablet.jpeg'); ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title">"La" CMS</h1>
                    <h4>A vanilla, minimalistic SPA CMS boostrapper w/ focus on reusability.</h4>
                    <br>
                    <a href="" target="_blank" class="btn btn-danger btn-raised btn-lg">
                        <i class="material-icons">launch</i> Live Demo
                    </a>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <footer class="footer ">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="#what">
                            What
                        </a>
                    </li>
                    <li>
                        <a href="#why">
                            Why
                        </a>
                    </li>
                    <li>
                        <a href="#when">
                            When
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script> 
                <a href="mailto:richard.trujillo.torres@gmail.com" target="_blank">Richard Trujillo Torres</a>
            </div>
        </div>
    </footer>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/bootstrap-material-design.js"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
    <script src="../assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../assets/js/plugins/nouislider.min.js"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="../assets/js/material-kit.js?v=2.0.2"></script>
    <!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
    <script src="../assets/assets-for-demo/js/material-kit-demo.js"></script>
</body>

</html>
