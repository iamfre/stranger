@props(['article', 'categories'])

<div class="">
    <form action="@if(isset($article)){{ route('articles.update', $article) }}@endif" method="POST"
          class="bg-light p-2">
        @csrf

        <div class="form-group">
            <label for="category_id">Категория</label>
            <select name="category_id" class="form-control" id="category_id">
                @foreach($categories as $category)
                    <option @if(isset($article) && $category->id === $article->category_id) selected
                            @endif value={{$category->id}}>{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" value="@if(!empty($article->title)){{$article->title}}@endif" name="title"
                   class="form-control" placeholder="Заголовок">
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <textarea rows="3" name="description" class="form-control"
                      placeholder="Описание">@if(!empty($article->description)){{$article->description}}@endif</textarea>
        </div>

        <div class="form-group">
            <label for="slug">Ссылка</label>
            <input type="text" value="@if(!empty($article->slug)){{$article->slug}}@endif" name="slug"
                   class="form-control" placeholder="slug">
        </div>

        <div class="form-group">
            <label for="body">Содержание</label>
            <textarea name="body" cols="30" rows="8" class="form-control"
                      placeholder="Содержание">@if(!empty($article->body)){{$article->body}}@endif</textarea>
        </div>

        {{--TODO: add load file--}}
        <div class="form-group">
            <label for="image">Изображение</label>
            <input type="text" value="@if(!empty($article->image)){{$article->image}}@endif" name="image"
                   class="form-control" placeholder="/assets/images/img.jpg">
        </div>

        @if(isset($article))
            <div class="form-group">
                <label for="created_at">Дата создания</label>
                <input type="text" name="created_at"
                       value="@if(!empty($article->created_at)){{$article->created_at->format('d.m.Y H:m:s')}}@endif"
                       class="form-control"
                       placeholder="Дата создания">
            </div>

            <div class="form-group">
                {{--TODO: if publish--}}
                <label for="created_at">Дата публикации</label>
                <input type="text"
                       value="@if(!empty($article->published_at)){{$article->published_at->format('d.m.Y H:m:s')}}@endif"
                       name="published_at" class="form-control"
                       placeholder="Дата публикации">
            </div>

            <div class="form-group">
                <label for="created_at">Дата обновления</label>
                <input type="text"
                       value="@if(!empty($article->updated_at)){{$article->updated_at->format('d.m.Y H:m:s')}}@endif"
                       name="updated_at" class="form-control"
                       placeholder="Дата обновления">
            </div>
        @endif
        <div class="form-group">
            {{--TODO: if is published--}}
            <label><input type="checkbox" checked name="is_published" value="1"> ОПУБЛИКОВАТЬ</label>
        </div>

        <div class="form-group">
            <input type="submit" value="@if(isset($article))Изменить@elseСоздать@endif"
                   class="btn btn-primary py-2 px-4">
            <a href="{{ route('user.private') }}" class="btn btn-primary py-2 px-4">Назад</a>
        </div>
    </form>
    @if(count($errors) > 0)
        <x-panels.errors/>
    @endif
</div>
