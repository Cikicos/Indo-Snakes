
@extends('master')
@section('content')
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="it">
  <meta name="keywords" content="Rapoo,creative, agency, startup,onepage, clean, modern,business, company,it">
  
  <meta name="author" content="themefisher.com">

  <title>IndoSnakes</title>

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">

</head>


<body id="top-header">


    <!-- HERO
    ================================================== -->
    <section class="banner-area py-7">
        <!-- Content -->
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-md-12 col-lg-7 text-center text-lg-left">
                    <div class="main-banner">
                        <!-- Heading -->
                        <h1 class="display-4 mb-4 font-weight-normal">
                            IndoSnakes
                        </h1>

                        <!-- Subheading -->
                        <p class="lead mb-4" style="color: black;">
                           IndoSnakes Akan membantu anda untuk mencarikan informasi mengenai ular di Indonesia dan berbagai informasi mengenai ular.
                        </p>

                        <!-- Button -->
                        <p class="mb-0">
                            <a href="/tentang" target="_blank" class="btn btn-primary btn-circled">
                                Tentang Kita
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-5 d-none d-lg-block">
                    <div class="banner-img-block">
                        <img src="img/is3.png" alt="banner-img" class="img-fluid">
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>





    <!-- SERVICE-1
    ================================================== -->
    <section class="bg-grey" id="service">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4">
                    <div class="service-img">
                        <img src="img/kobra1.jpg" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6 pl-4">
                    <div class="service-content">
                        <h1>Mengenal Jenis-Jenis Ular Asli Indonesia</h1>
                        <p> Mengenali jenis-jenis ular yang merupakan hewan endemik idonesia dapat membantu kita dalam mengindetifikasi mereka jika bertemu ular.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 service-wrap">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 offset-lg-4">
                    <div class="carousel slide " id="service-carousel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="service-block media">
                                                <div class="service-icon">
                                                  <img src="img/berbisa.png" class="icon-berbisa">
                                                </div>
                                                <div class="service-inner-content media-body">
                                                    <a href="/berbisa" ><h4>Ular Berbisa</h4></a>
                                                    <p>Ular berbisa adalah ular yang menggunakan bisanya kepada pemangsa atau pihak-pihak yang mengusiknya untuk menghentikan mereka dan juga pertahanan diri.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="service-block media">
                                                <div class="service-icon">
                                                   <img src="img/biasa.png" class="icon-biasa">
                                                </div>
                                                <div class="service-inner-content media-body">
                                                    <a href="/biasa"><h4>Ular Tidak Berbisa</h4></a>
                                                    <p>Ular tidak berbisa umumnya ular yang memiliki bentuk pertahanan diri atau memangsa dengan cara mengigit dengan keras dan melilitnya.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <p class="pl-3"> <a href="#"> </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="section" id="process">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Penanganan Terhadap Ular
                        </h2>

                        <!-- Subheading -->
                        <p>
                           Penanganan yang bisa kalian jika ada atau terkena dampak dari ular.
                        </p>

                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="img/RSUD.png" alt="" class="img-fluid">

                        <a href="/rs"><h3>Rumah Sakit</h3></a>
                        <p>Daftar Rumah Sakit yang memiliki atau menyediakan fasilitas Serum Anti bisa ular.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="img/pertolongan1.png" alt="" class="img-fluid">

                        <a href="/tolong"><h3>Pertolongan Pertama</h3></a>
                        <p>Pertolongan Pertama apabila terkena gigitan ular.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="img/menangkap.png" alt="" class="img-fluid">

                        <a href="/menangkap"><h3>Cara Menangkap Ular </h3></a>
                        <p>Tahapan-tahapan menangkap ular yang aman dan tepat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="section" id="services-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title mb-2 text-white">
                            Ayo mulai mencari tahu!
                        </h2>

                        <!-- Subheading -->
                        <p class="mb-5 text-white">
                            IndoSnakes memiliki banyak pengetauan mengenai ular di Indonesia.
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div onclick="location.href='/tentang';" style="cursor: pointer;" class="col-lg-4 col-sm-6 col-md-6 mb-30">
                    <div class="web-service-block">
                        <img src="img/is1.png" >
                        <h3>Tentang IndoSnakes</h3>
                        <p>Apa dan siapa itu IndoSnakes?</p>
                    </div>
                </div>
               <div onclick="location.href='/berbisa';" style="cursor: pointer;" class="col-lg-4 col-sm-6 col-md-6 mb-30">
                    <div class="web-service-block">
                        <img src="img/berbisaputih.png">
                        <h3>Mengenal Jenis Ular Berbisa</h3>
                        <p>Kita harus waspada akan ular berbisan dimanapun berada karena bisa ular dapat membuat manusia mendapatkan dampak negatif hingga kematian.</p>
                    </div>
                </div>
                <div onclick="location.href='/biasa';" style="cursor: pointer;" class="col-lg-4 col-sm-6 col-md-6 mb-30">
                    <div class="web-service-block">
                        <img src="img/biasaputih.png">
                        <h3>Mengenal Jenis Ular Tidak Berbisa</h3>
                        <p>Walaupun ular tak berbisa tidak semembahayakan ular berbisa tetapi tetap saya ular ini memiliki cara lain yang dapat membahyakan kita.</p>
                    </div>
                </div>

                <div onclick="location.href='/rs';" style="cursor: pointer;" class="col-lg-4 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <img src="img/rs.png">
                        <h3>Serum Anti Bisa Ular</h3>
                        <p>Tidak semua rumah sakit menyediakan serum anti bisa ular.</p>
                    </div>
                </div>
                <div onclick="location.href='/tolong';" style="cursor: pointer;" class="col-lg-4 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <img src="img/p3k.png">
                        <h3>Pertolongan Pertama</h3>
                        <p>Pertolongan pertama yang kita bisa lakukan setelah tergigit atau terlilit ular.</p>
                    </div>
                </div>
                <div onclick="location.href='/menangkap';" style="cursor: pointer;" class="col-lg-4 col-sm-6 col-md-6 ">
                    <div class="web-service-block">
                        <img src="img/tangkap.png">
                        <h3>Cara Menangkap Ular</h3>
                        <p>Menangkap Ular tidak bisa sembarangan harus dengan tahapan dan cara yang tepat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="section" id="projects-wrap">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h1 class="text-white">IndoSnakes Akan berusaha Sebisa mungkin untuk memperberbarui informasi-informasi terupdate.</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="lead text-white">Kami siap untuk menyajikan update-update mengenai berita maupun informasi lainnya seputar ular-ular di Indonesia.<br>#INDOSNAKE</p>
                </div>
            </div>
        </div>
    </section>
 <footer class="section " id="footer">
        <div class="overlay footer-overlay"></div>
        <!--Content -->
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-4 col-sm-12">
                    <div class="footer-widget">
                        <!-- Brand -->
                        <a href="#" class="footer-brand text-white">
                            IndoSnakes
                        </a>
                        <p>Setiap Informasi berharga untuk anda. #INDOSNAKE</p>
                    </div>
                </div>

                
                <div class="col-lg-2 col-sm-6">
                    
                </div>
            </div> <!-- / .row -->


            <div class="row text-right pt-5">
                <div class="col-lg-12">
                    <!-- Copyright -->
                    <p class="footer-copy ">
                        &copy; Copyright <span class="current-year">IndoSnakes</span> All rights reserved.
                    </p>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </footer>



    <!-- 
    Essential Scripts
    =====================================-->



  </body>
  </html>
 @endsection