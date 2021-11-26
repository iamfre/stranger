@extends('layouts.app')

@section('title', 'Контакты')

@section('content')
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container px-0">
            <div class="row no-gutters block-9">
                <x-panels.feedback/>
                <x-panels.map/>
            </div>

            <div class="row d-flex mb-5 px-4 px-md-4 contact-info mt-5">
                <div class="col-md-12 mb-4">
                    <h2 class="h3">Контактная информация</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-lg-6 col-xl-3 mb-4">
                    <div class="info">
                        <p><span>Адрес:</span> г. Москва, ул.Манежная, д.2 </p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 mb-4">
                    <div class="info">
                        <p><span>Телефон:</span> <a href="tel://123456">+ 7 (495) 5555 43</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 mb-4">
                    <div class="info">
                        <p><span>Email:</span> <a href="mailto:iam@free.net">iam@free.net</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-3 mb-4">
                    <div class="info">
                        <p><span>Instagram:</span> <a href="https://www.instagram.com/vdnh_russia">@vdnh_russia</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
