<!doctype html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="Установка охранной системы сигнализации,
           видеонеблюдение, мини АТС, видеодомофоны, система контроля доступа!">
    <title>{{$titles}}</title>
    <link rel="shortcut icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<header>
    <nav id="header-menu" class="navbar navbar-expand-lg for-header-navbar navbar-light">
        <a class="navbar-brand" href="{{url('/')}}">
            <img id="navbar-brand__logo__img" src="{{asset('images/page/logo/logo-LNR.svg')}}" alt="logo">
            <span class="header-menu__logo__text">Лаборатория нестандартных решений</span>
        </a>
        <button class="navbar-toggler navbar-toggler__border__color" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-lg-around" id="navbarNavAltMarkup" style>
            <nav class="navbar-nav text-center">
                <a class="header-menu__navbar__collapse__btn nav-item nav-link ml-2 mt-1" href="{{url('/')}}"><i class="fas fa-home"></i> Главная</a>
                <a class="header-menu__navbar__collapse__btn nav-item nav-link ml-2 mt-1" href="{{url('services')}}"><i class="fas fa-cog"></i> Услуги</a>
                <a class="header-menu__navbar__collapse__btn nav-item nav-link ml-2 mt-1" href="{{url('contacts')}}"><i class="far fa-address-book"></i> Контакты</a>
                <a class="header-menu__navbar__collapse__btn nav-item nav-link ml-2 mt-1" href="{{url('request')}}"><i class="fas fa-scroll"></i> Подача заявы</a>
            </nav>
            <div class="header-menu__btn d-flex">
                <a href="{{url('auth/login')}}" id="login" class="header-menu__btn__navbar__login">Войти</a>
                <a href="{{url('auth/registration')}}" id="registration" class="header-menu__btn__navbar__registration">Регистрация</a>
            </div>
        </div>
    </nav>
</header>
<button id="btn-go__to__top" style="display: none;"><i class="fas fa-arrow-up"></i></button>

    @yield('main_content')
    @yield('services_content')
    @yield('request_content')
    @yield('contact_content')
<footer id="footer" class="footer border-top text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-sm-12 mb-sm-3 mt-sm-3 footer-menu__block__nav">
                <ul class="nav justify-content-center flex-column flex-sm-row">
                    <li class="footer-menu__nav__item__color__text nav-item">
                        <a class="nav-link" href="{{url('/')}}">Главная</a>
                    </li>
                    <li class="footer-menu__nav__item__color__text nav-item">
                        <a class="nav-link" href="{{url('services')}}">Услуги</a>
                    </li>
                    <li class="footer-menu__nav__item__color__text nav-item">
                        <a class="nav-link" href="{{url('contacts')}}">Контакты</a>
                    </li>
                    <li class="footer-menu__nav__item__color__text nav-item">
                        <a class="nav-link" href="{{url('request')}}">Подача заявы</a>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="col-lg-12 footer-block__social__icons mb-sm-2">
                    <div class="row justify-content-center footer-block-social-icons__btn">
                        <div class="col col-lg-1 col-md-2">
                            <a href="javascript:void(0);" class="footer-block-social-icons__btn__viber position-relative" target="_blank" rel="noopener"><i class="fab fa-viber"></i></a>
                        </div>
                        <div class="col col-lg-1 col-md-2">
                            <a href="https://www.facebook.com/lnr7042929" class="footer-block-social-icons__btn__facebook position-relative" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
                        </div>
                        <div class="col col-lg-1 col-md-2">
                            <a href="javascript:void(0);" class="footer-block-social-icons__btn__instagram position-relative" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-12 footer-block__contact__us mb-sm-3">
                    <h3 class="footer-block-contact-us__header__text">Свяжитесь с нами:</h3>
                    <ul class="list-group footer-block-contact-us__list__group">
                        <li class="list-group-item footer-block-contact-us-list-group__link"><a href="mailto:ln12r@online.ua">ln12r@online.ua</a></li>
                        <li class="list-group-item footer-block-contact-us-list-group__link"><a href="tel:+380912330113">+38(091) 233 01 13</a></li>
                        <li class="list-group-item footer-block-contact-us-list-group__link"><a href="tel:+380912530112">+38(091) 253 01 12</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <p class="footer-block__text__in__down m-0 py-sm-4">© 2019 Лаборатория нестандартных решений</p>
                <!-- Place this tag where you want the button to render. -->
                <!--<a class="github-button" href="https://github.com/FireRipper/Qiwi-pizza-with-BS4" data-show-count="true" aria-label="Star FireRipper/Qiwi-pizza-with-BS4 on GitHub">Star</a>-->
            </div>
        </div>
    </div>
</footer>
<script type="application/javascript" src="{{asset('js/app.js')}}"></script>
<script type="application/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>