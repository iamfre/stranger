<div class="col-lg-6 order-md-last">
    <form action="{{ route('feedback.create') }}" method="POST" class="bg-primary p-5 contact-form">
        @csrf

        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Ваше имя">
        </div>
        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Ваш Email">
        </div>
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Тема">
        </div>
        <div class="form-group">
                            <textarea name="body" id="" cols="30" rows="7" class="form-control"
                                      placeholder="Сообщение"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Отпрвить" class="btn btn-white py-3 px-5">
        </div>
    </form>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>

                @foreach($errors->all() as $key => $error)
                    <li>{{ $error}}</li>
                @endforeach

            </ul>
        </div>
    @endif
</div>
