<div style="max-width:70%">

<div class="catalog-main-grides">
                    <span class="catalog-main-grides-text"><a href="/">Главная</a>/<a
                            href="{{route('with-system', ['id' => 1])}}">Каталог</a></span>
                    <div class="show-products-container">
                        <div class="show-products-items">
                            <svg id="svgOne" xmlns="http://www.w3.org/2000/svg" width="16" height="14"
                                viewBox="0 0 16 14" fill="#EA600A">
                                <path
                                    d="M14 0H2C0.875 0 0 0.90625 0 2V12C0 13.125 0.875 14 2 14H14C15.0938 14 16 13.125 16 12V2C16 0.90625 15.0938 0 14 0ZM2 2H7V6H2V2ZM2 12V8H7V12H2ZM14 12H9V8H14V12ZM14 6H9V2H14V6Z" />
                            </svg>
                            <svg id="svgTwo" xmlns="http://www.w3.org/2000/svg" width="16" height="14"
                                viewBox="0 0 16 14" fill="white">
                                <path
                                    d="M1.5 5.5C0.65625 5.5 0 6.1875 0 7C0 7.84375 0.65625 8.5 1.5 8.5C2.3125 8.5 3 7.84375 3 7C3 6.1875 2.3125 5.5 1.5 5.5ZM1.5 10.5C0.65625 10.5 0 11.1875 0 12C0 12.8438 0.65625 13.5 1.5 13.5C2.3125 13.5 3 12.8438 3 12C3 11.1875 2.3125 10.5 1.5 10.5ZM1.5 0.5C0.65625 0.5 0 1.1875 0 2C0 2.84375 0.65625 3.5 1.5 3.5C2.3125 3.5 3 2.84375 3 2C3 1.1875 2.3125 0.5 1.5 0.5ZM6 3H15C15.5312 3 16 2.5625 16 2.03125C16 1.53125 15.5312 1 15 1H6C5.4375 1 5 1.46875 5 2C5 2.5 5.4375 3 6 3ZM15 6H6C5.4375 6 5 6.46875 5 7C5 7.5625 5.4375 8 6 8H15C15.5312 8 16 7.5625 16 7C16 6.46875 15.5312 6 15 6ZM15 11H6C5.4375 11 5 11.4688 5 12C5 12.5625 5.4375 13 6 13H15C15.5312 13 16 12.5625 16 12C16 11.4688 15.5312 11 15 11Z" />
                            </svg>
                            <svg id="svgThree" xmlns="http://www.w3.org/2000/svg" width="16" height="13"
                                viewBox="0 0 16 14" fill="white">
                                <path
                                    d="M1 2.5H15C15.5312 2.5 16 2.0625 16 1.53125C16 1.03125 15.5312 0.5 15 0.5H1C0.4375 0.5 0 0.96875 0 1.5C0 2 0.4375 2.5 1 2.5ZM15 5.5H1C0.4375 5.5 0 5.96875 0 6.5C0 7.0625 0.4375 7.5 1 7.5H15C15.5312 7.5 16 7.0625 16 6.5C16 5.96875 15.5312 5.5 15 5.5ZM15 10.5H1C0.4375 10.5 0 10.9688 0 11.5C0 12.0625 0.4375 12.5 1 12.5H15C15.5312 12.5 16 12.0625 16 11.5C16 10.9688 15.5312 10.5 15 10.5Z" />
                            </svg>
                        </div>
                        <div class="count-tovars-container">
                            <span class="count-tovars-text">Количество:</span>
                            <span class="count-tovars-cnt">{{$count ?? 1}}</span>
                        </div>
                    </div>
                </div>
                
<div class="catalog-products-block block__two">


        <div class="catalog-products-container">
            @if($count == 0)
                <div>
                    <h1 style="color: white; text-align:center">
                        Нам не удалось найти товар по вашему запросу. Попробуйте другой запрос или оставьте заявку, чтобы наш менеджер вам помог
                    </h1>
                </div>
            @endif

            @foreach($products as $product)
                <div class="products-item--1">
                    <p id="product_id" hidden>{{$product->id}}</p>
                    <div class="products-item-img-container--text--one">
                        <div >
                            <div class="products-item-img">
                                <img width="120" height="120" src="http://5.35.94.70/storage/{{$product->image_path}}"/>
                            </div>
                        </div>
                        <div >
                            <span class="products-item-name">{{$product->name}}</span>
                        </div>
                        <div >
                            <div style="margin-top: 20px">

                                <span class="products-item-price" style="text-align: center;">{{$product->price}} EUR</span>
{{--                                            @if(\Auth::check())--}}
                                    <form action="{{route("add-to-card", $product->id)}}" method="get">
                                       @csrf
                                        <button type="submit" class="products-item-button">В корзину</button>
                                    </form>

{{--                                            @endif--}}

                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

            </div>

    {{--                    <div class="products-pagination-container">--}}
    {{--                        --}}
    {{--                    </div>--}}
    <div class="row">
        <div class="col-md-12">
            {{ $products->onEachSide(3)->links('pagination::simple-tailwind') }}
        </div>
    </div>

    {{--                    </div>--}}</div>





<!-- --------------------------------------------------------- -->


<div class="catalog-products-block block__one">
    <div class="catalog-products-container">
        @if($count == 0)
            <div>
                <h3 style="color: white">
                    Нам не удалось найти товар по вашему запросу. Попробуйте другой запрос или оставьте заявку, чтобы наш менеджер вам помог
                </h3>
            </div>
        @endif
        @foreach($products as $product)
            <div class="products-item--2">
                <p id="product_id" hidden>{{$product->id}}</p>
                <div class="products__container--2">
                    <div class="products-item-img-container--text">
                        <div >
                            <div class="products-item-img">
                                <img width="120" height="120" src="http://5.35.94.70/storage/{{$product->image_path}}"/>
                            </div>
                        </div>
                        <div >
                            <span class="products-item-name">{{$product->name}}</span>
                        </div>
                    </div>
                    <div class="products-item-price-cart--2">
                        <div >
                            <div style="margin-top: 20px">

                                <span class="products-item-price" style="text-align: center;">{{$product->price}} EUR</span>
                                {{--                                            @if(\Auth::check())--}}
                                <form action="{{route("add-to-card", $product->id)}}" method="get">
                                    @csrf
                                    <button type="submit" class="products-item-button">В корзину</button>
                                </form>

                                {{--                                            @endif--}}

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>


<div class="row">
<div class="col-md-12">
 {{ $products->onEachSide(3)->links('pagination::simple-tailwind') }}
</div>
</div>




</div>





    <!-- --------------------------------------------------- -->


    <div class="catalog-products-block block__three">
        <div class="catalog-products-container">
            @if($count == 0)
                <div>
                    <h3 style="color: white">
                        Нам не удалось найти товар по вашему запросу. Попробуйте другой запрос или оставьте заявку, чтобы наш менеджер вам помог
                    </h3>
                </div>
            @endif
            @foreach($products as $product)
                <div class="products-item--3">
                    <p id="product_id" hidden>{{$product->id}}</p>
                    <div style="display: flex; justify-content: space-between;">
                        <div style="display:flex; flex-direction: column; align-items: flex-start; gap: 10px">
                            <div>
                                {{$product->producer->name ?? ''}}
                            </div>
                            <span style="color:#5D5D5D; font-size:20px; font-weight: 600">{{$product->name}}</span>
                            <div>Код: {{$product->article}}</div>
                        </div>

                        <div >
                            <div style="margin-top: 20px">

                                <span class="products-item-price" style="text-align: center;">{{$product->price}} EUR</span>
                                {{--                                            @if(\Auth::check())--}}
                                <form action="{{route("add-to-card", $product->id)}}" method="get">
                                    @csrf
                                    <button type="submit" class="products-item-button">В корзину</button>
                                </form>

                                {{--                                            @endif--}}

                            </div>

                        </div>
                    </div>
                </div>
            @endforeach


        </div>

        <div class="row">
            <div class="col-md-12">
                {{ $products->onEachSide(3)->links('pagination::simple-tailwind') }}
            </div>
        </div>







    </div>

</div>
