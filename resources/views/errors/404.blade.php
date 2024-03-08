@extends('layouts.app')
@section('title-block')Ошибка@endsection
@section('content')
<section class="error-section">
    <div class="error-container">
        <div class="error-container-main">
            <h3 class="error-maintext">Страница не найдена</h3>
            <h1 class="error-maintext-four">404</h1>
            <span class="error-maintext-last">Упс… Мы не можем найти то, что Вы ищете</span>
        </div>
        <div class="error-container-btns">
            <span class="err-btn-firsttext">Возможно, запрашиваемая вами страница была перенесена или удалена. Также возможно, вы допустили небольшую опечатку при вводе адреса – такое случается даже с нами,поэтому еще раз внимательно проверьте.</span>
            <a class="error-cont-btn" href="http://127.0.0.1:8000">Вернуться на главную</a>
            <span class="err-btn-firsttext">Переходите на главную страницу – там вы также сможете найти много полезной информации.</span>
        </div>
    </div>
</section>
@endsection