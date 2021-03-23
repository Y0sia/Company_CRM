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
                        <a href="company/{{ $item->alias }}">{{ $item->title }}</a>
                    </h2>
                    <span class="main__list-company__description">{{ $item->description }}</span>
                </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="container">
        @if(auth()->check())
        <div class="row">
            <div class="add-company col-md-12 col-sm-12 col-12">
                <div class="add-company__button">
                    <button class="btn btn-info"><span id="add-company-span">Добавить компанию</span></button>
                </div>
                <form class="add-company__form" action="{{ route('company.create') }}" method="post">
                    @csrf
                    <div class="add-company__form__unput">
                        <ul class="add-company__form__menu">
                            <li>
                                <input type="text" name="title" class="form-control" placeholder="Название компании">
                            </li>
                            <li>
                                <input type="text" name="inn" class="form-control" placeholder="Инн">
                            </li>
                            <li>
                                <input type="text" name="description" class="form-control" placeholder="О компании">
                            </li>
                            <li>
                                <input type="text" name="general" class="form-control" placeholder="ФИО генерального директора">
                            </li>
                            <li>
                                <input type="text" name="location" class="form-control" placeholder="Адрес">
                            </li>
                            <li>
                                <input type="tel" name="phone" class="form-control" placeholder="Телефон">
                            </li>
                        </ul>
                    </div>
                    <div class="add-company__form__button">
                        <button class="btn btn-success" type="submit" name="company_submit"><span>Добавить</span></button>
                    </div>
                </form>
            </div>
        </div>
        @else
         <div class="row">
                <div class="main__no-register-message col-md-12">
                    <h3><a href="{{ route('register.create') }}">Зарегистрируйтесь</a> для добавления комментариев</h3>
                </div>
            </div>
        @endif
        </div>
@endsection
