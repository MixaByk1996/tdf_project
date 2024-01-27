@extends('layouts.app')
@section('title-block')Главная@endsection
@section('content')
<section class="payment-section">
<div class="catalog-mainitems-block">
    <h1 class="catalog-main-text">Оплата</h1>

    <div class="catalog-allblocks">
        <div class="catalog-main-grides">
            <span class="catalog-main-grides-text">Главная/Корзина</span>
            <div class="show-products-container">


            </div>
        </div>

        @if(\Illuminate\Support\Facades\Auth::check())
            <div class="cart-block" id="myBtn">
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



<div>

            <div class="products-item--cart">

                <div class="products-item-block--cart">
                    <div>
                        <div class="products-item-img">
                            <img src="/img/products/1.png" />
                        </div>
                    </div>
                    <div class="products-item-info--cart">
                    <div class="products-item-material--cart">
                            <span>BLUM</span>
                            <div class="cross"></div>
                        </div>
                        <span class="products-item-text--cart">CLIP ответная планка, прям. (20/32 мм), 0
                            мм</span>
                        <span>Код: 175H3100.21</span>
                        <span>Тип: CLIP</span>
                        <div class="products-item-material--cart">
                            <span> Материал: сталь</span>
                            <span>1 компл</span>
                        </div>
                        <div class="products-item-material--cart">
                            <span> Количество в наборе:1</span>
                            <span>823.36 ₽</span>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>


            <div class="products-item--cart">
                <div class="products-item-block--cart">
                    <div>
                        <div class="products-item-img">
                            <img src="/img/products/1.png" />
                        </div>
                    </div>
                    <div class="products-item-info--cart">
                    <div class="products-item-material--cart">
                            <span>BLUM</span>
                            <div class="cross"></div>
                        </div>
                        <span class="products-item-text--cart">CLIP ответная планка, прям. (20/32 мм), 0
                            мм</span>
                        <span>Код: 175H3100.21</span>
                        <span>Тип: CLIP</span>
                        <div class="products-item-material--cart">
                            <span> Материал: сталь</span>
                            <span>1 компл</span>
                        </div>
                        <div class="products-item-material--cart">
                            <span> Количество в наборе:1</span>
                            <span>823.36 ₽</span>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>

</div>
            <div class="products-item__bottom-cart">
                <div class="products-item__bottom-cart-text">
                <img src="/img/iconTruck.svg" alt="">
                <div>Добавьте в корзину товаров на 3 297,48 ₽ для бесплатной доставки по Москве</div>
            </div>
                <div class="products-item__bottom-cart-summary">
                    <div class="summary--cart">
                        <span> Сумма(2товара)</span>
                        <span>1702.52</span>
                        </div>
                    <button class="btn-cart">Перейти в корзину</button>
                </div>
            </div>


        </div>
        </div>
        </div>
    </div>
</div>

    <div class="payment-delivery-container blur__modal">
        <div class="payment-deliver">
            <input class="payment-input" placeholder="ФИО"/>
            <input class="payment-input" placeholder="Город"/>
            <div class="payment-input-container">
                <input class="payment-input-small" placeholder="Улица"/>
                <input class="payment-input-small" placeholder="Дом"/>
            </div>
            <div class="payment-input-container">
                <input class="payment-input-small" placeholder="Квартира"/>
                <input class="payment-input-small" placeholder="Индекс"/>
            </div>
            <div class="payment-input-container">
                <input class="payment-input-small" placeholder="Номер телефона"/>
                <input class="payment-input-small" placeholder="Email"/>
            </div>
        </div>
        <div class="payment-last-block">
            <div class="payment-final">
                <span class="payment-final-text">Итого</span>
                <!-- <div class="payment-final-dotted"></div> -->
                <span class="payment-final-text-price">1702.52 ₽</span>
            </div>
            <div class="payment-block-finalyze">
                <div class="payment-sumall-container">
                    <div class="payment-sumall-part-container">
                        <span class="payment-sumall-text">Скидка</span>
                        <!-- <div class="payment-sumall-dotted-first"></div> -->
                        <span class="payment-sumall-price">0.0 ₽</span>
                    </div>
                    <div class="payment-sumall-part-container">
                        <span class="payment-sumall-text">Стоимость доставки</span>
                        <!-- <div class="payment-sumall-dotted-last"></div> -->
                        <span class="payment-sumall-price">0.0 ₽</span>
                    </div>
                </div>
                <div class="payment-types-container">
                    <span class="payment-types-text">Способ оплаты</span>
                    <div class="payment-types-check-container">
                        <input class="payment-types-chekbox" type="checkbox" checked="checked">
                        <label class="payment-types-name">Я подтверждаю, что мой адрес верен на 100%, и не буду привлекать <em>службу поддержки TDFurnitur</em> к ответственности, если это отправление будет отправлено по неправильному адресу. *</label>
                    </div>
                    <div class="payment-card-types">
                        <div class="payment-cart">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" viewBox="0 0 30 18" fill="none">
                                <circle cx="9" cy="9" r="9" fill="#E80B26"/>
                                <circle cx="21" cy="9" r="9" fill="#F59D31"/>
                                <path d="M15 15.7083C16.8413 14.0603 18 11.6655 18 9C18 6.33447 16.8413 3.9397 15 2.29175C13.1587 3.9397 12 6.33447 12 9C12 11.6655 13.1587 14.0603 15 15.7083Z" fill="#FC6020"/>
                            </svg>
                        </div>
                        <div class="payment-cart">
                            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="14" viewBox="0 0 38 14" fill="none">
                                <path d="M19.6045 5.06408C19.5845 6.55974 21.0136 7.39443 22.0902 7.89066C23.1964 8.39986 23.5679 8.72635 23.5637 9.18164C23.5552 9.87855 22.6813 10.1861 21.8633 10.198C20.4363 10.219 19.6066 9.83362 18.947 9.54207L18.4329 11.8175C19.0947 12.1061 20.3201 12.3577 21.591 12.3687C24.5738 12.3687 26.5254 10.9758 26.5359 8.81621C26.5476 6.07549 22.5282 5.92373 22.5557 4.69865C22.5652 4.32723 22.9399 3.93085 23.7611 3.83001C24.1674 3.77909 25.2894 3.74015 26.5613 4.29428L27.0605 2.09272C26.3766 1.85709 25.4973 1.63144 24.4028 1.63144C21.5952 1.63144 19.6204 3.04324 19.6045 5.06408ZM31.8577 1.82115C31.3131 1.82115 30.854 2.12168 30.6492 2.58296L26.3882 12.2069H29.3689L29.9621 10.6563H33.6046L33.9487 12.2069H36.5758L34.2833 1.82115H31.8577ZM32.2747 4.62676L33.1349 8.52666H30.779L32.2747 4.62676ZM15.9905 1.82115L13.641 12.2069H16.4813L18.8298 1.82115H15.9905ZM11.7886 1.82115L8.83217 8.89009L7.6363 2.87949C7.49592 2.20854 6.94178 1.82115 6.32643 1.82115H1.49333L1.42578 2.12268C2.41794 2.32636 3.54521 2.65484 4.22811 3.00629C4.64609 3.22096 4.76536 3.40867 4.90257 3.91887L7.16766 12.2069H10.1695L14.7714 1.82115H11.7886Z" fill="url(#paint0_linear_122_403)"/>
                                <defs>
                                    <linearGradient id="paint0_linear_122_403" x1="17.5857" y1="12.5841" x2="17.8797" y2="1.55586" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#222357"/>
                                        <stop offset="1" stop-color="#254AA5"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <button class="payment-cart-btn">Оплатить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<script>
        document.addEventListener('DOMContentLoaded', function() {

            document.querySelector('.catalog-main-text').style.opacity = 1;
        });
</script>
