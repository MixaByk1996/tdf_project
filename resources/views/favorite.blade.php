<div class="catalog-allproducts-block--favorite">



<!-- -------------------------------------- -->
<!--
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
                        </div> -->
<div class="catalog-products-block">
        <div class="catalog-products-container">
            @foreach($products as $product)
                <div class="products-item--1">
                    <div class="products-item-img-container--text--one">
                        <div >
                            <div class="products-item-img">
                                <img src="/img/products/1.png"/>
                            </div>
                        </div>
                        <div >
                            <span class="products-item-name">{{$product->product->name}}</span>
                        </div>
                        <div >
                            <div style="margin-top: 20px">

                                <span class="products-item-price" style="text-align: center;">{{$product->product->price}} ₽</span>
                                @if(\Illuminate\Support\Facades\Auth::check())

                                    <button class="products-item-button">В корзину</button>
                                @endif

                            </div>

                        </div>
                    </div>
                </div>
            @endforeach





            </div>

            <div class="products-pagination-container">
            <button class="btn-pagination-left">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18" fill="none">
                    <path d="M7.82759 17.6101L0.365287 9.84313C0.104368 9.58763 5.47987e-07 9.28104 5.59155e-07 9.02555C5.72557e-07 8.71896 0.104368 8.41237 0.313104 8.15687L7.82759 0.389879C8.29724 -0.121107 9.08 -0.121107 9.60184 0.338781C10.1237 0.798669 10.1237 1.56515 9.65402 2.07613L2.97448 9.02555L9.65402 15.9239C10.1237 16.4349 10.1237 17.2013 9.60184 17.6612C9.08 18.1211 8.29724 18.1211 7.82759 17.6101Z" fill="white"/>
                </svg>
            </button>
            <ul class="urls-pagination">
                <li class="urls-pagination-item-active">
                    <a href="/" class="urls-pagination-item-url-active">1</a>
                </li>
                <li class="urls-pagination-item">
                    <a href="/" class="urls-pagination-item-url">2</a>
                </li>
                <li class="urls-pagination-item">
                    <a href="/" class="urls-pagination-item-url">3</a>
                </li>
            </ul>
            <button class="btn-pagination-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18" fill="none">
                    <path d="M2.17241 17.6101L9.63471 9.84313C9.89563 9.58763 10 9.28104 10 9.02555C10 8.71896 9.89563 8.41237 9.6869 8.15687L2.17241 0.389879C1.70276 -0.121107 0.919999 -0.121107 0.39816 0.338781C-0.123679 0.798669 -0.123679 1.56515 0.345976 2.07613L7.02552 9.02555L0.345977 15.9239C-0.123678 16.4349 -0.123678 17.2013 0.398161 17.6612C0.92 18.1211 1.70276 18.1211 2.17241 17.6101Z" fill="white"/>
                </svg>
            </button>
        </div>
        </div>





<!-- --------------------------------------------------------- -->

<!--
<div class="catalog-products-block block__one">
    <div class="catalog-products-container">
    <div class="products-item--2">
            <div class="products__container--2">
            <div class="products-item-img-container--text">
                <div >
                    <div class="products-item-img">
                        <img src="/img/products/1.png"/>
                    </div>
                </div>
                <div >
                    <span class="products-item-name">CLIP ответная планка, прям. (20/32 мм), 0 мм</span>
                </div>
            </div>
            <div class="products-item-price-cart--2">
                                                    <div style="margin-top: 20px">

                        <span class="products-item-price">823.36 ₽</span>
                        <button class="products-item-button">В корзину</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="products-item--2">
            <div class="products__container--2">
            <div class="products-item-img-container--text">
                <div >
                    <div class="products-item-img">
                        <img src="/img/products/1.png"/>
                    </div>
                </div>
                <div >
                    <span class="products-item-name">CLIP ответная планка, прям. (20/32 мм), 0 мм</span>
                </div>
            </div>
            <div class="products-item-price-cart--2">
                                                    <div style="margin-top: 20px">

                        <span class="products-item-price">823.36 ₽</span>
                        <button class="products-item-button">В корзину</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="products-item--2">
            <div class="products__container--2">
            <div class="products-item-img-container--text">
                <div >
                    <div class="products-item-img">
                        <img src="/img/products/1.png"/>
                    </div>
                </div>
                <div >
                    <span class="products-item-name">CLIP ответная планка, прям. (20/32 мм), 0 мм</span>
                </div>
            </div>
            <div class="products-item-price-cart--2">
                                                    <div style="margin-top: 20px">

                        <span class="products-item-price">823.36 ₽</span>
                        <button class="products-item-button">В корзину</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="products-item--2">
            <div class="products__container--2">
            <div class="products-item-img-container--text">
                <div >
                    <div class="products-item-img">
                        <img src="/img/products/1.png"/>
                    </div>
                </div>
                <div >
                    <span class="products-item-name">CLIP ответная планка, прям. (20/32 мм), 0 мм</span>
                </div>
            </div>
            <div class="products-item-price-cart--2">
                                                    <div style="margin-top: 20px">

                        <span class="products-item-price">823.36 ₽</span>
                        <button class="products-item-button">В корзину</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="products-item--2">
            <div class="products__container--2">
            <div class="products-item-img-container--text">
                <div >
                    <div class="products-item-img">
                        <img src="/img/products/1.png"/>
                    </div>
                </div>
                <div >
                    <span class="products-item-name">CLIP ответная планка, прям. (20/32 мм), 0 мм</span>
                </div>
            </div>
            <div class="products-item-price-cart--2">
                                                    <div style="margin-top: 20px">

                        <span class="products-item-price">823.36 ₽</span>
                        <button class="products-item-button">В корзину</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="products-item--2">
            <div class="products__container--2">
            <div class="products-item-img-container--text">
                <div >
                    <div class="products-item-img">
                        <img src="/img/products/1.png"/>
                    </div>
                </div>
                <div >
                    <span class="products-item-name">CLIP ответная планка, прям. (20/32 мм), 0 мм</span>
                </div>
            </div>
            <div class="products-item-price-cart--2">
                                                    <div style="margin-top: 20px">

                        <span class="products-item-price">823.36 ₽</span>
                        <button class="products-item-button">В корзину</button>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <div class="products-pagination-container">
        <button class="btn-pagination-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18" fill="none">
                <path d="M7.82759 17.6101L0.365287 9.84313C0.104368 9.58763 5.47987e-07 9.28104 5.59155e-07 9.02555C5.72557e-07 8.71896 0.104368 8.41237 0.313104 8.15687L7.82759 0.389879C8.29724 -0.121107 9.08 -0.121107 9.60184 0.338781C10.1237 0.798669 10.1237 1.56515 9.65402 2.07613L2.97448 9.02555L9.65402 15.9239C10.1237 16.4349 10.1237 17.2013 9.60184 17.6612C9.08 18.1211 8.29724 18.1211 7.82759 17.6101Z" fill="white"/>
            </svg>
        </button>
        <ul class="urls-pagination">
            <li class="urls-pagination-item-active">
                <a href="/" class="urls-pagination-item-url-active">1</a>
            </li>
            <li class="urls-pagination-item">
                <a href="/" class="urls-pagination-item-url">2</a>
            </li>
            <li class="urls-pagination-item">
                <a href="/" class="urls-pagination-item-url">3</a>
            </li>
        </ul>
        <button class="btn-pagination-right">
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18" fill="none">
                <path d="M2.17241 17.6101L9.63471 9.84313C9.89563 9.58763 10 9.28104 10 9.02555C10 8.71896 9.89563 8.41237 9.6869 8.15687L2.17241 0.389879C1.70276 -0.121107 0.919999 -0.121107 0.39816 0.338781C-0.123679 0.798669 -0.123679 1.56515 0.345976 2.07613L7.02552 9.02555L0.345977 15.9239C-0.123678 16.4349 -0.123678 17.2013 0.398161 17.6612C0.92 18.1211 1.70276 18.1211 2.17241 17.6101Z" fill="white"/>
            </svg>
        </button>
    </div>



</div>

 -->



    <!-- --------------------------------------------------- -->
<!--

    <div class="catalog-products-block block__three">
        <div class="catalog-products-container">
            <div class="products-item--3">
                <div style="display: flex; justify-content: space-between;">
                    <div style="display:flex; flex-direction: column; align-items: flex-start; gap: 10px">
                        <div>BLUM</div>
                        <span style="color:#5D5D5D; font-size:20px; font-weight: 600">CLIP ответная планка, прям. (20/32 мм), 0 мм</span>
                        <div>Код: 175H31000.21</div>
                    </div>

                    <div >
                        <div style="float: right; margin-right: 20px">
                            <span class="products-item-price">823.36 ₽</span>
                            <button class="products-item-button">В корзину</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="products-item--3">
                <div style="display: flex; justify-content: space-between;">
                    <div style="display:flex; flex-direction: column; align-items: flex-start; gap: 10px">
                        <div>BLUM</div>
                        <span style="color:#5D5D5D; font-size:20px; font-weight: 600">CLIP ответная планка, прям. (20/32 мм), 0 мм</span>
                        <div>Код: 175H31000.21</div>
                    </div>

                    <div >
                        <div style="float: right; margin-right: 20px">
                            <span class="products-item-price">823.36 ₽</span>
                            <button class="products-item-button">В корзину</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="products-item--3">
                <div style="display: flex; justify-content: space-between;">
                    <div style="display:flex; flex-direction: column; align-items: flex-start; gap: 10px">
                        <div>BLUM</div>
                        <span style="color:#5D5D5D; font-size:20px; font-weight: 600">CLIP ответная планка, прям. (20/32 мм), 0 мм</span>
                        <div>Код: 175H31000.21</div>
                    </div>

                    <div >
                        <div style="float: right; margin-right: 20px">
                            <span class="products-item-price">823.36 ₽</span>
                            <button class="products-item-button">В корзину</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="products-item--3">
                <div style="display: flex; justify-content: space-between;">
                    <div style="display:flex; flex-direction: column; align-items: flex-start; gap: 10px">
                        <div>BLUM</div>
                        <span style="color:#5D5D5D; font-size:20px; font-weight: 600">CLIP ответная планка, прям. (20/32 мм), 0 мм</span>
                        <div>Код: 175H31000.21</div>
                    </div>

                    <div >
                        <div style="float: right; margin-right: 20px">
                            <span class="products-item-price">823.36 ₽</span>
                            <button class="products-item-button">В корзину</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="products-item--3">
                <div style="display: flex; justify-content: space-between;">
                    <div style="display:flex; flex-direction: column; align-items: flex-start; gap: 10px">
                        <div>BLUM</div>
                        <span style="color:#5D5D5D; font-size:20px; font-weight: 600">CLIP ответная планка, прям. (20/32 мм), 0 мм</span>
                        <div>Код: 175H31000.21</div>
                    </div>

                    <div >
                        <div style="float: right; margin-right: 20px">
                            <span class="products-item-price">823.36 ₽</span>
                            <button class="products-item-button">В корзину</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="products-item--3">
                <div style="display: flex; justify-content: space-between;">
                    <div style="display:flex; flex-direction: column; align-items: flex-start; gap: 10px">
                        <div>BLUM</div>
                        <span style="color:#5D5D5D; font-size:20px; font-weight: 600">CLIP ответная планка, прям. (20/32 мм), 0 мм</span>
                        <div>Код: 175H31000.21</div>
                    </div>

                    <div >
                        <div style="float: right; margin-right: 20px">
                            <span class="products-item-price">823.36 ₽</span>
                            <button class="products-item-button">В корзину</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="products-item--3">
                <div style="display: flex; justify-content: space-between;">
                    <div style="display:flex; flex-direction: column; align-items: flex-start; gap: 10px">
                        <div>BLUM</div>
                        <span style="color:#5D5D5D; font-size:20px; font-weight: 600">CLIP ответная планка, прям. (20/32 мм), 0 мм</span>
                        <div>Код: 175H31000.21</div>
                    </div>

                    <div >
                        <div style="float: right; margin-right: 20px">
                            <span class="products-item-price">823.36 ₽</span>
                            <button class="products-item-button">В корзину</button>
                        </div>

                    </div>
                </div>
            </div>


        </div>




        <div class="products-pagination-container">
            <button class="btn-pagination-left">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18" fill="none">
                    <path d="M7.82759 17.6101L0.365287 9.84313C0.104368 9.58763 5.47987e-07 9.28104 5.59155e-07 9.02555C5.72557e-07 8.71896 0.104368 8.41237 0.313104 8.15687L7.82759 0.389879C8.29724 -0.121107 9.08 -0.121107 9.60184 0.338781C10.1237 0.798669 10.1237 1.56515 9.65402 2.07613L2.97448 9.02555L9.65402 15.9239C10.1237 16.4349 10.1237 17.2013 9.60184 17.6612C9.08 18.1211 8.29724 18.1211 7.82759 17.6101Z" fill="white"/>
                </svg>
            </button>
            <ul class="urls-pagination">
                <li class="urls-pagination-item-active">
                    <a href="/" class="urls-pagination-item-url-active">1</a>
                </li>
                <li class="urls-pagination-item">
                    <a href="/" class="urls-pagination-item-url">2</a>
                </li>
                <li class="urls-pagination-item">
                    <a href="/" class="urls-pagination-item-url">3</a>
                </li>
            </ul>
            <button class="btn-pagination-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18" fill="none">
                    <path d="M2.17241 17.6101L9.63471 9.84313C9.89563 9.58763 10 9.28104 10 9.02555C10 8.71896 9.89563 8.41237 9.6869 8.15687L2.17241 0.389879C1.70276 -0.121107 0.919999 -0.121107 0.39816 0.338781C-0.123679 0.798669 -0.123679 1.56515 0.345976 2.07613L7.02552 9.02555L0.345977 15.9239C-0.123678 16.4349 -0.123678 17.2013 0.398161 17.6612C0.92 18.1211 1.70276 18.1211 2.17241 17.6101Z" fill="white"/>
                </svg>
            </button>
        </div>



    </div> -->

    </div>
