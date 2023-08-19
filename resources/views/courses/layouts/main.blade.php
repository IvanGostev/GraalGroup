<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GRAAL GROUP</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Mentor
    * Updated: Jul 27 2023 with Bootstrap v5.3.1
    * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/">
                <img src="{{asset('assets/img/logo.png')}}" alt="">
            </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->


        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="active" href="{{ route('main') }}">Главная страница</a></li>

                <li><a href="{{ route('course.main.index') }}">Курсы</a></li>
                @if (auth()->user() )
                <li><a href="{{ route('teach.course.index') }}">Преподавание</a></li>
                <li><a href="{{ route('course.my.index') }}">Моё обучение</a></li>
                <li class="dropdown"><a href="#"><span>Мой профиль</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('profile.main.show', auth()->user()->id) }}">Перейти</a></li>
                        <li><a href="{{ route('profile.main.edit', auth()->user()->id) }}">Редактировать</a></li>
                        @if (auth()->user()->role == 1)
                        <li><a href="{{ route('admin.user.index') }}">Админ панель</a></li>
                        @endif
                    </ul>
                </li>
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <input class="btn get-started-btn" type="submit" value="Выйти">
                    </form>
                @else
                     <a href="{{ url('/login') }}" class="get-started-btn">Войти</a>

                @endauth
            </div>
        @endif

    </div>
</header><!-- End Header -->
    @yield('content')
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>GRAAL GROUP</h3>
                    <p>

                        Москва <br><br>
                        <strong>Телефон:</strong> +1 5589 55488 55<br>
                        <strong>Почта:</strong> info@example.com<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Сервисы</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Главная страница</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Курсы</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Моё обучение</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Мой профиль</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Настройки</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Сервисы</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Вход</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Регистрация</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Мой профиль</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Настройки</a></li>
                    </ul>
                </div>
{{--                <div class="col-lg-3 col-md-6 footer-links">--}}
{{--                    <h4>Our Services</h4>--}}
{{--                    <ul>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>--}}
{{--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Форма</h4>
                    <p>Подпишись на наши уведомление</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Подписаться">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>GRAAL GROUP</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src='{{asset("assets/vendor/purecounter/purecounter_vanilla.js")}}'></script>
<script src='{{asset("assets/vendor/aos/aos.js")}}'></script>
<script src='{{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}'></script>
<script src='{{asset("assets/vendor/swiper/swiper-bundle.min.js")}}'></script>
<script src='{{asset("assets/vendor/php-email-form/validate.js")}}'></script>

<!-- Template Main JS File -->
<script src='{{asset("assets/js/main.js")}}'></script>

</body>

</html>

