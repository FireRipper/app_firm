@extends('layouts.sign')

@section('login_content')
<div class="container">
    <div class="row justify-content-center vh-100 align-items-center">
        <div class="col col-lg-5 col-md-6">
            <form class="form-authorization needs-validation position-relative" action="javascript:void(0);" method="post" novalidate>
                <div class="form-authorization__bg__image"></div>
                <div class="form-authorization__header text-uppercase pb-3"><h2>авторизация</h2></div>
                <div class="form-group col-lg-12">
                    <label class="form-authorization__text__label__bluer" for="exampleInputEmail">Введите логин</label>
                    <input id="form-authorization__user__email" type="user_email" class="form-control form-control__color__shadow__bluer" id="inputEmail"
                           placeholder="Логин" name="f[e-mail]" required>
                </div>
                <div class="form-group col-lg-12">
                    <label class="form-authorization__text__label__bluer" for="exampleInputPassword">Введите пароль</label>
                    <input type="password" class="form-control form-control__color__shadow__lighter" name="password" id="mypass"
                           placeholder="Пароль" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" maxlength="25" required>
                </div>
                <div class="form-row">
                    <div class="col-lg-12 mt-3 text-center">
                        <button type="submit" class=" form-authorization__btn__submit btn px-lg-5">Авторизироваться</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection