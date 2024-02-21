<div class="cart-block" id="myBtn" onclick="{{url('cart')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="22" viewBox="0 0 25 22" fill="none">
                        <path
                            d="M20.1172 17.875C18.9441 17.875 18.0751 18.8203 18.0751 19.9375C18.0751 21.0977 18.9875 22 20.1172 22C21.2034 22 22.1593 21.0977 22.1593 19.9375C22.1593 18.8203 21.2903 17.875 20.1172 17.875ZM7.60369 17.875C6.43055 17.875 5.56156 18.8203 5.56156 19.9375C5.56156 21.0977 6.474 22 7.60369 22C8.68993 22 9.64583 21.0977 9.64583 19.9375C9.64583 18.8203 8.77683 17.875 7.60369 17.875ZM24.7229 1.93359C24.4622 1.58984 24.0711 1.375 23.5932 1.375H5.25741L5.17051 0.859375C5.08361 0.386719 4.64912 0 4.17117 0H0.999343C0.434497 0 0 0.472656 0 1.03125C0 1.54688 0.434497 2.0625 0.999343 2.0625H3.25873L5.86571 15.6836C5.99606 16.1562 6.43055 16.5 6.95195 16.5H21.2034C21.7683 16.5 22.2462 16.0703 22.2462 15.5117C22.2462 14.9102 21.7683 14.4375 21.2034 14.4375H7.77749L7.38644 12.375H21.2469C21.8552 12.375 22.3766 11.9883 22.5504 11.3867L24.9401 3.17969C25.0705 2.75 24.9836 2.27734 24.7229 1.93359Z"
                            fill="white"></path>
                    </svg>
                    <div class="cart-count-block">
                        <span class="cart-count-text">{{count($cards) ?? 0}}</span>
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
                                        {{-- <div class="cart-product-item">--}}
                                            {{-- <input class="cart-product-chekbox" type="checkbox"
                                                checked="checked">--}}
                                            {{-- </div>--}}
                                        <div class="cart-product-imgcontainer">
                                            <img class="cart-product-img"
                                                src="http://5.35.94.70/storage/{{$card->product->image_path}}" />
                                            <button class="cart-product-deletes-btn--two">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path d="M1 1L23 22.5" stroke="#EA600A" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                    <path d="M23 1L1 22.5" stroke="#EA600A" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="cart-product-textcontainer">
                                            <div class="cart-product-textmain-container">
                                                <span class="cart-product-serialtext">{{$card->product->producer->name
                                                    ?? ""}}</span>
                                                <span class="cart-product-nametext">{{$card->product->name}}</span>
                                            </div>
                                            <div class="cart-product-charactercontainer">
                                                <div class="cart-product-character-item">
                                                    <span class="cart-product-character-name">Код: </span>
                                                    <span
                                                        class="cart-product-character-value">{{$card->product->article}}</span>
                                                </div>
                                                <div class="cart-product-character-item">
                                                    <span class="cart-product-character-name">Тип: </span>
                                                    <span
                                                        class="cart-product-character-value">{{$card->product->category->name
                                                        ?? 'Не указан'}}</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-product-actions">
                                        <div class="cart-product-deletes-block">
                                            <form action="{{route(" remove-modal", $card->product->id)}}" method="get">
                                                @csrf
                                                <button type="submit" class="cart-product-deletes-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path d="M1 1L23 22.5" stroke="#EA600A" stroke-width="1.5"
                                                            stroke-linecap="round" />
                                                        <path d="M23 1L1 22.5" stroke="#EA600A" stroke-width="1.5"
                                                            stroke-linecap="round" />
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