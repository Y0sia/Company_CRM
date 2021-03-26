@extends('layouts.company_crm')
@section('Title') Название компании @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="company col-md-12">
                <div class="company__info">
                    <div class="company__info__title">
                        <span><b>{{ $company->title }}</b></span>
                    </div>
                    <div class="company__info__desc">
                        <p>{{ $company->description }}</p>
                    </div>
                    <div class="company__info__inn">
                        <span>ИНН: {{ $company->inn }}</span>
                    </div>
                    <div class="company__info__director">
                        <span>ФИО директора: {{ $company->general }}</span>
                    </div>
                    <div class="company__info__address">
                        <span>Местоположение: {{ $company->location }}</span>
                    </div>
                    <div class="company__info__telephone">
                        <span>Телефон: {{ $company->phone }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @if(auth()->check())
        <div class="row">
            <div class="comment col-md-12">
                <div class="comment__open-closed">
                    <div class="row">
                        <div class="comment__open-closed__plus-minus col-md-3 col-sm-3 col-3">
                            <span id="plus"> + </span><span id="minus"> - </span>
                        </div>
                        <div class="comment__open-closed__number col-md-9 col-sm-9 col-9">
                            <span>Всего заметок: {{ count($notes) }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form class="comment__form" action="{{ route('note.create') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="comment__form__title col-md-12 col-sm-12 col-12">
                                <h4>Оставить заметку на:</h4>
                            </div>
                        </div>
                        <div class="row">
                            <input type="hidden" name="company_id" value="{{ $company->id }}">
                            <div class="comment__form__button col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="note_radio" id="gridRadios1" value="1">
                                    <label class="form-check-label" for="exampleRadios1">Название компании</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="note_radio" id="gridRadios2" value="2">
                                    <label class="form-check-label" for="exampleRadios2">Инн</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="note_radio" id="gridRadios3" value="3">
                                    <label class="form-check-label" for="exampleRadios3">Общую информацию</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="note_radio" id="gridRadios4" value="4">
                                    <label class="form-check-label" for="exampleRadios4">Генерального директора</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="note_radio" id="gridRadios5" value="5">
                                    <label class="form-check-label" for="exampleRadios5">Адрес</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="note_radio" id="gridRadios6" value="6">
                                    <label class="form-check-label" for="exampleRadios6">Телефон</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="note_radio" id="gridRadios7" value="7" checked>
                                    <label class="form-check-label" for="exampleRadios7">Компанию (в целом)</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="comment__form__add col-md-12">
                                <div class="row">
                                    <div class="form-group comment__form__add__text col-md-12">
                                        <label for="exampleFormControlTextarea1 comment__form__add__text">Заметки</label>
                                        <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="6"></textarea>
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
                    @if($notes)
                        @foreach($notes as $note)
                    <div class="reviews__area col-md-12">
                        <div class="row">
                            <div class="reviews__user col-md-2">
                                <span>{{ Auth::user()->login }} </span>
                                @foreach($fields as $field)
                                    @if($field->id === $note->company_field)
                                        ({{ $field->field }})
                                    @endif
                                @endforeach
                            </div>
                            <div class="reviews__time col-md-3">
                                <span>{{ $note->created_at }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="reviews__text col-md-12">
                                <p>{{ $note->text }}</p>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <div class="main__no-register-message col-md-12">
                <h3><a href="{{ route('users.create-register') }}">Зарегистрируйтесь</a> для оставления индивидуальных заметок</h3>
            </div>
        </div>
        @endif
    </div>
@endsection
