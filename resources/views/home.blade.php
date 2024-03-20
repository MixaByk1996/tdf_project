@extends('layouts.app')
@section('title-block')Главная@endsection
@section('content')
<section class="furniture-set-section">

    <div class="furniture-set-container">
        <div class="furniture-set-main">
            <div class="furniture-set-textcontainer">
                <h1 class="furniture-set-firsttext">Мебельная фурнитура</h1>
                <span class="furniture-set-lasttext">Инновация в каждой детали</span>
            </div>
            <a href="/catalog" class="show-catalog-main">Смотреть каталог</a>
        </div>





        <div class="furniture-set-items">


        <div class="furniture-set-item">
                <span class="furniture-set-item-maintext">Качество без компромиссов:</span>
                <span class="furniture-set-item-text">Только лучшие производители мебельной фурнитуры: продукция,
                    которая прослужит многие годы. А также строгий контроль качества товаров, и мы гордимся тем, что
                    можем предложить вам только лучшее.</span>
            </div>

            <div class="furniture-set-item">
                <span class="furniture-set-item-maintext">Широкий ассортимент:</span>
                <span class="furniture-set-item-text">Всё, что нужно для вашей мебели. Эксклюзивные ручки и ручки-купе,
                    мебельные ноги, петли, замки, и многое другое - у нас есть всё, чтобы придать вашей мебели
                    индивидуальность и стиль.</span>
            </div>

            <div class="furniture-set-item">
                <span class="furniture-set-item-maintext ">Удобство покупки:</span>
                <span class="furniture-set-item-text">Мы стремимся сделать покупки у нас максимально удобными. Закажите
                    фурнитуру онлайн, и мы доставим её прямо к вам домой.</span>
            </div>





        </div>



    </div>

</section>
<section class="marquee-section">
    <div class="marquee-container">
        <span id="txtmarq" class="marquee-text">blum · blum · blum · blum · blum · blum · blum · blum · blum · </span>
    </div>
</section>
<section class="furniture-partner-section">
    <div class="furniture-partner-container">
        <img class="furniture-partner-image" src="/img/img1.png" />
        <div class="furniture-partner-textcontainer">
            <h1 class="furniture-partner-maintext">TDFurnitur - ваш надежный партнер в мире мебельной фурнитуры.</h1>
            <div class="furniture-partner-textcontainerlast">
                <span class="furniture-partner-textcontainerlast-text">С [год основания] года мы предоставляем широкий
                    ассортимент качественных мебельных компонентов и аксессуаров для мебели. Наша миссия - обеспечить
                    профессионалов и любителей мебельного искусства лучшими решениями для их проектов.</span>
                <span class="furniture-partner-textcontainerlast-text">Мы работаем с разнообразными клиентами, включая
                    дизайнеров, мебельные мастерские, строительные компании и даже частных людей, желающих обновить свою
                    мебель.</span>
            </div>
        </div>
    </div>
</section>
<section class="main-catalog-section">
    <div class="main-catalog-container">
        <h1 class="main-catalog-text">Каталог</h1>
        <div class="catalog-main-items">

            @foreach($systems as $system)
{{--            @if(in_array($system->id, [1,2,3,4,5,6,7,8]) )--}}
            <button type="button" onclick="window.location='{{route('with-system', ['id' => $system->id])}}'"
                class="catalog-main-item">
                <span class="catalog-main-item-text">{{$system->name}}</span>
            </button>
{{--            @else--}}
{{--            <button type="button" onclick="window.location='{{route('catalog')}}'" class="catalog-main-item">--}}
{{--                <span class="catalog-main-item-text">{{$system->name}}</span>--}}
{{--            </button>--}}
{{--            @endif--}}

            @endforeach

            {{-- <button class="catalog-main-item">--}}
                {{-- <span class="catalog-main-item-text">Системы петель</span>--}}
                {{-- </button>--}}
            {{-- <button class="catalog-main-item">--}}
                {{-- <span class="catalog-main-item-text">Системы выдвижения</span>--}}
                {{-- </button>--}}
            {{-- <button class="catalog-main-item">--}}
                {{-- <span class="catalog-main-item-text">Системы направляющих</span>--}}
                {{-- </button>--}}
            {{-- <button class="catalog-main-item">--}}
                {{-- <span class="catalog-main-item-text">Системы зонирования</span>--}}
                {{-- </button>--}}
            {{-- <button class="catalog-main-item">--}}
                {{-- <span class="catalog-main-item-text">Система внутренних разделителей</span>--}}
                {{-- </button>--}}
            {{-- <button class="catalog-main-item">--}}
                {{-- <span class="catalog-main-item-text">Технологии движения</span>--}}
                {{-- </button>--}}
            {{-- <button class="catalog-main-item">--}}
                {{-- <span class="catalog-main-item-text">Конструкции шкафов</span>--}}
                {{-- </button>--}}
            {{-- <button class="catalog-main-item">--}}
                {{-- <span class="catalog-main-item-text">Прочие изделия</span>--}}
                {{-- </button>--}}
            {{-- <button class="catalog-main-item">--}}
                {{-- <span class="catalog-main-item-text">Приспособления для сборки мебели</span>--}}
                {{-- </button>--}}
            {{-- <button class="catalog-main-item">--}}
                {{-- <span class="catalog-main-item-text">Сопутствующие изделия</span>--}}
                {{-- </button>--}}

        </div>
    </div>
</section>
<section class="main-feedback-section">

    <div class="feedback-container--2">
        <div class="feedback__container--before">
            <div class="title__feedback">Специальные цены</div>
            <div class="descr_feedback">Для производителей мебели и торгующих компаний</div>
            <button class="button__feedback" id="t1111">Узнать подробности</button>
        </div>



        <div class="main-feedback-container">
            <div class="feedback-container">
                <div class="feedback-container-form">
                    <h1 class="feedback-main-text" id="t1">Оставить обращение</h1>
                    <form action="{{route('send-notification')}}" method="post" class="feedback-form">
                        @csrf
                        <input type="text" class="feedback-form-input" name="fio" placeholder="ФИО" />
                        <input type="text" class="feedback-form-input" name="email" placeholder="Email" />
                        <div class="feedback-form-input-container">
                            <input type="text" class="feedback-form-input-cont" name="phone"
                                placeholder="Номер телефона" />
                            <input type="text" class="feedback-form-input-cont" name="inn" placeholder="ИНН" />
                        </div>
                        <div class="textarea-container">
                            <textarea class="feedback-form-textarea" name="description" rows="5"
                                placeholder="Описание заказа или вопроса..."></textarea>
                        </div>
                        <div class="personal-data-checkes">
                            <div class="personal-data-check-container">
                                <input id="persondat" type="checkbox" class="feedback-checkbox-input"
                                    checked="checked" />
                                <label for="persondat" class="personal-data-label">Даю согласие на обработку
                                    персональных
                                    данных.</label>
                            </div>
                            <button type="submit" class="btn-feedback">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>


    </div>

    <div class="feedback-text-container">
        <span class="feedback-text-first">Присоединитесь к нам и преобразите свои мебельные проекты с помощью
            качественной фурнитуры. Разнообразие ассортимента, надежность и профессиональное обслуживание - это то,
            что делает нас вашим надежным партнером в мире мебельной фурнитуры. Создавайте уникальные интерьеры с
            нами!</span>

    </div>
    </div>
</section>




@endsection
