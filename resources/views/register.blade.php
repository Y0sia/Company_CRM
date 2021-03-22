@extends('layouts.company_crm')
@section('title') Регистрация @endsection
@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('store') }}" class="auth col-md-12 col-sm-12 col-12" method="post">
                @csrf
                <div class="auth__input">
                    <div class="mb-3">
                        <label for="exampleInputLogin" class="form-label">Логин</label>
                        <input type="text" class="form-control" id="exampleInputLogin" name="login" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
                        <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword2">
                    </div>
                </div>
                <div class="auth__submit">
                    <button type="submit" class="btn btn-success" name="auth_submit">Зарегистрироваться</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
