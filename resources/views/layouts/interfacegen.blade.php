<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('ptoo/images/icons/favicon.png')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('ptoo/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('ptoo/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('ptoo/fonts/themify/themify-icons.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('ptoo/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('ptoo/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('ptoo/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('ptoo/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('ptoo/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('ptoo/vendor/slick/slick.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('ptoo/vendor/lightbox2/css/lightbox.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('ptoo/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('ptoo/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body class="animsition">


<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="wrap-menu-header gradient1 trans-0-4">
        <div class="container h-full">
            <div class="wrap_header trans-0-3">
                <!-- Logo -->
                <div class="logo">
                    <a href="/">
                        <img src="{{asset('ptoo/images/SSP.PNG')}}" alt="IMG-LOGO" data-logofixed="{{asset('ptoo/images/SSP.PNG')}}">
                    </a>
                </div>

                <!-- Menu -->
                <div class="wrap_menu p-l-45 p-l-0-xl">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li>
                                <a href="/">ACCUEIL</a>
                            </li>

                            <li>
                                <a href="/about">À PROPOS DE NOUS</a>
                            </li>

                            <li>
                                <a href="/contact">CONTACTEZ-NOUS</a>
                            </li>


                            @if(session()->has('clientLogin'))
                                <li>
                                    <a href="/client">espace professionnel</a>
                                </li>
                            @else
                                <li>
                                    <a href="/login1">se connecter</a>
                                </li>
                            @endif



                        </ul>
                    </nav>
                </div>

                <!-- Social -->


                <button class="btn-show-sidebar m-l-33 trans-0-4"></button>

            </div>
        </div>
    </div>
</header>


<!-- Sidebar -->
<aside class="sidebar trans-0-4">
    <!-- Button Hide sidebar -->
    <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

    <!-- - -->
    <ul class="menu-sidebar p-t-95 p-b-70">
        <li class="t-center m-b-13">
            <a href="/" class="txt19">ACCUEIL</a>
        </li>



        <li class="t-center m-b-13">
            <a href="/about" class="txt19">À PROPOS DE NOUS</a>
        </li>


        <li class="t-center m-b-33">
            <a href="/contact" class="txt19">CONTACTEZ-NOUS</a>
        </li>
        @if(session()->has('clientLogin'))
            <li class="t-center">
                <!-- Button3 -->
                <a href="/client" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
                    espace professionnel
                </a>
            </li>
        @else
            <li class="t-center">
                <!-- Button3 -->
                <a href="/login1" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
                    se connecter
                </a>
            </li>
        @endif


    </ul>


    </div>
    </div>
</aside>
@yield('content')
<!-- Footer -->
<footer class="bg1">
    <div class="container p-t-40 p-b-70">
        <div class="row">
            <div class="col-sm-6 col-md-4 p-t-50">
                <!-- - -->
                <h4 class="txt13 m-b-33">
                    Contacter nous
                </h4>

                <ul class="m-b-70">
                    <li class="txt14 m-b-14">
                        <i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
                        Route de Gabes km 3 - 3042 - Tunisie
                    </li>

                    <li class="txt14 m-b-14">
                        <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
                        Telephone :(+216) 74 453 027

                    </li>
                    <li class="txt14 m-b-14">
                        <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>

                        Fax : (+216) 74 453 028
                    </li>
                    <li class="txt14 m-b-14">
                        <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
                        E-mail : securiteservices@tunet.tn<br> directeur@ssplus.tn
                    </li>

                </ul>

                <!-- - -->
                <h4 class="txt13 m-b-32">
                    Horaires d'ouverture
                </h4>

                <ul>
                    <li class="txt14">
                        09:30 AM – 11:00 PM
                    </li>

                    <li class="txt14">
                        Chaque jours
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-md-4 p-t-50">
                <!-- - -->
                <h4 class="txt13 m-b-33">
                    Événement
                </h4>
                <div class="m-b-25">

                    <ul class="txt15">
                     <!--   {{$event->P1}} -->
                    </ul>

                    <p class="txt14 m-b-18">
                      <!--  {{$event->P2}} -->

                    </p>

                    <span class="txt16">
						<!--	{{$event->P3}} -->
						</span>
                </div>

                <div class="m-b-25">

                    <ul class="txt15">
                       <!-- {{$event->P4}}-->
                    </ul>

                    <p class="txt14 m-b-18">
                      <!--  {{$event->P5}}-->

                    </p>

                    <span class="txt16">
						<!--	{{$event->P6}}-->
						</span>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 p-t-50">
                <!-- - -->
                <h4 class="txt13 m-b-38">
                    Gallery
                </h4>

                <!-- Gallery footer -->
                <div class="wrap-gallery-footer flex-w">
                    <a class="item-gallery-footer wrap-pic-w" href="{{asset('ptoo/images/1.jpg')}}" data-lightbox="gallery-footer">
                        <img src="{{asset('ptoo/images/1.jpg')}}" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="{{asset('ptoo/images/2.jpg')}}" data-lightbox="gallery-footer">
                        <img src="{{asset('ptoo/images/2.jpg')}}" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="{{asset('ptoo/images/3.jpg')}}" data-lightbox="gallery-footer">
                        <img src="{{asset('ptoo/images/3.jpg')}}" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="{{asset('ptoo/images/4.jpg')}}" data-lightbox="gallery-footer">
                        <img src="{{asset('ptoo/images/4.jpg')}}" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="{{asset('ptoo/images/5.jpg')}}" data-lightbox="gallery-footer">
                        <img src="{{asset('ptoo/images/5.jpg')}}" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="{{asset('ptoo/images/6.jpg')}}" data-lightbox="gallery-footer">
                        <img src="{{asset('ptoo/images/6.jpg')}}" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="{{asset('ptoo/images/7.jpg')}}" data-lightbox="gallery-footer">
                        <img src="{{asset('ptoo/images/7.jpg')}}" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="{{asset('ptoo/images/8.jpg')}}" data-lightbox="gallery-footer">
                        <img src="{{asset('ptoo/images/8.jpg')}}" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="{{asset('ptoo/images/8.jpg')}}" data-lightbox="gallery-footer">
                        <img src="{{asset('ptoo/images/9.jpg')}}" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="{{asset('ptoo/images/10.jpg')}}" data-lightbox="gallery-footer">
                        <img src="{{asset('ptoo/images/10.jpg')}}" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="{{asset('ptoo/images/11.jpg')}}" data-lightbox="gallery-footer">
                        <img src="{{asset('ptoo/images/11.jpg')}}" alt="GALLERY">
                    </a>

                    <a class="item-gallery-footer wrap-pic-w" href="{{asset('ptoo/images/12.jpg')}}" data-lightbox="gallery-footer">
                        <img src="{{asset('ptoo/images/12.jpg')}}" alt="GALLERY">
                    </a>
                </div>

            </div>
        </div>
    </div>


</footer>


<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>


<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('ptoo/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('ptoo/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('ptoo/vendor/bootstrap/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('ptoo/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('ptoo/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('ptoo/vendor/daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('ptoo/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('ptoo/vendor/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('ptoo/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('ptoo/vendor/parallax100/parallax100.js')}}"></script>
<script type="text/javascript">
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('ptoo/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('ptoo/vendor/lightbox2/js/lightbox.min.js')}}"></script>
<!--===============================================================================================-->

<script type="text/javascript" src="{{asset('ptoo/js/main.js')}}"></script>
</body>

</html>
