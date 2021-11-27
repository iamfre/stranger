@extends('layouts.app')

@section('title', 'There and back again')

@section('content')
    <div class="container px-0">
        <div class="col-lg-6 px-md-5 py-5">
            <h3 class="mb-2">Авторизация</h3>
            <form action="{{ route('user.login') }}" method="POST" class="p-3 p-md-4 bg-light">
                @csrf

                @error('formError')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label for="password">Пароль *</label>
                    <input type="password" id="password" class="form-control" name="password">
                </div>

                <div class="form-group">
                    <input type="submit" value="Войти" class="btn py-3 px-4 btn-primary">
                </div>

                <div>
                    <a href="#">Забыл пароль</a>
                </div>

                <div>
                    <a href="{{ route('user.registration') }}">Зарегистрироваться</a>
                </div>
            </form>
        </div>
    </div>
@endsection
