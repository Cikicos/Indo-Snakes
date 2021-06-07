<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!--  -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IndoSnakes</title>
          <!-- bootstrap.min css -->
        <link rel="stylesheet" href="{{ asset('/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
        <!-- Animate Css -->
        <link rel="stylesheet" href="{{ asset('/assets/plugins/animate-css/animate.css')}}">
        <!-- Icon Font css -->
        <link rel="stylesheet" href="{{ asset('/assets/plugins/fontawesome/css/all.css')}}">
        <link rel="stylesheet" href="{{ asset('/assets/plugins/fonts/Pe-icon-7-stroke.css')}}">
        <!-- Themify icon Css -->
        <link rel="stylesheet" href="{{ asset('/assets/plugins/themify/css/themify-icons.css')}}">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('/assets/plugins/slick-carousel/slick/slick.css')}}">
        <link rel="stylesheet" href="{{ asset('/assets/plugins/slick-carousel/slick/slick-theme.css')}}">

        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <style>
            @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
            body {
                font-family: 'Poppins', sans-serif; 
            }
            p, ol {
                font-family: 'Poppins', sans-serif;
                font-size: 1.1em;
                font-weight: 300;
                line-height: 1.7em;
            }
            .wrapper {
                display: flex;
                align-items: stretch;
            }
            #search {
                position: absolute;
                right: 11px;
            }
            #sidebar {
                position: fixed;
                width: 250px;
                background: #fffF;
                transition: all 0.3s;
                height: 100vh;
                z-index: 1;
                top: 0;
                left: 0;
            }
            #sidebar.active {
                margin-left: -250px;
            }
            a[data-toggle="collapse"] {
                position: relative;
            }
            .dropdown-toggle::after {
                display: block;
                position: absolute;
                top: 50%;
                right: 20px;
                transform: translateY(-50%);
            }    
            #sidebar .sidebar-header {
                padding: 20px;
            } 
            #sidebar ul li a {
                padding: 10px;
                font-size: 16px;
                display: block;
            }
            #sidebar ul li a:hover {
                color: #21c87a;
                background: #fff;
            }
            #sidebar ul li.active > a, a[aria-expanded="true"] {
                color: #fff;
                background: #ff0000;
            }
            #submenu {
                font-size: 16px !important;
                padding-left: 50px !important;
                background: #ff0000;
            }
            #content {
                width: calc(100% - 250px);
                padding: 40px;
                min-height: 100vh;
                transition: all 0.3s;
                position: absolute;
                top: 0;
                right: 0;
            }
            #content.active {
                width: 100%;
            }
            @media (max-width: 768px) {
                #sidebar {
                    margin-left: -250px;
                }
                #sidebar.active {
                    margin-left: 0;
                }
                #content {
                    width: 100%;
                }
                #content.active {
                    width: calc(100% - 250px);
                }
                #sidebarCollapse span {
                    display: none;
                }
            }
            table {
                font-size: 12px;
            }

            .icon-dash{
                width: 25px;
                height: 25px;
            }
        }
        </style>
    </head>

    <body>
        <div class="wrapper">

            <!-- sidebar -->
            <nav id="sidebar" class="text-white">
                <div class="sidebar-header">
                    <h3 class="text-center">Indo <br> Snakes</h3>
                </div>

                <ul class="list-unstyled components">
                    <li class="@yield('state')">
                        <a href="/index"><img src="img/dash.png" style="width:25px;height:25px;"> Dashboard</a>
                    </li>
                    <li class="@yield('state2')">
                        <a href="/tentang"><img src="img/is2.png" style="width:35px;5px;height:35px;" >Tentang IndoSnakes</a>
                    </li>
                    <li class="@yield('state')">
                        <a href="/berbisa"><img src="img/berbisa.png" style="width:35px;height: 35px;">Ular Berbisa</a>
                    </li>
                    <li class="@yield('state3')">
                        <a href="/biasa"><img src="img/biasa.png" style="width:35px;height:35px;"></i>Ular Tidak Berbisa</a>
                    </li>
                    <li class="@yield('state3')">
                        <a href="/rs"><img src="img/rs2.png" style="width:35px;;height:35px;"></i>Rumah Sakit</a>
                    </li>
                    <li>
                        <a href="/tolong"><img src="img/p3k2.png" style="width:35px;height:35px;"> Pertolongan Pertama</a>
                    </li>
                    <li>
                        <a href="/menangkap"><img src="img/tangkap2.png" style="width:35px;height:35px;">Cara Menangkap</a>                            
                    </li>   
                </ul>
            </nav>

            <!-- content -->
            <div id="content">

                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            
                            <nav class="navbar navbar-light bg-light">
                                    <button class="btn btn-primary" type="button" id="sidebarCollapse">
                                        <i class="fas fa-align-left"></i>
                                    </button>
                                    <h1>IndoSnakes</h1>
                                    <a href="/login" class="btn btn-danger">Logout</a>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="card mt-5">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                        @yield('content')
                        </div>
                    </div>
                </div>

            </div>

        </div>
    <!-- Main jQuery -->
    <script src="{{ asset('/assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.1 -->
    <script src="{{ asset('/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.min.jsplugins')}}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('/assets/plugins/slick-carousel/slick/slick.min.js')}}"></script>
    <script src="{{ asset('/assets/js/jquery.easing.1.3.js')}}"></script>
    <!-- Map Js -->
    <script src="{{ asset('/assets/plugins/google-map/gmap3.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>

    <script src="{{ asset('/assets/js/form/contact.js')}}"></script>
    <script src="{{ asset('/assets/js/theme.js')}}"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                });
            });
        </script>
    </body>
</html>

