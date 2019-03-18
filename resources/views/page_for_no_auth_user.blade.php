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
    <title>Лаборатория нестандартных решений</title>
    <link rel="shortcut icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/all.css')}}" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<header>
    <nav id="header-menu" class="navbar navbar-expand-lg for-header-navbar navbar-light">
        <a class="navbar-brand" href="index.php">
            <img id="navbar-brand__logo__img" src="{{asset('images/page/logo/logo-LNR.svg')}}" alt="logo">
            <span class="header-menu__logo__text">Лаборатория нестандартных решений</span>
        </a>
        <button class="navbar-toggler navbar-toggler__border__color" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-lg-around" id="navbarNavAltMarkup" style>
            <nav class="navbar-nav text-center">
                <a class="header-menu__navbar__collapse__btn nav-item nav-link ml-2 mt-1" href="index.php">Главная</a>
                <a class="header-menu__navbar__collapse__btn nav-item nav-link ml-2 mt-1" href="src/pages/services.php">Услуги</a>
                <a class="header-menu__navbar__collapse__btn nav-item nav-link ml-2 mt-1" href="javascript:void(0);">Контакты</a>
                <a class="header-menu__navbar__collapse__btn nav-item nav-link ml-2 mt-1" href="javascript:void(0);">Подача заявы</a>
            </nav>
            <div class="header-menu__btn d-flex">
                <a href="src/pages/authorization.php" id="login" class="header-menu__btn__navbar__login">Войти</a>
                <a href="src/pages/registration.php" id="registation" class="header-menu__btn__navbar__registration">Регистрация</a>
            </div>
        </div>
    </nav>
</header>
<button id="btn-go__to__top" style="display: none;"><i class="fas fa-arrow-up"></i></button>
<div id="content" class="content">
    <div class="container">
        <div id="content-about-firm" class="row">
            <div class="content-about-firm__text__header col col-12 text-center">
                <h1>О фирме "Лаборатория нестандартных решений"</h1>
            </div>
            <div class="content-about-firm__us__image col-md-3 col-sm-4 text-center mb-2 align-self-center">
                <img src="{{asset('images/main_content/image__about__us_cr.jpg')}}" alt="img_about_us" title="О фирме">
            </div>
            <div class="content-about-firm__text__paragraph align-self-center col col-md-9 col-sm-8">
                <p class="p-3">Наша фирма занимается установкой систем видеонаблюдения, монтаж охранных систем и сигнализации
                    как со сдачей на пульт охраны так и автономные, установка систем контроля
                    доступа для организации контрольно-пропускного режима на любых объектах, установка домофонов,
                    видеодомофонов, построение и монтаж телефонных и компьютерных сетей, установка офисных
                    АТС любой конфигурации, оказание услуг по обслуживанию систем видеонаблюдения, охранных систем, и многое другое.
                </p>
            </div>
        </div>
        <div id="content-services" class="row justify-content-around">
            <div class="content-services__text__header text-center text-uppercase col-12 mt-sm-3 mb-sm-2">
                <h3 class="mb-lg-3 py-md-2 px-3 font-weight-bold">наши услуги</h3>
            </div>
            <div class="content-services__info__block col-xl-2 my-2 py-md-3">
                <div class="row justify-content-center align-items-center text-center">
                    <div class="content-services-info-block__text col-lg-12">Установка Систем Видеонаблюдения</div>
                    <div class="col-lg-12 content-services-info-block__image">
                        <img src="{{asset('images/main_content/services/light_theme/video_camera/video_camera.png')}}" alt="video_camera">
                    </div>
                    <p class="content-services-info-block__paragraph col-lg-12">На сегодняшний день системы видеонаблюдения – важная часть
                        повседневной жизни каждого человека.</p>
                    <a class="content-services-info-block__btn__read__more" href="javascript:void(0);">Подробнее</a>
                </div>
            </div>
            <div class="content-services__info__block col-xl-2 my-2 py-md-3">
                <div class="row justify-content-center text-center align-items-center">
                    <div class="col col-lg-12 content-services-info-block__image">
                        <img src="{{asset('images/main_content/services/light_theme/security_alarm/security_light.png')}}"
                             alt="security">
                    </div>
                    <div class="content-services-info-block__text col col-lg-12">Охранная Система, Сигнализация</div>
                    <p class="content-services-info-block__paragraph col-lg-12">Современная охранная
                        система играют очень значительную роль в жизни людей. лагодаря ей можно не беспокоиться за свою безопасность
                        и безопасность своих близких, а также за сохранность ценностей. </p>
                    <a class="content-services-info-block__btn__read__more" href="javascript:void(0);">Подробнее</a>
                </div>
            </div>
            <div class="content-services__info__block col-xl-2 my-2 py-md-3">
                <div class="row justify-content-center text-center align-items-center">
                    <div class="col col-lg-12 content-services-info-block__image">
                        <img src="{{asset('images/main_content/services/light_theme/automatic_telephone_station/ats_light.png')}}" alt="ats">
                    </div>
                    <div class="content-services-info-block__text col col-lg-12">
                        Установка Мини-АТС
                    </div>
                    <p class="content-services-info-block__paragraph col-lg-12">На сегодняшний день системы видеонаблюдения – важная часть
                        повседневной жизни каждого человека.</p>
                    <a class="content-services-info-block__btn__read__more" href="javascript:void(0);">Подробнее</a>
                </div>
            </div>
            <div class="content-services__info__block col-xl-2 my-2 py-md-3">
                <div class="row justify-content-center text-center align-items-center">
                    <div class="col col-lg-12 content-services-info-block__image">
                        <img src="{{asset('images/main_content/services/light_theme/access_control_system/ASC_light.png')}}" alt="ASC">
                    </div>
                    <div class="content-services-info-block__text col-lg-12">
                        Установка Систем Контроля Доступа
                    </div>
                    <p class="content-services-info-block__paragraph col-lg-12">Система контроля доступом (СКУД), представляет собой невероятно
                        эффективную защиту от проникновения на тот или иной объект (помещение) посторонних лиц. </p>
                    <a class="content-services-info-block__btn__read__more" href="javascript:void(0);">Подробнее</a>
                </div>
            </div>
            <div class="content-services__info__block col-xl-2 my-2 py-md-3">
                <div class="row justify-content-center text-center align-items-center">
                    <div class="col col-lg-12 content-services-info-block__image">
                        <img src="{{asset('/images/main_content/services/light_theme/video_intercom/video_intercom_light.png')}}" alt="video_intercom">
                    </div>
                    <div class="content-services-info-block__text col-lg-12">
                        Установка Домофонных Систем
                    </div>
                    <p class="content-services-info-block__paragraph col-lg-12">Если подъезд дома или офиса не охраняется, рано или поздно это повлечет за собой неприятности.
                        Домофонные системы призваны обезопасить людей от проникновения злоумышленников.</p>
                    <a class="content-services-info-block__btn__read__more" href="javascript:void(0);">Подробнее</a>
                </div>
            </div>
        </div>
        <div id="content-team-card" class="row my-sm-3 justify-content-around">
            <div class="content-team-card__header col-12 text-center text-uppercase mt-5 mb-sm-3">
                <h3 class="py-md-2 px-3 font-weight-bold">Наша команда</h3>
            </div>
            <div class="content-team-card__block col-lg-3 col-sm-5 my-1 text-center animated fadeInUp">
                <div class="row">
                    <div class="col-12 content-team-card__block__image">
                        <img src="{{asset('images/main_content/img_no_photo/no_photo.png')}}" alt="no_photo">
                    </div>
                    <div class="col-12 content-team-card__block__text__in__paragraph">
                        <p class="content-team-card__block__text__in__paragraph__NSP">
                            Фамилия Имя
                        </p>
                        <p class="content-team-card__block__text__in__paragraph__position">Занимается тем то тем то, бла, бла,бла,бла,бла.</p>
                    </div>
                </div>
            </div>
            <div class="content-team-card__block col-lg-3 col-sm-5 my-1 text-center animated fadeInUp">
                <div class="row">
                    <div class="col-12 content-team-card__block__image">
                        <img src="{{asset('images/main_content/img_no_photo/no_photo.png')}}" alt="no_photo">
                    </div>
                    <div class=" col-12 content-team-card__block__text__in__paragraph">
                        <p class="content-team-card__block__text__in__paragraph__NSP">
                            Фамилия Имя
                        </p>
                        <p class="content-team-card__block__text__in__paragraph__position">Занимается тем то тем то, бла, бла,бла,бла,бла.</p>
                    </div>
                </div>
            </div>
            <div class="content-team-card__block col-lg-3 col-md-6 my-1 text-center animated fadeInUp">
                <div class="row">
                    <div class="col-12 content-team-card__block__image">
                        <img src="{{asset('images/main_content/img_no_photo/no_photo.png')}}" alt="no_photo">
                    </div>
                    <div class="col-12 content-team-card__block__text__in__paragraph">
                        <p class="content-team-card__block__text__in__paragraph__NSP">
                            Фамилия Имя
                        </p>
                        <p class="content-team-card__block__text__in__paragraph__position">Занимается тем то тем то, бла, бла,бла,бла,бла.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 content-advantages__block__image">
        <div class="content-advantages__block__background__image col-12">
            <div id="content-advantages-block" class="row text-center">
                <div class="col-12 mt-5 mb-sm-3 content-advantages-block__header">
                    <h2 class="d-inline py-2 px-3 font-weight-bold">Преимущества</h2>
                </div>
                <div class="col-md-3 col-sm-6 content-advantages-block__experience mb-sm-5">
                    <img src="{{asset('images/main_content/advantages/advantages_10_year.png')}}" alt="experience">
                    <h2>10 лет</h2>
                    <p>На рынке!</p>
                </div>
                <div class="col-md-3 col-sm-6 content-advantages-block__objects mb-sm-5">
                    <img src="{{asset('images/main_content/advantages/advantages_objects.png')}}" alt="http://www.freepik.com/terms_of_use">
                    <h2>500</h2>
                    <p>Объектов!</p>
                </div>
                <div class="col-md-3 col-sm-6 content-advantages-block__quality mb-sm-5">
                    <img src="{{asset('images/main_content/advantages/advantages_quality.png')}}" alt="quality">
                    <h2>Высокое</h2>
                    <p>Качество работ!</p>
                </div>
                <div class="col-md-3 col-sm-6 content-advantages-block__progress mb-sm-5">
                    <img src="{{asset('images/main_content/advantages/advantages__progress.png')}}" alt="progress">
                    <h2>Развитие</h2>
                    <p>Современые технологии!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-sm-3 mb-sm-4">
    <div class="row">
        <div class="col-sm-8 block-comments__header__text">
            <h2 class="pl-4">Оставьте свой комментарий</h2>
        </div>
        <div class="col-sm-4 text-sm-right block-comments__btn__login">
            <a href="src/pages/authorization.php" id="block-comments__btn__login" >Войти</a>
        </div>
    </div>
    <hr>
    <div id="form-comments" class="row">
        <div class="col-lg-12">
            <form action="javascript:void(0);" method="post" id="form-comment-user">
                <div class="form-comment-user__name form-group">
                    <label for="formGroupExampleInput">Введите ваше имя (пвседоним)</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Имя пользователя">
                </div>
                <div class="form-comment-user__text form-group">
                    <label for="exampleFormControlTextarea">Напишите отзыв</label>
                    <textarea class="form-control" name="user__text" id="exampleFormControlTextarea"
                              rows="3" placeholder="Ваш комментарий"></textarea>
                </div>
                <div class="form-group">
                    <div class="col-lg-12 mt-3">
                        <button type="submit" class="form-comment__btn__submit btn">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="public-user-comment" class="row">
        <div class="public-user-comment__header__text col-12">
            <h4 class="pl-4">Коментарии</h4>
            <hr>
        </div>
        <div class="col-12 text-center">
            <p class="text-muted">Прокомментируйте первым!</p>
        </div>
    </div>
</div>
<footer id="footer" class="footer border-top text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-sm-12 mb-sm-3 mt-sm-3 footer-menu__block__nav">
                <ul class="nav justify-content-center flex-column flex-sm-row">
                    <li class="footer-menu__nav__item__color__text nav-item">
                        <a class="nav-link" href="index.php">Главная</a>
                    </li>
                    <li class="footer-menu__nav__item__color__text nav-item">
                        <a class="nav-link" href="javascript:void(0);">Услуги</a>
                    </li>
                    <li class="footer-menu__nav__item__color__text nav-item">
                        <a class="nav-link" href="javascript:void(0);">Контакты</a>
                    </li>
                    <li class="footer-menu__nav__item__color__text nav-item">
                        <a class="nav-link" href="javascript:void(0);">Подача заявы</a>
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
                        <li class="list-group-item footer-block-contact-us-list-group__link"><a href="mailto:lnr@online.ua">lnr@online.ua</a></li>
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
<script type="application/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="application/javascript" src="{{asset('js/app.js')}}"></script>
<script type="application/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>