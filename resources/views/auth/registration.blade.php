@extends('layouts.sign')

@section('registration_content')
    <div class="container">
        <div class="row justify-content-center vh-100 align-items-center">
            <div class="col col-lg-10 col-md-10">
                <form class="form-registration needs-validation position-relative" action="{{ route('register') }}"
                      method="POST" novalidate>
                    {{ csrf_field() }}
                    <div class="form-registration__bg__image"></div>
                    <div class="form-row pb-4">
                        <div class="col-6 form-registration__btn__link__login"><a
                                    href="{{ url('auth/login') }}">Вход</a></div>
                        <div class="col-6 form-registration__header text-uppercase"><h2>регистрация</h2></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-4">
                            <label class="form-registration__text__label__bluer" for="exampleInputName">Введите
                                имя</label>
                            <input id="form-registration__name" type="text" name="first_name"
                                   class="form-registration-authorization__style__input form-control form-control__color__shadow__bluer"
                                   placeholder="Имя" {{--pattern="[а-яА-ЯёЁ, a-zA-Z]{2,64}" required--}}>
                            <div class="invalid-feedback">
                                Введите имя, используя русские или латинские буквы!
                            </div>
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="form-registration__text__label__bluer" for="exampleInputSurname">Введите
                                фамилию</label>
                            <input type="text" name="middle_name"
                                   class="form-registration-authorization__style__input form-control form-control__color__shadow__bluer"
                                   placeholder="Фамилия" {{--pattern="[а-яА-ЯёЁ, a-zA-Z]{2,64}" required--}}>
                            <div class="invalid-feedback">
                                Введите фамилию, используя русские или латинские буквы!
                            </div>
                        </div>
                        <div class="form-group col-lg-4">
                            <label class="form-registration__text__label__bluer" for="exampleInputPatronymic">Введите
                                отчество</label>
                            <input type="text" name="last_name"
                                   class="form-registration-authorization__style__input form-control form-control__color__shadow__bluer"
                                   placeholder="Отчество" {{--pattern="[а-яА-ЯёЁ, a-zA-Z]{2,64}" required--}}>
                            <div class="invalid-feedback">
                                Введите отчество, используя русские или латинские буквы!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <label class="form-registration__text__label__bluer" for="exampleInputEmail">E-mail</label>
                            <input id="email" type="email"
                                   class="form-registration-authorization__style__input form-control form-control__color__shadow__bluer"
                                   placeholder="E-mail" name="email" {{--required--}}>
                            <div class="invalid-feedback">
                                Введите Ваш e-mail, например, example@gmail.com (.ru, .ua и т.д.)!
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="form-registration__text__label__bluer" for="exampleInputPassword">Придумайте
                                пароль</label>
                            <input id="password" type="password"
                                   class="form-registration-authorization__style__input form-control form-control__color__shadow__bluer"
                                   name="password"
                                   placeholder="Придумайте пароль"
                                   {{--pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" maxlength="25"--}}
                                   aria-describedby="passwordHelpBlock" required>
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Ваш пароль должен быть длиной 8-20 символов, содержать буквы и цифры и не должен
                                содержать пробелов, специальных символов или смайликов.
                            </small>
                            <div class="invalid-feedback">
                                Пароль должен содержать большие буквы (A-Z), прописные (a-z) и цифры (1,2,3...)
                            </div>
                        </div>

                        <div class="form-group col-lg-6">
                            <label class="form-registration__text__label__bluer" for="confirm_password">Повторите
                                пароль</label>
                            <input type="password"
                                   class="form-registration-authorization__style__input form-control form-control__color__shadow__bluer"
                                   name="password_confirmation" id="confirm_password"
                                   placeholder="Повторите пароль"
                                   {{--pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" maxlength="25"--}} required>
                            <div class="invalid-feedback">
                                Пароли не совпадают!!!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12 text-lg-right mt-3">
                            <button id="form-registration-submit" type="submit"
                                    class=" form-registration__btn__submit btn px-lg-5">Зарегистрироваться
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection