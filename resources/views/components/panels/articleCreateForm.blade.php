<div class="col-lg-6 order-md-last">
    <form action="{{ route('article.create') }}" method="POST" class="bg-light p-5 contact-form">
        @csrf

        <div class="form-group">
            <input type="number" name="category_id" class="form-control" placeholder="ID категории">
        </div>

        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Заголовок">
        </div>

        <div class="form-group">
            <input type="text" name="description" class="form-control" placeholder="Описание">
        </div>

        <div class="form-group">
            <input type="text" name="slug" class="form-control" placeholder="slug">
        </div>

        <div class="form-group">
            <textarea name="body" cols="30" rows="7" class="form-control" placeholder="Содержание"></textarea>
        </div>

        {{--TODO: add load file--}}
        <div class="form-group">
            <input type="text" name="image" class="form-control" placeholder="/assets/images/img.jpg">
        </div>

        <div class="form-group">
            <input type="submit" value="Создать" class="btn btn-primary py-3 px-5">
        </div>
    </form>
    @if(count($errors) > 0)
        <x-panels.errors/>
    @endif
</div>
