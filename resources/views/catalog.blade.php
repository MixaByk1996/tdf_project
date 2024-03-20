@extends('layouts.app')
@section('title-block')Каталог@endsection
@section('content')
<section class="catalog-section">
    <div class="catalog-main-container">

        <div class="catalog-allproducts-block blur__modal">





                            </div>

            <div class="catalog-filters-block hidden-filter">

            <h1 class="catalog-main-text hidden1300Before">Каталог</h1>

               @include('catalogFilter')
            </div>




{{--            @include('productCatalog')--}}
        <div style="max-width:70%">

            <div class="catalog-main-grides2">

                <h1 class="catalog-main-text hidden1300After" style="opacity:1">Каталог</h1>

                <span class="catalog-main-grides-text"><a href="/">Главная</a>/<a
                        href="{{route('with-system', ['id' => 1])}}">Каталог</a></span>
                <div class="show-products-container">
                    <div class="show-products-items">
                        <svg id="svgOne" xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14"
                             fill="#EA600A">
                            <path
                                d="M14 0H2C0.875 0 0 0.90625 0 2V12C0 13.125 0.875 14 2 14H14C15.0938 14 16 13.125 16 12V2C16 0.90625 15.0938 0 14 0ZM2 2H7V6H2V2ZM2 12V8H7V12H2ZM14 12H9V8H14V12ZM14 6H9V2H14V6Z" />
                        </svg>
                        <svg id="svgTwo" xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14"
                             fill="white">
                            <path
                                d="M1.5 5.5C0.65625 5.5 0 6.1875 0 7C0 7.84375 0.65625 8.5 1.5 8.5C2.3125 8.5 3 7.84375 3 7C3 6.1875 2.3125 5.5 1.5 5.5ZM1.5 10.5C0.65625 10.5 0 11.1875 0 12C0 12.8438 0.65625 13.5 1.5 13.5C2.3125 13.5 3 12.8438 3 12C3 11.1875 2.3125 10.5 1.5 10.5ZM1.5 0.5C0.65625 0.5 0 1.1875 0 2C0 2.84375 0.65625 3.5 1.5 3.5C2.3125 3.5 3 2.84375 3 2C3 1.1875 2.3125 0.5 1.5 0.5ZM6 3H15C15.5312 3 16 2.5625 16 2.03125C16 1.53125 15.5312 1 15 1H6C5.4375 1 5 1.46875 5 2C5 2.5 5.4375 3 6 3ZM15 6H6C5.4375 6 5 6.46875 5 7C5 7.5625 5.4375 8 6 8H15C15.5312 8 16 7.5625 16 7C16 6.46875 15.5312 6 15 6ZM15 11H6C5.4375 11 5 11.4688 5 12C5 12.5625 5.4375 13 6 13H15C15.5312 13 16 12.5625 16 12C16 11.4688 15.5312 11 15 11Z" />
                        </svg>
                        <svg id="svgThree" xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 14"
                             fill="white">
                            <path
                                d="M1 2.5H15C15.5312 2.5 16 2.0625 16 1.53125C16 1.03125 15.5312 0.5 15 0.5H1C0.4375 0.5 0 0.96875 0 1.5C0 2 0.4375 2.5 1 2.5ZM15 5.5H1C0.4375 5.5 0 5.96875 0 6.5C0 7.0625 0.4375 7.5 1 7.5H15C15.5312 7.5 16 7.0625 16 6.5C16 5.96875 15.5312 5.5 15 5.5ZM15 10.5H1C0.4375 10.5 0 10.9688 0 11.5C0 12.0625 0.4375 12.5 1 12.5H15C15.5312 12.5 16 12.0625 16 11.5C16 10.9688 15.5312 10.5 15 10.5Z" />
                        </svg>
                    </div>
                    <div class="count-tovars-container">
                        <span class="count-tovars-text">Количество:</span>
                        <span class="count-tovars-cnt">{{$count ?? 1}}</span>
                    </div>


                </div>

                <button class="catalog-filters-button" style="margin-bottom: 15px">Фильтр</button>

                <div class="cart-block hidden1300After" id="myBtn2" onclick="{{url('cart')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="22" viewBox="0 0 25 22" fill="none">
                        <path
                            d="M20.1172 17.875C18.9441 17.875 18.0751 18.8203 18.0751 19.9375C18.0751 21.0977 18.9875 22 20.1172 22C21.2034 22 22.1593 21.0977 22.1593 19.9375C22.1593 18.8203 21.2903 17.875 20.1172 17.875ZM7.60369 17.875C6.43055 17.875 5.56156 18.8203 5.56156 19.9375C5.56156 21.0977 6.474 22 7.60369 22C8.68993 22 9.64583 21.0977 9.64583 19.9375C9.64583 18.8203 8.77683 17.875 7.60369 17.875ZM24.7229 1.93359C24.4622 1.58984 24.0711 1.375 23.5932 1.375H5.25741L5.17051 0.859375C5.08361 0.386719 4.64912 0 4.17117 0H0.999343C0.434497 0 0 0.472656 0 1.03125C0 1.54688 0.434497 2.0625 0.999343 2.0625H3.25873L5.86571 15.6836C5.99606 16.1562 6.43055 16.5 6.95195 16.5H21.2034C21.7683 16.5 22.2462 16.0703 22.2462 15.5117C22.2462 14.9102 21.7683 14.4375 21.2034 14.4375H7.77749L7.38644 12.375H21.2469C21.8552 12.375 22.3766 11.9883 22.5504 11.3867L24.9401 3.17969C25.0705 2.75 24.9836 2.27734 24.7229 1.93359Z"
                            fill="white"></path>
                    </svg>
                    <div class="cart-count-block">
                        <span class="cart-count-text">{{count($cards) ?? 0}}</span>
                    </div>
                </div>


            </div>

            <div class="catalog-products-block block__two  ">


                <div class="catalog-products-container">
                    @if($count == 0)
                        <div>
                            <h1 style="color: white; text-align:center">
                                Нам не удалось найти товар по вашему запросу. Попробуйте другой запрос или оставьте заявку, чтобы
                                наш менеджер вам помог
                            </h1>
                        </div>
                    @endif

                    @foreach($products as $product)
                        <div class="products-item--1">
                            <p id="product_id" hidden>{{$product->id}}</p>
                            <div class="products-item-img-container--text--one">
                                <div>
                                    <div class="products-item-img">
                                        <img width="120" height="120" src="https://tdfurnitur.com/storage/{{$product->image_path}}" />
                                    </div>
                                </div>
                                <div>
                                    <span class="products-item-name">{{$product->name}}</span>
                                </div>
                                <div>
                                    <div style="margin-top: 20px">

                                        <span class="products-item-price" style="text-align: center;">{{$product->price}} руб.</span>
                                        {{-- @if(\Auth::check())--}}
                                        <form action="{{route("add-to-card", $product->id)}}" method="get">
                                            @csrf
                                            <button type="submit" class="products-item-button">В корзину</button>
                                        </form>

                                        {{-- @endif--}}

                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                {{-- <div class="products-pagination-container">--}}
                {{-- --}}
                {{-- </div>--}}
                <div class="row">
                    <div class="col-md-12">
                        {{ $products->onEachSide(3)->links('pagination::custom_pagination') }}
                    </div>
                </div>

                {{--</div>--}}
            </div>





            <!-- --------------------------------------------------------- -->


            <div class="catalog-products-block block__one">
                <div class="catalog-products-container__">
                    @if($count == 0)
                        <div>
                            <h3 style="color: white">
                                Нам не удалось найти товар по вашему запросу. Попробуйте другой запрос или оставьте заявку, чтобы наш
                                менеджер вам помог
                            </h3>
                        </div>
                    @endif
                    @foreach($products as $product)
                        <div class="products-item--2">
                            <p id="product_id" hidden>{{$product->id}}</p>
                            <div class="products__container--2">
                                <div class="products-item-img-container--text">
                                    <div>
                                        <div class="products-item-img">
                                            <img width="120" height="120" src="https://tdfurnitur.com/storage/{{$product->image_path}}" />
                                        </div>
                                    </div>
                                    <div>
                                        <span class="products-item-name">{{$product->name}}</span>
                                    </div>
                                </div>
                                <div class="products-item-price-cart--2">
                                    <div>
                                        <div style="margin-top: 20px">

                                            <span class="products-item-price" style="text-align: center;">{{$product->price}} руб.</span>
                                            {{-- @if(\Auth::check())--}}
                                            <form action="{{route("add-to-card", $product->id)}}" method="get">
                                                @csrf
                                                <button type="submit" class="products-item-button">В корзину</button>
                                            </form>

                                            {{-- @endif--}}

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <div class="row">
                    <div class="col-md-12">
                        {{ $products->onEachSide(3)->links('pagination::custom_pagination') }}
                    </div>
                </div>




            </div>





            <!-- --------------------------------------------------- -->


            <div class="catalog-products-block block__three">
                <div class="catalog-products-container__">
                    @if($count == 0)
                        <div>
                            <h3 style="color: white">
                                Нам не удалось найти товар по вашему запросу. Попробуйте другой запрос или оставьте заявку, чтобы наш
                                менеджер вам помог
                            </h3>
                        </div>
                    @endif
                    @foreach($products as $product)
                        <div class="products-item--3">
                            <p id="product_id" hidden>{{$product->id}}</p>
                            <div class="pruducts__containets__3">
                                <div style="display:flex; flex-direction: column; align-items: flex-start; gap: 10px">
                                    <div>
                                        {{$product->producer->name ?? ''}}
                                    </div>
                                    <span class="products-item-name__3">{{$product->name}}</span>
                                    <div>Код: {{$product->article}}</div>
                                </div>

                                <div>
                                    <div style="margin-top: 20px">

                                        <span class="products-item-price" style="text-align: center;">{{$product->price}} руб.</span>
                                        {{-- @if(\Auth::check())--}}
                                        <form action="{{route("add-to-card", $product->id)}}" method="get">
                                            @csrf
                                            <button type="submit" class="products-item-button">В корзину</button>
                                        </form>

                                        {{-- @endif--}}

                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

                <div class="row">
                    <div class="col-md-12">
                        {{ $products->onEachSide(3)->links('pagination::custom_pagination') }}
                    </div>
                </div>







            </div>

        </div>



        <div class="hidden1300Before">
            @include('cartProduct')
            </div>


        </div>



        <div class="close--cart--modal">&times;</div>



<div id="myModal" class="modal--cart">


    <div class="modal-content--cart">

        <div class="modal-body">


            <div class="cart-tovars-container">
                @foreach($cards as $card)

                                    <div class="cart-tovars-item">
                                        <div class="cart-product-container">
                                            {{--                                <div class="cart-product-item">--}}
                                            {{--                                    <input class="cart-product-chekbox" type="checkbox" checked="checked">--}}
                                            {{--                                </div>--}}
                                            <div class="cart-product-imgcontainer">
                                                <img class="cart-product-img" src="https://tdfurnitur.com/storage/{{$card->product->image_path}}"/>
                                                <button class="cart-product-deletes-btn--two">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M1 1L23 22.5" stroke="#EA600A" stroke-width="1.5" stroke-linecap="round"/>
                                                        <path d="M23 1L1 22.5" stroke="#EA600A" stroke-width="1.5" stroke-linecap="round"/>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="cart-product-textcontainer">
                                                <div class="cart-product-textmain-container">
                                                    <span class="cart-product-serialtext">{{$card->product->producer->name ?? ""}}</span>
                                                    <span class="cart-product-nametext">{{$card->product->name}}</span>
                                                </div>
                                                <div class="cart-product-charactercontainer">
                                                    <div class="cart-product-character-item">
                                                        <span class="cart-product-character-name">Код: </span>
                                                        <span class="cart-product-character-value">{{$card->product->article}}</span>
                                                    </div>
                                                    <div class="cart-product-character-item">
                                                        <span class="cart-product-character-name">Тип: </span>
                                                        <span class="cart-product-character-value">{{$card->product->category->name ?? 'Не указан'}}</span>
                                                    </div>
                                                    {{--                                        <div class="cart-product-character-item">--}}
                                                    {{--                                            <span class="cart-product-character-name">Материал: </span>--}}
                                                    {{--                                            <span class="cart-product-character-value">сталь</span>--}}
                                                    {{--                                        </div>--}}
                                                    {{--                                        <div class="cart-product-character-item">--}}
                                                    {{--                                            <span class="cart-product-character-name">Количество в наборе: </span>--}}
                                                    {{--                                            <span class="cart-product-character-value">1</span>--}}
                                                    {{--                                        </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-product-actions">
                                            <div class="cart-product-deletes-block">
                                                <form action="{{route("remove-modal", $card->product->id)}}" method="get">
                                                    @csrf
                                                    <button type="submit" class="cart-product-deletes-btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M1 1L23 22.5" stroke="#EA600A" stroke-width="1.5" stroke-linecap="round"/>
                                                            <path d="M23 1L1 22.5" stroke="#EA600A" stroke-width="1.5" stroke-linecap="round"/>
                                                        </svg>
                                                    </button>
                                                </form>

                            <span class="cart-product-price">{{$card->product->price}} руб.</span>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>



            <div class="products-item__bottom-cart">
                <div class="products-item__bottom-cart-text">
                    <img src="/img/iconTruck.svg" alt="">
                    <div>Добавьте в корзину товаров на 3 297,48 руб. для бесплатной доставки по Москве
                    </div>
                </div>
                <div class="products-item__bottom-cart-summary">
                    <button class="btn-cart">Перейти в корзину</button>
                </div>
            </div>


        </div>
    </div>
</div>
    </div>
</section>

<script src="./js/catalog.js"></script>
<script src="./js/filterCatalog.js"></script>



@endsection

