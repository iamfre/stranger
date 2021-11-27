@extends('layouts.app')

@section('title', 'Регистрация')

@section('content')
    <div class="container px-0">
        <div class="col-lg-6 px-md-5 py-5">

            <h3 class="mb-2">Регистрация</h3>
            <form action="{{ route('user.registration') }}" method="POST" class="p-3 p-md-4 bg-light">
                @csrf

                <div class="form-group">
                    <label for="name">Имя *</label>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="name" id="name" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label for="email">Email *</label>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="email" id="email" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label for="password">Пароль *</label>
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="password" id="password" class="form-control" name="password">
                </div>

                <div class="form-group">
                    <input type="submit" value="Отправить" class="btn py-3 px-4 btn-primary">
                </div>

                <div>
                    <a href="{{ route('user.login') }}">Уже зарегистрирован</a>
                </div>
            </form>


        </div>
    </div>
@endsection
