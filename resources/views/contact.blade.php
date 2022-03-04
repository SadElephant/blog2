@extends('layouts.app')
@section('title-block')Контакты@endsection
@section('content')
    <h1>Контакты</h1>

    <p>Разнообразный и богатый опыт реализация намеченных плановых заданий способствует подготовки и реализации систем
        массового участия. С другой стороны реализация намеченных плановых заданий влечет за собой процесс внедрения и
        модернизации новых предложений. Задача организации, в особенности же дальнейшее развитие различных форм
        деятельности в значительной степени обуславливает создание соответствующий условий активизации. Таким образом
        укрепление и развитие структуры способствует подготовки и реализации соответствующий условий активизации.</p>
    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input typeof="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
        <input typeof="text" name="email" placeholder="Email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input typeof="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>



    </form>
@endsection
