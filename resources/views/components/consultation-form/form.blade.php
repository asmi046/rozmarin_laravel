<form  method="POST" action="{{ route('send_consultation') }}" class="callback-form">
    {{-- <label class="form-elem">
        <input type="email" name="email" class="form-elem__field" placeholder="Ваш Email">
        <span class="form-elem__error">ошибка вашу дивизию</span>
    </label> --}}
    @csrf
    <label class="form-elem">
        <input type="tel" name="phone" class="form-elem__field tel-mask" placeholder="Ваш телефон*">
        @error('phone')
            <span class="form-elem__error">{{$message}}</span>
        @enderror
    </label>
    <label class="form-elem">
        <input type="text" name="name" class="form-elem__field" placeholder="Ваше имя">
        @error('name')
            <span class="form-elem__error">{{$message}}</span>
        @enderror
    </label>
    <label class="form-elem">
        <textarea name="message" id="" cols="30" rows="10" class="form-elem__textarea" placeholder="Ваш вопрос"></textarea>
        @error('message')
            <span class="form-elem__error">{{$message}}</span>
        @enderror
    </label>
    <button type="submit" class="btn">Отправить</button>
    <span class="form-notification">Нажимая на кнопку “отправить заявку” вы соглашаетесь с <a href="{{ route('policy') }}">политикой конфиденциальности</a></span>
</form>
