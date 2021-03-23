@extends('layouts.company_crm')
@section('title') Войти @endsection
@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('login') }}" class="login col-md-12 col-sm-12 col-12" method="post">
                @csrf
                <div class="login__input">
                    <div class="mb-3">
                        <label for="exampleInputLogin" class="form-label">Логин или email</label>
                        <input type="text" class="form-control" id="login" name="login_email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword" class="form-label">Пароль</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                </div>
                <div class="login__submit">
                    <button type="submit" class="btn btn-success" name="login_submit">Вход</button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
