@extends('layouts.app')

@section('title', 'There and back again')

@section('content')
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
        <div class="container px-0">
            <div class="row no-gutters">

                @for ($i = 0; $i < count($articles); $i++)
                    <x-panels.article :article="$articles[$i]" :count="$i + 1" :last="count($articles)"/>
                    @if (($i + 1) % 3 === 2)
                        </div>
                        </div>
                    @endif
                @endfor

            </div>
        </div>
    </section>
@endsection
