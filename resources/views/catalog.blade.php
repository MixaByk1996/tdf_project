@extends('layouts.app')
@section('title-block')Каталог@endsection
@section('content')
<section class="catalog-section">
    <div class="catalog-main-container">
        <div class="catalog-mainitems-block">
            <h1 class="catalog-main-text">Каталог</h1>

            <div class="catalog-allblocks">
                <div class="catalog-main-grides">
                    <span class="catalog-main-grides-text">Главная / Каталог / Системы петель / Blum</span>
                    <div class="show-products-container">
                    <div class="show-products-items">
                            <svg  id="svgOne" xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14"
                            fill="#EA600A">
                                <path
                                    d="M14 0H2C0.875 0 0 0.90625 0 2V12C0 13.125 0.875 14 2 14H14C15.0938 14 16 13.125 16 12V2C16 0.90625 15.0938 0 14 0ZM2 2H7V6H2V2ZM2 12V8H7V12H2ZM14 12H9V8H14V12ZM14 6H9V2H14V6Z"
                                     />
                            </svg>
                            <svg  id="svgTwo" xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14"
                            fill="white"
                            >
                                <path
                                    d="M1.5 5.5C0.65625 5.5 0 6.1875 0 7C0 7.84375 0.65625 8.5 1.5 8.5C2.3125 8.5 3 7.84375 3 7C3 6.1875 2.3125 5.5 1.5 5.5ZM1.5 10.5C0.65625 10.5 0 11.1875 0 12C0 12.8438 0.65625 13.5 1.5 13.5C2.3125 13.5 3 12.8438 3 12C3 11.1875 2.3125 10.5 1.5 10.5ZM1.5 0.5C0.65625 0.5 0 1.1875 0 2C0 2.84375 0.65625 3.5 1.5 3.5C2.3125 3.5 3 2.84375 3 2C3 1.1875 2.3125 0.5 1.5 0.5ZM6 3H15C15.5312 3 16 2.5625 16 2.03125C16 1.53125 15.5312 1 15 1H6C5.4375 1 5 1.46875 5 2C5 2.5 5.4375 3 6 3ZM15 6H6C5.4375 6 5 6.46875 5 7C5 7.5625 5.4375 8 6 8H15C15.5312 8 16 7.5625 16 7C16 6.46875 15.5312 6 15 6ZM15 11H6C5.4375 11 5 11.4688 5 12C5 12.5625 5.4375 13 6 13H15C15.5312 13 16 12.5625 16 12C16 11.4688 15.5312 11 15 11Z"
                                      />
                            </svg>
                            <svg  id="svgThree" xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 14"
                            fill="white" >
                                <path
                                    d="M1 2.5H15C15.5312 2.5 16 2.0625 16 1.53125C16 1.03125 15.5312 0.5 15 0.5H1C0.4375 0.5 0 0.96875 0 1.5C0 2 0.4375 2.5 1 2.5ZM15 5.5H1C0.4375 5.5 0 5.96875 0 6.5C0 7.0625 0.4375 7.5 1 7.5H15C15.5312 7.5 16 7.0625 16 6.5C16 5.96875 15.5312 5.5 15 5.5ZM15 10.5H1C0.4375 10.5 0 10.9688 0 11.5C0 12.0625 0.4375 12.5 1 12.5H15C15.5312 12.5 16 12.0625 16 11.5C16 10.9688 15.5312 10.5 15 10.5Z"
                                        />
                            </svg>
                        </div>
                        <div class="count-tovars-container">
                            <span class="count-tovars-text">Количество:</span>
                            <span class="count-tovars-cnt">{{$count}}</span>
                        </div>
                    </div>
                </div>

                @if(\Illuminate\Support\Facades\Auth::check())
                    <div class="cart-block" id="myBtn" onclick="{{url('cart')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="22" viewBox="0 0 25 22" fill="none">
                            <path
                                d="M20.1172 17.875C18.9441 17.875 18.0751 18.8203 18.0751 19.9375C18.0751 21.0977 18.9875 22 20.1172 22C21.2034 22 22.1593 21.0977 22.1593 19.9375C22.1593 18.8203 21.2903 17.875 20.1172 17.875ZM7.60369 17.875C6.43055 17.875 5.56156 18.8203 5.56156 19.9375C5.56156 21.0977 6.474 22 7.60369 22C8.68993 22 9.64583 21.0977 9.64583 19.9375C9.64583 18.8203 8.77683 17.875 7.60369 17.875ZM24.7229 1.93359C24.4622 1.58984 24.0711 1.375 23.5932 1.375H5.25741L5.17051 0.859375C5.08361 0.386719 4.64912 0 4.17117 0H0.999343C0.434497 0 0 0.472656 0 1.03125C0 1.54688 0.434497 2.0625 0.999343 2.0625H3.25873L5.86571 15.6836C5.99606 16.1562 6.43055 16.5 6.95195 16.5H21.2034C21.7683 16.5 22.2462 16.0703 22.2462 15.5117C22.2462 14.9102 21.7683 14.4375 21.2034 14.4375H7.77749L7.38644 12.375H21.2469C21.8552 12.375 22.3766 11.9883 22.5504 11.3867L24.9401 3.17969C25.0705 2.75 24.9836 2.27734 24.7229 1.93359Z"
                                fill="white"></path>
                        </svg>
                        <div class="cart-count-block">
                            <span class="cart-count-text">1</span>
                        </div>
                    </div>
                @endif

<div class="close--cart--modal">&times;</div>



                <div id="myModal" class="modal--cart">


                    <div class="modal-content--cart">

                        <div class="modal-body">



                            <div class="products-item__bottom-cart">
                                <div class="products-item__bottom-cart-text">
                                    <img src="/img/iconTruck.svg" alt="">
                                    <div>Добавьте в корзину товаров на 3 297,48 ₽ для бесплатной доставки по Москве</div>
                                </div>
                                <div class="products-item__bottom-cart-summary">
                                    <button class="btn-cart">Перейти в корзину</button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="catalog-allproducts-block blur__modal">

        <button class="catalog-filters-button">Фильтр</button>


            <div class="catalog-filters-block hidden-filter">
                <div class="filters-catalogs">
                    <ul class="filters-type-list">
                        @foreach($systems as $system)
                            <li class="filters-type-list-item">
                                <a href="{{route('with-system', ['id' => $system->id])}}" class="filters-type-list-item-url">{{$system->name}}</a>
                            </li>
                        @endforeach

                    </ul>
{{--                    <button class="viewall-filters-type">--}}
{{--                        <span class="viewall-filters-type-text">Показать всё</span>--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="5" viewBox="0 0 9 5" fill="none">--}}
{{--                            <path--}}
{{--                                d="M8.80506 1.08621L4.92156 4.81736C4.79382 4.94782 4.64052 5 4.51277 5C4.35948 5 4.20618 4.94782 4.07844 4.84345L0.19494 1.08621C-0.0605535 0.851379 -0.0605535 0.46 0.16939 0.19908C0.399334 -0.0618396 0.782574 -0.0618396 1.03807 0.172988L4.51277 3.51276L7.96193 0.172988C8.21743 -0.0618396 8.60067 -0.0618396 8.83061 0.19908C9.06055 0.46 9.06055 0.851379 8.80506 1.08621Z"--}}
{{--                                fill="#EA600A" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}
                </div>

{{--                <form action="{{route('catalog')}}" method="post">--}}

                <form action="{{route('filter-name')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="filters-container">
                    <div class="filters-container-typechar">
                        <div class="filters-container-typechar-item">
                            <div class="filters-container-typechar-name">
                                <span class="filters-container-typechar-text">Производитель</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="6" viewBox="0 0 16 6"
                                    fill="none">
                                    <path d="M1 5L8 1L15 5" stroke="#5D5D5D" />
                                </svg>
                            </div>
                            <div class="filters-container-typechar-values">
                                @foreach($producers as $producer)
                                    <div class="filters-container-typechar-list-item">
                                        <input class="filters-container-typechar-chekbox" name="producer_{{$producer->id}}" type="checkbox" />
                                        <label class="filter-name-type">{{$producer->name}}</label>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="filters-container-typechar-item">
                            <div class="filters-container-typechar-name">
                                <span class="filters-container-typechar-text">Серия</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="6" viewBox="0 0 16 6"
                                    fill="none">
                                    <path d="M1 5L8 1L15 5" stroke="#5D5D5D" />
                                </svg>
                            </div>
                            <div class="filters-container-typechar-values">
                                @foreach($series as $serie) @endforeach
                                <div class="filters-container-typechar-list-item">
                                    <input class="filters-container-typechar-chekbox" name="serie_{{$serie->id}}" type="checkbox" />
                                    <label class="filter-name-type">{{$serie->name}}</label>
                                </div>

                            </div>
                        </div>
                        <div class="filters-container-typechar-item">
                            <div class="filters-container-typechar-name">
                                <span class="filters-container-typechar-text">Тип</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="6" viewBox="0 0 16 6"
                                    fill="none">
                                    <path d="M1 5L8 1L15 5" stroke="#5D5D5D" />
                                </svg>
                            </div>
                            <div class="filters-container-typechar-values">
                                @foreach($categories as $item)
                                <div class="filters-container-typechar-list-item">
                                    <input class="filters-container-typechar-chekbox" name="category_{{$item->id}}" type="checkbox" />
                                    <label class="filter-name-type">{{$item->name}}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="filters-container-typechar-item">
                            <div class="filters-container-typechar-name">
                                <span class="filters-container-typechar-text">Угол открывания</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="6" viewBox="0 0 16 6"
                                    fill="none">
                                    <path d="M1 5L8 1L15 5" stroke="#5D5D5D" />
                                </svg>
                            </div>
                            <div class="filters-container-typechar-values">
                                @foreach($angle as $item)
                                    <div class="filters-container-typechar-list-item">
                                        <input class="filters-container-typechar-chekbox" name="angle_{{$item->id}}" type="checkbox" />
                                        <label class="filter-name-type">{{$item->name}}</label>
                                    </div>
                                @endforeach
                            </div>


                        </div>


                        <div class="filters-container-typechar-item">
                            <div class="filters-container-typechar-name">
                                <span class="filters-container-typechar-text">Наличия товара</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="6" viewBox="0 0 16 6"
                                    fill="none">
                                    <path d="M1 5L8 1L15 5" stroke="#5D5D5D" />
                                </svg>
                            </div>
                            <div class="filters-container-typechar-values">
                                <div class="filters-container-typechar-list-item">
                                    <input class="filters-container-typechar-chekbox" type="checkbox" />
                                    <label class="filter-name-type">Есть в наличии</label>
                                </div>
                                <div class="filters-container-typechar-list-item">
                                    <input class="filters-container-typechar-chekbox" type="checkbox" />
                                    <label class="filter-name-type">Нету в наличии</label>
                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="clear-filters-container">
                        <button type="submit"  class="set-clearing-filters">Применить</button>
{{--                        <button class="clearing-filters">--}}
{{--                            <span class="clearing-filters-text">Сбросить</span>--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="13" viewBox="0 0 11 13"--}}
{{--                                fill="none">--}}
{{--                                <path--}}
{{--                                    d="M10.3451 11.1654C10.5638 11.4388 10.5365 11.849 10.263 12.0951C10.1263 12.2044 9.98958 12.2318 9.85286 12.2318C9.66146 12.2318 9.47005 12.1771 9.33333 12.013L5.25911 7.14583L1.15755 12.013C1.02083 12.1771 0.829427 12.2318 0.638021 12.2318C0.501302 12.2318 0.364583 12.2044 0.227865 12.0951C-0.0455729 11.849 -0.0729167 11.4388 0.145833 11.1654L4.38411 6.10677L0.145833 1.07552C-0.0729167 0.802083 -0.0455729 0.391927 0.227865 0.145833C0.501302 -0.0729167 0.911458 -0.0455729 1.15755 0.227865L5.25911 5.09505L9.33333 0.227865C9.57943 -0.0455729 9.98958 -0.0729167 10.263 0.145833C10.5365 0.391927 10.5638 0.802083 10.3451 1.07552L6.10677 6.10677L10.3451 11.1654Z"--}}
{{--                                    fill="#EA600A" />--}}
{{--                            </svg>--}}
{{--                        </button>--}}
                    </div>
                </div>
                </form>
{{--                </form>--}}
            </div>



            <!-- -------------------------------------- -->


            <div class="catalog-products-block block__two">


                    <div class="catalog-products-container">
                        @foreach($products as $product)
                            <div class="products-item--1">
                                <p id="product_id" hidden>{{$product->id}}</p>
                                <div class="products-item-img-container--text--one">
                                    <div >
                                        <div class="products-item-img">
                                            <img width="175" height="132" src="http://5.35.94.70/storage/{{$product->image_path}}"/>
                                        </div>
                                    </div>
                                    <div >
                                        <span class="products-item-name">{{$product->name}}</span>
                                    </div>
                                    <div >
                                        <div style="margin-top: 20px">

                                            <span class="products-item-price" style="text-align: center;">{{$product->price}} ₽</span>
                                            @if(\Auth::check())
                                                <form action="{{route("add-to-card", $product->id)}}" method="get">
                                                   @csrf
                                                    <button type="submit" class="products-item-button">В корзину</button>
                                                </form>

                                            @endif

                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                        </div>

                {{--                    <div class="products-pagination-container">--}}
                {{--                        --}}
                {{--                    </div>--}}
                {{$products->links('pagination::bootstrap-4')}}
{{--                    </div>--}}





 <!-- --------------------------------------------------------- -->


 <div class="catalog-products-block block__one">
                <div class="catalog-products-container">
                    @foreach($products as $product)
                        <div class="products-item--2">
                            <div class="products__container--2">
                                <div class="products-item-img-container--text">
                                    <div >
                                        <div class="products-item-img">
                                            <img width="175" height="132" src="http://5.35.94.70/storage/{{$product->image_path}}"/>
                                        </div>
                                    </div>
                                    <div >
                                        <span class="products-item-name">{{$product->name}}</span>
                                    </div>
                                </div>
                                <div class="products-item-price-cart--2">
                                    <div style="margin-top: 20px">

                                        <span class="products-item-price">{{$product->price}} ₽</span>
                                        @if(\Illuminate\Support\Facades\Auth::check())
                                            <button class="products-item-button">В корзину</button>
                                        @endif

                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

     {{--                    <div class="products-pagination-container">--}}
     {{--                        --}}
     {{--                    </div>--}}
     {{$products->links('pagination::bootstrap-4')}}


{{--                <div class="products-pagination-container">--}}
{{--                    <button class="btn-pagination-left">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18" fill="none">--}}
{{--                            <path d="M7.82759 17.6101L0.365287 9.84313C0.104368 9.58763 5.47987e-07 9.28104 5.59155e-07 9.02555C5.72557e-07 8.71896 0.104368 8.41237 0.313104 8.15687L7.82759 0.389879C8.29724 -0.121107 9.08 -0.121107 9.60184 0.338781C10.1237 0.798669 10.1237 1.56515 9.65402 2.07613L2.97448 9.02555L9.65402 15.9239C10.1237 16.4349 10.1237 17.2013 9.60184 17.6612C9.08 18.1211 8.29724 18.1211 7.82759 17.6101Z" fill="white"/>--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                    <ul class="urls-pagination">--}}
{{--                        <li class="urls-pagination-item-active">--}}
{{--                            <a href="/" class="urls-pagination-item-url-active">1</a>--}}
{{--                        </li>--}}
{{--                        <li class="urls-pagination-item">--}}
{{--                            <a href="/" class="urls-pagination-item-url">2</a>--}}
{{--                        </li>--}}
{{--                        <li class="urls-pagination-item">--}}
{{--                            <a href="/" class="urls-pagination-item-url">3</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <button class="btn-pagination-right">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18" fill="none">--}}
{{--                            <path d="M2.17241 17.6101L9.63471 9.84313C9.89563 9.58763 10 9.28104 10 9.02555C10 8.71896 9.89563 8.41237 9.6869 8.15687L2.17241 0.389879C1.70276 -0.121107 0.919999 -0.121107 0.39816 0.338781C-0.123679 0.798669 -0.123679 1.56515 0.345976 2.07613L7.02552 9.02555L0.345977 15.9239C-0.123678 16.4349 -0.123678 17.2013 0.398161 17.6612C0.92 18.1211 1.70276 18.1211 2.17241 17.6101Z" fill="white"/>--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                </div>--}}



            </div>





                <!-- --------------------------------------------------- -->


                <div class="catalog-products-block block__three">
                    <div class="catalog-products-container">
                        @foreach($products as $product)
                            <div class="products-item--3">
                                <div style="display: flex; justify-content: space-between;">
                                    <div style="display:flex; flex-direction: column; align-items: flex-start; gap: 10px">
                                        <div>
                                            {{$product->producer->name}}
                                        </div>
                                        <span style="color:#5D5D5D; font-size:20px; font-weight: 600">{{$product->name}}</span>
                                        <div>Код: {{$product->article}}</div>
                                    </div>

                                    <div >
                                        <div style="float: right; margin-right: 20px">
                                            <span class="products-item-price">{{$product->price}} ₽</span>
                                            @if(\Illuminate\Support\Facades\Auth::check())
                                                <button class="products-item-button">В корзину</button>
                                            @endif

                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>

{{--                    <div class="products-pagination-container">--}}
{{--                        --}}
{{--                    </div>--}}
                    {{$products->links('pagination::bootstrap-4')}}

{{--                    <div class="products-pagination-container">--}}
{{--                        <button class="btn-pagination-left">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18" fill="none">--}}
{{--                                <path d="M7.82759 17.6101L0.365287 9.84313C0.104368 9.58763 5.47987e-07 9.28104 5.59155e-07 9.02555C5.72557e-07 8.71896 0.104368 8.41237 0.313104 8.15687L7.82759 0.389879C8.29724 -0.121107 9.08 -0.121107 9.60184 0.338781C10.1237 0.798669 10.1237 1.56515 9.65402 2.07613L2.97448 9.02555L9.65402 15.9239C10.1237 16.4349 10.1237 17.2013 9.60184 17.6612C9.08 18.1211 8.29724 18.1211 7.82759 17.6101Z" fill="white"/>--}}
{{--                            </svg>--}}
{{--                        </button>--}}
{{--                        <ul class="urls-pagination">--}}
{{--                            <li class="urls-pagination-item-active">--}}
{{--                                <a href="/" class="urls-pagination-item-url-active">1</a>--}}
{{--                            </li>--}}
{{--                            <li class="urls-pagination-item">--}}
{{--                                <a href="/" class="urls-pagination-item-url">2</a>--}}
{{--                            </li>--}}
{{--                            <li class="urls-pagination-item">--}}
{{--                                <a href="/" class="urls-pagination-item-url">3</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <button class="btn-pagination-right">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18" fill="none">--}}
{{--                                <path d="M2.17241 17.6101L9.63471 9.84313C9.89563 9.58763 10 9.28104 10 9.02555C10 8.71896 9.89563 8.41237 9.6869 8.15687L2.17241 0.389879C1.70276 -0.121107 0.919999 -0.121107 0.39816 0.338781C-0.123679 0.798669 -0.123679 1.56515 0.345976 2.07613L7.02552 9.02555L0.345977 15.9239C-0.123678 16.4349 -0.123678 17.2013 0.398161 17.6612C0.92 18.1211 1.70276 18.1211 2.17241 17.6101Z" fill="white"/>--}}
{{--                            </svg>--}}
{{--                        </button>--}}
{{--                    </div>--}}



                </div>

                </div>


        </div>
    </div>
</section>

<script src="./js/catalog.js" ></script>
<script src="./js/filterCatalog.js" ></script>




@endsection
