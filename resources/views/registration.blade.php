@extends('layouts.sign')

@section('registration_content')
<div class="container">
    <div class="row justify-content-center vh-100 align-items-center">
        <div class="col col-lg-10 col-md-10">
            <form class="form-registration needs-validation position-relative" action="javascript:void(0);" method="post" novalidate>
                <div class="form-registration__bg__image"></div>
                <div class="form-registration__header text-uppercase pb-3"><h2>регистрация</h2></div>
                <div class="form-row">
                    <div class="form-group col-lg-4">
                        <label class="form-registration__text__label__bluer" for="exampleInputName">Введите имя</label>
                        <input id="form-registration__name" type="user_name" class="form-control form-control__color__shadow__bluer" id="inputName"
                               placeholder="Имя" pattern="[а-яА-ЯёЁ, a-zA-Z]{2,64}" required>
                        <div class="invalid-feedback">
                            Введите имя, используя русские или латинские буквы!
                        </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <label class="form-registration__text__label__bluer" for="exampleInputSurname">Введите фамилию</label>
                        <input type="user_surname" class="form-control form-control__color__shadow__bluer" id="inputSurname"
                               placeholder="Фамилия" pattern="[а-яА-ЯёЁ, a-zA-Z]{2,64}" required>
                        <div class="invalid-feedback">
                            Введите фамилию, используя русские или латинские буквы!
                        </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <label class="form-registration__text__label__bluer" for="exampleInputPatronymic">Введите отчество</label>
                        <input type="user_patronymic" class="form-control form-control__color__shadow__bluer" id="inputPatronymic"
                               placeholder="Отчество" pattern="[а-яА-ЯёЁ, a-zA-Z]{2,64}" required>
                        <div class="invalid-feedback">
                            Введите отчество, используя русские или латинские буквы!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-12">
                        <label class="form-registration__text__label__bluer" for="exampleInputEmail">E-mail</label>
                        <input type="user_email" class="form-control form-control__color__shadow__bluer" id="inputEmail"
                               placeholder="E-mail" name="f[e-mail]" required>
                        <div class="invalid-feedback">
                            Введите Ваш e-mail, например, example@gmail.com (.ru, .ua и т.д.)!
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="form-registration__text__label__bluer" for="exampleInputPassword">Придумайте пароль</label>
                        <input type="password" class="form-control form-control__color__shadow__bluer" name="password" id="mypass"
                               placeholder="Придумайте пароль" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" maxlength="25"
                               aria-describedby="passwordHelpBlock" required>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            Ваш пароль должен быть длиной 8-20 символов, содержать буквы и цифры и не должен содержать пробелов, специальных символов или смайликов.
                        </small>
                        <div class="invalid-feedback">
                            Пароль должен содержать большие буквы (A-Z), прописные (a-z) и цифры (1,2,3...)
                        </div>
                    </div>

                    <div class="form-group col-lg-6">
                        <label class="  form-registration__text__label__bluer" for="exampleInputVerification">Повторите пароль</label>
                        <input type="password" class="form-control form-control__color__shadow__bluer" name="verification_password" id="inputVerification"
                               placeholder="Повторите пароль" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" maxlength="25" required>
                        <div class="invalid-feedback">
                            Повторите правильно пароль!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-12 text-lg-right mt-3">
                        <button type="submit" class=" form-registration__btn__submit btn px-lg-5">Зарегистрироваться</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    @endsection