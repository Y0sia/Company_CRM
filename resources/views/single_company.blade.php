@extends('single_company')
@section('Title') Название компании @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="company col-md-12">
                <div class="company__info">
                    <div class="company__info__title">
                        <span><b>Название компании</b></span>
                    </div>
                    <div class="company__info__desc">
                        <p>text text text</p>
                    </div>
                    <div class="company__info__inn">
                        <span>ИНН: 1234567890</span>
                    </div>
                    <div class="company__info__director">
                        <span>ФИО директора: Ivan Ivanych</span>
                    </div>
                    <div class="company__info__address">
                        <span>Местоположение: sankt-petersburg</span>
                    </div>
                    <div class="company__info__telephone">
                        <span>Телефон: 8 912 123 45 67</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="comment col-md-12">
                <div class="comment__open-closed">
                    <div class="row">
                        <div class="comment__open-closed__plus-minus col-md-3 col-sm-3 col-3">
                            <span id="plus"> + </span><span id="minus"> - </span>
                        </div>
                        <div class="comment__open-closed__number col-md-9 col-sm-9 col-9">
                            <span>Всего заметок: 25</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form class="comment__form" action="#" method="post">
                        <div class="row">
                            <div class="comment__form__title col-md-12 col-sm-12 col-12">
                                <h4>Оставить заметку на:</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="comment__form__button col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="comment_radio" id="gridRadios1" value="name">
                                    <label class="form-check-label" for="exampleRadios1">Название компании</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="comment_radio" id="gridRadios2" value="inn">
                                    <label class="form-check-label" for="exampleRadios2">Инн</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="comment_radio" id="gridRadios3" value="about">
                                    <label class="form-check-label" for="exampleRadios3">Общую информацию</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="comment_radio" id="gridRadios4" value="general">
                                    <label class="form-check-label" for="exampleRadios4">Генерального директора</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="comment_radio" id="gridRadios5" value="address">
                                    <label class="form-check-label" for="exampleRadios5">Адрес</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="comment_radio" id="gridRadios6" value="phone">
                                    <label class="form-check-label" for="exampleRadios6">Телефон</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="comment_radio" id="gridRadios7" value="company" checked>
                                    <label class="form-check-label" for="exampleRadios7">Компанию (в целом)</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="comment__form__add col-md-12">
                                <div class="row">
                                    <div class="form-group comment__form__add__text col-md-12">
                                        <label for="exampleFormControlTextarea1 comment__form__add__text">Заметки</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="comment__form__add__button col-md-3">
                                        <button type="submit" name="comment_submit" class="btn btn-success">Отправить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="reviews col-md-12">
                <div class="row">
                    <div class="reviews__title col-md-2">
                        <h4>Заметки:</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="reviews__area col-md-12">
                        <div class="row">
                            <div class="reviews__user col-md-1">
                                <span>User</span>
                            </div>
                            <div class="reviews__time col-md-2">
                                <span>08-01-2001</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="reviews__text col-md-12">
                                <p>text text text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 			<div class="row">
                        <div class="main__no-register-message col-md-12">
                            <h3><a href="#">Зарегистрируйтесь</a> для оставления индивидуальных заметок</h3>
                        </div>
                    </div> -->
    </div>
@endsection
