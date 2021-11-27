@if(Auth::Check())
    <h1 id="colorlib-logo" class="mb-4"><a href="{{ route('user.login') }}">{{ auth()->user()->name }}</a></h1>
@else
    <h1 id="colorlib-logo" class="mb-4"><a href="{{ route('user.login') }}">Stranger</a></h1>
@endif
