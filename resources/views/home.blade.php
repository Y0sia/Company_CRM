@extends('layouts.company_crm')
@section('title') Home @endsection
@section('content')
    <div class="container">
        <div class="main__list-company col-md-12 col-sm-12 col-12">
            <div class="row">
                @if($company)
                    @foreach($company as $item)
                <div class="main__list-company__item col-md-4 col-sm-4 col-12">
                    <h2 class="main__list-company__title">
                        <a href="{{ $item->alias }}">{{ $item->title }}</a>
                    </h2>
                    <span class="main__list-company__description">{{ $item->description }}</span>
                </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="add-company col-md-12 col-sm-12 col-12">
                <div class="add-company__button">
                    <button class="btn btn-info"><span id="add-company-span">Добавить компанию</span></button>
                </div>
                <form class="add-company__form" action="#" method="post">
                    <div class="add-company__form__unput">
                        <ul class="add-company__form__menu">
                            <li>
                                <input type="text" class="form-control" placeholder="Название компании">
                            </li>
                            <li>
                                <input type="text" class="form-control" placeholder="Инн">
                            </li>
                            <li>
                                <input type="text" class="form-control" placeholder="О компании">
                            </li>
                            <li>
                                <input type="text" class="form-control" placeholder="ФИО генерального директора">
                            </li>
                            <li>
                                <input type="text" class="form-control" placeholder="Адрес">
                            </li>
                            <li>
                                <input type="tel" class="form-control" placeholder="Телефон">
                            </li>
                        </ul>
                    </div>
                    <div class="add-company__form__button">
                        <button class="btn btn-success" type="submit" name="company_submit"><span>Добавить</span></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <!-- 				<div class="main__no-register-message col-md-12">
                                <h3><a href="#">Зарегистрируйтесь</a> для добавления комментариев</h3>
                            </div>
                        </div> -->
        </div>
@endsection
