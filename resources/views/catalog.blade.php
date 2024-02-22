@extends('layouts.app')
@section('title-block')Каталог@endsection
@section('content')
<section class="catalog-section">
    <div class="catalog-main-container">
        <div class="catalog-mainitems-block">

            <div class="catalog-allblocks">

            </div>
        </div>
        <div class="catalog-allproducts-block blur__modal">



            <div class="catalog-filters-block hidden-filter">

            <h1 class="catalog-main-text hidden500Before">Каталог</h1>

               @include('catalogFilter')
            </div>




            @include('productCatalog')


            <div>
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
                                                <img class="cart-product-img" src="http://5.35.94.70/storage/{{$card->product->image_path}}"/>
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

                            <span class="cart-product-price">{{$card->product->price}} EUR</span>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>



            <div class="products-item__bottom-cart">
                <div class="products-item__bottom-cart-text">
                    <img src="/img/iconTruck.svg" alt="">
                    <div>Добавьте в корзину товаров на 3 297,48 EUR для бесплатной доставки по Москве
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
