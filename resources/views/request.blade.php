@extends('layouts.main')

@section('request_content')
    <div id="content" class="mt-3 mb-3">
        <div class="container">
            <div id="request-content" class="row justify-content-center shadow-sm">
                <h1 class="request-content-header-h1 col-12 mt-4 mb-sm-5 mb-3">Процедура подачи заявления на получение
                    услуг</h1>
                <p class="request-content__text col-11 text-danger rounded d-flex justify-content-around align-items-center">
                    Для того что бы отправить заявление Вам нужно зарегистрироваться или
                    войти (если Вы уже зарегистрированы)!<a href="{{ url('auth/login') }}"
                                                            class="request-content__link__auth rounded">Войти</a></p>
                <div class="col-sm-3 request-content__block__for__image__man__write__request mt-sm-5 mb-sm-5 d-flex align-items-center">
                    <div class="request-content__image__man__write__request"></div>
                </div>
                <div class="col-sm-9 mt-sm-5 mt-3">
                    <h3 class="request-content__h3"> Для того что бы подать заявление, нужно заполниит форму ниже! </h3>
                    <p class="request-content__what__do__p">Что вам нужно сделать:</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item request-content__what__do__li">➀ Заполните поля имя, фамилия,
                            отчество - данные поля отображают ваши данные получателю заявления.
                        </li>
                        <li class="list-group-item request-content__what__do__li">➁ Выберите услугу из списка - данное
                            поля отображают услугу которую вы выюрали получателю заявления.
                        </li>
                        <li class="list-group-item request-content__what__do__li">➂ Заполните поле "Техническое
                            задание" - расскажите вообщем что бы Вы хотели сделать на объекте,
                            укажите место нахождение (где необходимо проводить работы),
                            укажите желаемый срок в днях.
                        </li>
                    </ul>
                </div>
                <h3 class="col-12 text-center request-content__h3__request mt-2 mb-3"><i class="fas fa-paperclip"></i>
                    Заява</h3>
                <div class="col-md-8 rounded shadow-lg mb-sm-5 request-content__form">
                    <form id="request-content__form__request" action="javascript:void(0)">
                        <div class="form-row mt-4">
                            <div class="form-group col-lg-4">
                                <label class="form-request__text__label__bluer" for="exampleInputName">Введите
                                    имя</label>
                                <input id="form-request__name" type="text" name="first_name"
                                       class="form-request__style__input form-control form-control__color__shadow__bluer"
                                       placeholder="Имя" {{--pattern="[а-яА-ЯёЁ, a-zA-Z]{2,64}" required--}}>
                                <div class="invalid-feedback">
                                    Введите имя, используя русские или латинские буквы!
                                </div>
                            </div>
                            <div class="form-group col-lg-4">
                                <label class="form-request__text__label__bluer" for="exampleInputSurname">Введите
                                    фамилию</label>
                                <input type="text" name="middle_name"
                                       class="form-request__style__input form-control form-control__color__shadow__bluer"
                                       placeholder="Фамилия" {{--pattern="[а-яА-ЯёЁ, a-zA-Z]{2,64}" required--}}>
                                <div class="invalid-feedback">
                                    Введите фамилию, используя русские или латинские буквы!
                                </div>
                            </div>
                            <div class="form-group col-lg-4">
                                <label class="form-request__text__label__bluer" for="exampleInputPatronymic">Введите
                                    отчество</label>
                                <input type="text" name="last_name"
                                       class="form-request__style__input form-control form-control__color__shadow__bluer"
                                       placeholder="Отчество" {{--pattern="[а-яА-ЯёЁ, a-zA-Z]{2,64}" required--}}>
                                <div class="invalid-feedback">
                                    Введите отчество, используя русские или латинские буквы!
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputServices" class="form-request__text__label__bluer">Выберите услугу из
                                списка</label>
                            <select id="inputServices" class="form-request form-control form-request__style__input">
                                <option selected>Выберите...</option>
                                <option>Установка Систем Видеонаблюдения</option>
                                <option>Охранная Система, Сигнализация</option>
                                <option>Установка Мини-АТС</option>
                                <option>Установка Систем Контроля Доступа</option>
                                <option>Установка Домофонных Систем</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-request__text__label__bluer">Техническое
                                задание</label>
                            <textarea class="form-control form-request__style__input" id="exampleFormControlTextarea1"
                                      rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 text-lg-right mt-3">
                                <button id="form-registration-submit" type="submit"
                                        class=" form-registration__btn__submit btn px-lg-5">Отправить
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection