@extends('layouts.app')
@section('title-block')Главная@endsection
@section('content')
<section class="products-section">
    <div class="products-section-container">
        <div class="products-item-menu-cart-container">
            <span class="products-item-menu-cart-container-text">Главная/Каталог</span>
            <div class="cart-block">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="22" viewBox="0 0 25 22" fill="none">
                    <path d="M20.1172 17.875C18.9441 17.875 18.0751 18.8203 18.0751 19.9375C18.0751 21.0977 18.9875 22 20.1172 22C21.2034 22 22.1593 21.0977 22.1593 19.9375C22.1593 18.8203 21.2903 17.875 20.1172 17.875ZM7.60369 17.875C6.43055 17.875 5.56156 18.8203 5.56156 19.9375C5.56156 21.0977 6.474 22 7.60369 22C8.68993 22 9.64583 21.0977 9.64583 19.9375C9.64583 18.8203 8.77683 17.875 7.60369 17.875ZM24.7229 1.93359C24.4622 1.58984 24.0711 1.375 23.5932 1.375H5.25741L5.17051 0.859375C5.08361 0.386719 4.64912 0 4.17117 0H0.999343C0.434497 0 0 0.472656 0 1.03125C0 1.54688 0.434497 2.0625 0.999343 2.0625H3.25873L5.86571 15.6836C5.99606 16.1562 6.43055 16.5 6.95195 16.5H21.2034C21.7683 16.5 22.2462 16.0703 22.2462 15.5117C22.2462 14.9102 21.7683 14.4375 21.2034 14.4375H7.77749L7.38644 12.375H21.2469C21.8552 12.375 22.3766 11.9883 22.5504 11.3867L24.9401 3.17969C25.0705 2.75 24.9836 2.27734 24.7229 1.93359Z" fill="white"/>
                </svg>
                <div class="cart-count-block">
                    <span class="cart-count-text">1</span>
                </div>    
            </div>
        </div>
        <div class="products-item-namearticles-container">
            <span class="products-name-text">CLIP ответная планка, прям. (20/32 мм), 0 мм, сталь, на шурупы, Регулировка по высоте: эксцентрик, комплект для AVENTOS HF, Никелиров.</span>
            <span class="products-articlename-text">Артикул: 175H3100.21MPL+SR S6 NI</span>
        </div>
        <div class="products-item-container">
            <div class="products-item-product">
                <div class="products-item-img-container">
                    <img class="products-item-img-production" src="/img/products/5.png"/>
                </div>
                <div class="products-item-infromation">
                    <div class="products-item-price">
                        <span class="products-nameprice-text">Розничная цена:</span>
                        <span class="products-price-text">823.36 ₽</span>
                    </div>
                    <div class="product-item-character-container">
                        <div class="product-item-character-item">
                            <span class="product-item-character-nametext">Ответная планка:</span>
                            <span class="product-item-character-valuetext">175H3100.21</span>
                        </div>
                        <div class="product-item-character-item">
                            <span class="product-item-character-nametext">Система ответных планок:</span>
                            <span class="product-item-character-valuetext">CLIP</span>
                        </div>
                        <div class="product-item-character-item">
                            <span class="product-item-character-nametext">Форма ответной планки:</span>
                            <span class="product-item-character-valuetext">прям.</span>
                        </div>
                        <div class="product-item-character-item">
                            <span class="product-item-character-nametext">Подъем:</span>
                            <span class="product-item-character-valuetext">0 мм</span>
                        </div>
                        <div class="product-item-character-item">
                            <span class="product-item-character-nametext">Материал:</span>
                            <span class="product-item-character-valuetext">сталь</span>
                        </div>
                        <div class="product-item-character-item">
                            <span class="product-item-character-nametext">Поверхность:</span>
                            <span class="product-item-character-valuetext">никелиров.</span>
                        </div>
                        <div class="product-item-character-item">
                            <span class="product-item-character-nametext">Поверхность нижней части:</span>
                            <span class="product-item-character-valuetext">никелиров.</span>
                        </div>
                        <div class="product-item-character-item">
                            <span class="product-item-character-nametext">Чашки петли:</span>
                            <span class="product-item-character-valuetext">под саморезы</span>
                        </div>
                        <div class="product-item-character-item">
                            <span class="product-item-character-nametext">Расстояние от переднего края каркаса до 1 позиции крепления:</span>
                            <span class="product-item-character-valuetext">20 мм</span>
                        </div>
                        <div class="product-item-character-item">
                            <span class="product-item-character-nametext">Регулировка по высоте ответной планки:</span>
                            <span class="product-item-character-valuetext">С эксцентриком</span>
                        </div>
                    </div>
                    <div class="cart-complect-container">
                        <div class="complect-container">
                            <button class="minus-complect">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="2" viewBox="0 0 13 2" fill="none">
                                    <path d="M13 0.75C13 1.1875 12.6562 1.5 12.25 1.5H0.75C0.3125 1.5 0 1.1875 0 0.78125C0 0.34375 0.3125 0 0.75 0H12.25C12.6562 0 13 0.34375 13 0.75Z" fill="#2B2B2B"/>
                                </svg>
                            </button>
                            <div class="complect-text-container">
                                <span class="complect-text">1</span>
                                <span class="complect-text">комплект</span>
                            </div>
                            <button class="plus-complect">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                    <path d="M13 6.46875C13 6.90625 12.6562 7.21875 12.25 7.21875H7.25V12.2188C7.25 12.6562 6.90625 13 6.5 13C6.0625 13 5.75 12.6562 5.75 12.2188V7.21875H0.75C0.3125 7.21875 0 6.90625 0 6.5C0 6.0625 0.3125 5.71875 0.75 5.71875H5.75V0.71875C5.75 0.3125 6.0625 0 6.5 0C6.90625 0 7.25 0.3125 7.25 0.71875V5.71875H12.25C12.6562 5.71875 13 6.0625 13 6.46875Z" fill="#2B2B2B"/>
                                </svg>
                            </button>
                        </div>
                        <button class="product-btncart">В корзину</button>
                    </div>
                </div>
            </div>
            <div class="products-likes-container">
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="27" viewBox="0 0 33 27" fill="none">
                    <g clip-path="url(#clip0_1_564)">
                        <path d="M16.3829 3.91893C17.086 3.29698 17.7549 2.65702 18.4731 2.07707C20.3437 0.568178 22.4903 -0.151768 24.9038 0.0322179C28.5836 0.313197 31.7003 2.97 32.6572 6.55973C33.4027 9.35753 32.897 11.9563 31.4797 14.4292C30.1994 16.664 28.499 18.5578 26.6244 20.3067C24.2289 22.5416 21.6069 24.4894 18.8468 26.2553C17.3459 27.2152 15.7815 27.2632 14.2755 26.3053C10.9675 24.2014 7.84981 21.8506 5.11291 19.0358C3.42161 17.2969 1.89853 15.4251 0.932505 13.1812C-0.591579 9.63751 -0.287367 6.24876 2.12921 3.19498C4.88626 -0.287758 9.93901 -1.00271 13.6893 1.44511C14.7712 2.15106 15.6898 3.028 16.3829 3.91893ZM31.1321 9.18954C31.0626 8.63458 31.0223 8.07462 30.9206 7.52466C30.157 3.40097 25.9353 0.923152 21.9564 2.27105C19.9458 2.952 18.5335 4.3469 17.4426 6.10477C16.9067 6.9687 16.1341 6.9777 15.5972 6.11977C15.0099 5.18084 14.3209 4.3309 13.4677 3.61495C10.493 1.11614 6.21593 1.33812 3.73791 4.23291C1.75146 6.55274 1.44826 9.23354 2.51703 12.0523C3.26245 14.0202 4.54981 15.6541 5.97014 17.1829C8.67179 20.0907 11.8207 22.4586 15.1388 24.6214C16.0756 25.2324 17.0064 25.2543 17.908 24.6044C19.8481 23.2065 21.8184 21.8426 23.685 20.3527C25.886 18.5968 27.8583 16.599 29.3915 14.2202C30.3777 12.6903 31.1009 11.0624 31.1311 9.18954H31.1321Z" fill="#EA600A"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_1_564">
                            <rect width="33" height="27" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
</section>
@endsection