<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $key => $error)
            <li>{{ $error}}</li>
        @endforeach
    </ul>
</div>
