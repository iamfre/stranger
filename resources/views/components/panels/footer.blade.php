<div class="colorlib-footer">
    <div class="mb-4">
        <h3>Подписаться на новости</h3>
        <form action="{{ route('subscribe.create') }}" method="POST" class="colorlib-subscribe-form">
            @csrf

            <div class="form-group d-flex">
                <input type="text" name="email" class="form-control" placeholder="Ваш Email адрес">
                <button type="submit" class="icon" style="background: none; border: none;"><span class="icon-paper-plane"></span></button>
            </div>
        </form>
    </div>
    <p class="pfooter">
        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
        All rights reserved
    </p>
</div>
