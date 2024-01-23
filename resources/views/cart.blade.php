@extends('layouts.app')
@section('title-block')Корзина@endsection
@section('content')
<section class="cartmain-section">
<div class="catalog-mainitems-block">
    <h1 class="catalog-main-text">Корзина</h1>

    <div class="catalog-allblocks">
        <div class="catalog-main-grides">
            <span class="catalog-main-grides-text">Главная/Корзина</span>
            <div class="show-products-container">
               
              
            </div>
        </div>
        <div class="cart-block">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="22" viewBox="0 0 25 22" fill="none">
                <path
                    d="M20.1172 17.875C18.9441 17.875 18.0751 18.8203 18.0751 19.9375C18.0751 21.0977 18.9875 22 20.1172 22C21.2034 22 22.1593 21.0977 22.1593 19.9375C22.1593 18.8203 21.2903 17.875 20.1172 17.875ZM7.60369 17.875C6.43055 17.875 5.56156 18.8203 5.56156 19.9375C5.56156 21.0977 6.474 22 7.60369 22C8.68993 22 9.64583 21.0977 9.64583 19.9375C9.64583 18.8203 8.77683 17.875 7.60369 17.875ZM24.7229 1.93359C24.4622 1.58984 24.0711 1.375 23.5932 1.375H5.25741L5.17051 0.859375C5.08361 0.386719 4.64912 0 4.17117 0H0.999343C0.434497 0 0 0.472656 0 1.03125C0 1.54688 0.434497 2.0625 0.999343 2.0625H3.25873L5.86571 15.6836C5.99606 16.1562 6.43055 16.5 6.95195 16.5H21.2034C21.7683 16.5 22.2462 16.0703 22.2462 15.5117C22.2462 14.9102 21.7683 14.4375 21.2034 14.4375H7.77749L7.38644 12.375H21.2469C21.8552 12.375 22.3766 11.9883 22.5504 11.3867L24.9401 3.17969C25.0705 2.75 24.9836 2.27734 24.7229 1.93359Z"
                    fill="white" />
            </svg>
            <div class="cart-count-block">
                <span class="cart-count-text">1</span>
            </div>
        </div>
    </div>
</div>
    <div class="cartmain-container">
        <div class="locationpoint-container">
            <span class="locationpoint-text">Ваш населённый пункт</span>
            <select class="locationpoint-selection">
                <option class="locationpoint-item">Москва</option>
                <option class="locationpoint-item">Орёл</option>
            </select>
        </div>
        <div class="carttovars-container">
            <div class="cart-container">
                <div class="cartses-container">
                    <div class="cartfirst-container">
                        <div class="cartcheck-item">
                            <input class="cartcheck-chekbox" type="checkbox" checked="checked">
                            <label class="cartcheck-name-type">Выбрать товары</label>
                        </div>
                        <button class="cartcheck-remove-btn">Удалить всё</button>
                    </div>
                    <div class="cart-tovars-container">
                        <div class="cart-tovars-item">
                            <div class="cart-product-container">
                                <div class="cart-product-item">
                                    <input class="cart-product-chekbox" type="checkbox" checked="checked">
                                </div>
                                <div class="cart-product-imgcontainer">
                                <img class="cart-product-img" src="/img/products/1.png"/>
                                <button class="cart-product-deletes-btn--two">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M1 1L23 22.5" stroke="#EA600A" stroke-width="1.5" stroke-linecap="round"/>
                                            <path d="M23 1L1 22.5" stroke="#EA600A" stroke-width="1.5" stroke-linecap="round"/>
                                        </svg>
                                    </button>
                            </div>
                                <div class="cart-product-textcontainer">
                                    <div class="cart-product-textmain-container">
                                        <span class="cart-product-serialtext">BLUM</span>
                                        <span class="cart-product-nametext">CLIP ответная планка, прям. (20/32 мм), 0 мм</span>
                                    </div>
                                    <div class="cart-product-charactercontainer">
                                        <div class="cart-product-character-item">
                                            <span class="cart-product-character-name">Код: </span>
                                            <span class="cart-product-character-value">175H3100.21</span>
                                        </div>
                                        <div class="cart-product-character-item">
                                            <span class="cart-product-character-name">Тип: </span>
                                            <span class="cart-product-character-value">CLIP</span>
                                        </div>
                                        <div class="cart-product-character-item">
                                            <span class="cart-product-character-name">Материал: </span>
                                            <span class="cart-product-character-value">сталь</span>
                                        </div>
                                        <div class="cart-product-character-item">
                                            <span class="cart-product-character-name">Количество в наборе: </span>
                                            <span class="cart-product-character-value">1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-product-actions">
                                <div class="cart-product-deletes-block">
                                    <button class="cart-product-deletes-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M1 1L23 22.5" stroke="#EA600A" stroke-width="1.5" stroke-linecap="round"/>
                                            <path d="M23 1L1 22.5" stroke="#EA600A" stroke-width="1.5" stroke-linecap="round"/>
                                        </svg>
                                    </button>
                                    <span class="cart-product-price">823.36 ₽</span>
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
                                </div>
                            </div>
                        </div>
                        <div class="cart-tovars-item">
                            <div class="cart-product-container">
                                <div class="cart-product-item">
                                    <input class="cart-product-chekbox" type="checkbox" checked="checked">
                                </div>
                                <div class="cart-product-imgcontainer">
                                <img class="cart-product-img" src="/img/products/1.png"/>
                                <button class="cart-product-deletes-btn--two">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M1 1L23 22.5" stroke="#EA600A" stroke-width="1.5" stroke-linecap="round"/>
                                            <path d="M23 1L1 22.5" stroke="#EA600A" stroke-width="1.5" stroke-linecap="round"/>
                                        </svg>
                                    </button>
                            </div>
                            <div class="cart-product-textcontainer">
                                    <div class="cart-product-textmain-container">
                                        <span class="cart-product-serialtext">BLUM</span>
                                        <span class="cart-product-nametext">CLIP ответная планка, прям. (20/32 мм), 0 мм</span>
                                    </div>
                                    <div class="cart-product-charactercontainer">
                                        <div class="cart-product-character-item">
                                            <span class="cart-product-character-name">Код: </span>
                                            <span class="cart-product-character-value">175H3100.21</span>
                                        </div>
                                        <div class="cart-product-character-item">
                                            <span class="cart-product-character-name">Тип: </span>
                                            <span class="cart-product-character-value">CLIP</span>
                                        </div>
                                        <div class="cart-product-character-item">
                                            <span class="cart-product-character-name">Материал: </span>
                                            <span class="cart-product-character-value">сталь</span>
                                        </div>
                                        <div class="cart-product-character-item">
                                            <span class="cart-product-character-name">Количество в наборе: </span>
                                            <span class="cart-product-character-value">1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="cart-product-actions">
                                <div class="cart-product-deletes-block">
                                    <button class="cart-product-deletes-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M1 1L23 22.5" stroke="#EA600A" stroke-width="1.5" stroke-linecap="round"/>
                                            <path d="M23 1L1 22.5" stroke="#EA600A" stroke-width="1.5" stroke-linecap="round"/>
                                        </svg>
                                    </button>
                                    <span class="cart-product-price">823.36 ₽</span>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="allsum-products-container">
                    <div class="allsum-prices">
                        <span class="allsumtext">Сумма</span>
                        <!-- <div class="allsumdotted"></div> -->
                        <span class="allsumtextprice">1702.52 ₽</span>
                    </div>
                    <div class="allsum-delivery">
                        <svg xmlns="http://www.w3.org/2000/svg"   class="cross-svg" width="29" height="20" viewBox="0 0 29 20" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M28.9993 16.4067L29.0001 16.4047L28.9993 16.4085V16.4067ZM28.9993 9.56781V16.4067C28.7922 16.9543 28.396 17.1773 27.8121 17.1471C27.285 17.1199 26.7548 17.1342 26.2269 17.1486C26.1446 17.1509 26.0147 17.2317 25.9921 17.3034C25.579 18.616 24.3487 19.4852 22.9939 19.458C21.6791 19.4316 20.6059 18.6092 20.1294 17.246C20.1236 17.2291 20.116 17.2129 20.1067 17.1931L20.0982 17.1749L20.0894 17.1554H15.3399C14.8256 18.6439 13.8106 19.5109 12.1997 19.4399C10.7474 19.3757 9.83665 18.5261 9.37673 17.141C9.14393 17.141 8.91021 17.1416 8.67586 17.1421L8.67396 17.1421H8.67362C8.11351 17.1434 7.54981 17.1446 6.98649 17.1388C6.61719 17.135 6.33248 16.8669 6.29245 16.5187C6.25469 16.1857 6.46917 15.8662 6.80977 15.7726C6.92532 15.7409 7.05144 15.7341 7.17227 15.7333C7.69973 15.7306 8.22679 15.731 8.76068 15.7315C8.96216 15.7317 9.16461 15.7318 9.36842 15.7318L9.39133 15.6683C9.41263 15.6095 9.43309 15.5531 9.45149 15.4962C9.86006 14.229 11.0284 13.3695 12.3492 13.365C13.6595 13.3597 14.8301 14.195 15.2439 15.4531C15.3149 15.6684 15.401 15.7401 15.6321 15.7379C16.6626 15.7283 17.6932 15.7296 18.7237 15.7309H18.7239C19.0806 15.7314 19.4374 15.7318 19.7941 15.7318H20.0871C20.2668 15.0438 20.6127 14.4729 21.1618 14.0371C22.8338 12.7102 25.2844 13.4383 25.9573 15.469C26.0261 15.6767 26.1106 15.7484 26.3281 15.7379C26.6098 15.7242 26.8925 15.727 27.1896 15.73C27.3188 15.7313 27.4506 15.7326 27.5863 15.7326V15.4509C27.5863 15.0452 27.5862 14.6395 27.586 14.2338C27.5854 12.9154 27.5849 11.5971 27.5901 10.2792C27.5901 10.0927 27.5365 9.96656 27.396 9.84421C27.1949 9.66983 26.9974 9.4912 26.7999 9.31254L26.7998 9.31244C26.5568 9.09265 26.3137 8.87282 26.0638 8.6608C25.9543 8.56791 25.7859 8.49843 25.6439 8.49767C24.2882 8.48964 22.9325 8.48989 21.5768 8.49014C21.1487 8.49022 20.7206 8.4903 20.2925 8.49012C19.5554 8.49012 19.1937 8.13291 19.1929 7.40262C19.1919 6.15904 19.1923 4.91547 19.1926 3.67189C19.1928 3.0501 19.1929 2.42831 19.1929 1.80652V1.42363H18.8244H7.24326C7.22126 1.42363 7.19921 1.42383 7.17713 1.42403H7.17712H7.1771C7.08552 1.42486 6.99362 1.42569 6.90417 1.4123C6.54318 1.35868 6.2849 1.06038 6.28868 0.712981C6.29245 0.355012 6.57264 0.0536832 6.94269 0.0174332C7.02807 0.00883821 7.11431 0.00980772 7.20044 0.0107759C7.22783 0.0110838 7.2552 0.0113915 7.28253 0.0113915C8.36504 0.0113915 9.44754 0.0125411 10.53 0.0136906C13.4683 0.0168109 16.4065 0.0199312 19.3447 6.33688e-05C20.3174 -0.00673351 20.6769 0.533996 20.6067 1.25749C20.6013 1.31119 20.6026 1.36585 20.6042 1.43071V1.43073V1.43074V1.43076V1.43078C20.605 1.46532 20.6059 1.50275 20.6059 1.54447C20.7978 1.54447 20.9879 1.54376 21.1768 1.54306C21.6363 1.54136 22.0885 1.53968 22.5408 1.54824C22.8127 1.55353 23.0913 1.57014 23.3526 1.63585C24.3216 1.88053 24.9658 2.49678 25.3109 3.42569C25.4602 3.82685 25.6079 4.22854 25.7556 4.63018L25.7559 4.63106L25.7563 4.632C26.0402 5.40401 26.324 6.17586 26.6189 6.94345C26.7065 7.17153 26.8575 7.39431 27.0305 7.56801C27.2597 7.79843 27.5 8.01779 27.7402 8.23715C27.9528 8.4312 28.1653 8.62524 28.3702 8.82695C28.5293 8.98339 28.6692 9.15855 28.8093 9.33379L28.8093 9.3338L28.8093 9.33386L28.8094 9.33392C28.8721 9.41243 28.9348 9.49095 28.9993 9.56781ZM20.6278 7.05674V2.9552C20.8485 2.9552 21.0669 2.95321 21.2837 2.95124C21.7868 2.94666 22.2812 2.94217 22.7741 2.96275C23.3043 2.98465 23.7181 3.25879 23.9145 3.75949C24.2159 4.52678 24.5029 5.29937 24.7934 6.08152L24.7938 6.08253L24.7951 6.08615C24.9147 6.40796 25.0348 6.73139 25.1568 7.05674H20.6278ZM13.9926 16.416C13.9903 17.3208 13.2615 18.0458 12.3538 18.0458C11.4536 18.0458 10.7127 17.3064 10.715 16.4092C10.7172 15.5151 11.4649 14.772 12.3606 14.7735C13.2593 14.775 13.9948 15.5158 13.9926 16.416ZM23.0724 14.7735C23.9727 14.7772 24.7044 15.5181 24.6999 16.4198H24.6992C24.6946 17.3261 23.9674 18.0465 23.0573 18.0458C22.1586 18.045 21.4178 17.3019 21.4231 16.4055C21.4284 15.5113 22.1783 14.7697 23.0724 14.7735ZM0.914558 7.86407C0.491641 7.86332 0.183516 7.98944 0 8.37686L0.000755209 8.37761V8.77334C0.182005 9.16228 0.490131 9.28915 0.913048 9.28764C3.74765 9.27996 6.58179 9.2806 9.41619 9.28124C10.2035 9.28142 10.9909 9.2816 11.7782 9.2816C11.8 9.2816 11.8218 9.28184 11.8437 9.28208H11.8437H11.8437C11.9164 9.28289 11.9892 9.28369 12.0607 9.27556C12.4187 9.23402 12.683 8.94402 12.6898 8.59134C12.6966 8.22582 12.4323 7.92147 12.0622 7.87691C11.9899 7.8681 11.9163 7.86888 11.8428 7.86967H11.8427H11.8427C11.8217 7.86989 11.8007 7.87011 11.7798 7.87011C10.8046 7.86991 9.8295 7.87009 8.85443 7.87027H8.8539H8.85387C6.20744 7.87076 3.5612 7.87125 0.914558 7.86407ZM7.9781 3.95734C8.41864 3.95734 8.85917 3.95751 9.29971 3.95768C10.1808 3.95801 11.0619 3.95835 11.9429 3.95734C12.2443 3.95734 12.4761 4.0744 12.6143 4.34325C12.7412 4.59021 12.7457 4.86661 12.5516 5.05541C12.3976 5.2057 12.1635 5.31219 11.949 5.35448C11.7713 5.38981 11.5851 5.38169 11.399 5.37358H11.3989C11.3185 5.37007 11.238 5.36656 11.1583 5.36656C8.83601 5.36656 6.51375 5.36656 4.19148 5.36581C4.06914 5.36581 3.94453 5.3643 3.82596 5.33937C3.46723 5.2631 3.25124 4.96101 3.27919 4.59323C3.30562 4.25112 3.57145 3.97698 3.92791 3.9664C4.31899 3.95487 4.71046 3.95612 5.10176 3.95737H5.10181C5.24851 3.95783 5.39518 3.9583 5.54179 3.9581C6.08303 3.95759 6.62426 3.95776 7.16549 3.95793L7.97734 3.9581L7.9781 3.95734ZM4.33195 13.1958C4.57309 13.1951 4.81425 13.1943 5.05541 13.1943V13.1921C5.29835 13.1921 5.54128 13.1928 5.7842 13.1936C6.37119 13.1955 6.95808 13.1974 7.54458 13.1883C7.91841 13.1823 8.18802 12.9028 8.21294 12.5494C8.23938 12.1771 8.003 11.8742 7.62539 11.8063C7.51513 11.7859 7.40034 11.7844 7.28781 11.7844C6.00547 11.7836 4.72312 11.7836 3.44078 11.7836C3.36352 11.7836 3.28621 11.7828 3.20889 11.782C3.01258 11.78 2.81621 11.7781 2.62062 11.7889C2.23999 11.8093 1.9719 12.0411 1.92054 12.3689C1.84955 12.8228 2.14484 13.1845 2.62289 13.1913C3.19229 13.1993 3.76206 13.1975 4.33195 13.1958Z" fill="#EA600A"/>
                        </svg>
                        <span class="allsum-text-delivery">Добавьте в корзину товаров на <span class="allsum-prices-textdelivery">3 297,48 ₽</span> для бесплатной доставки по Москве</span>
                    </div>
                </div>
            </div>
            <div class="comment-cart-container">
                <button class="comment-cart-btn">
                    <span class="comment-cart-btn-text">Комментарий к заказу</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="6" viewBox="0 0 16 6" fill="none">
                        <path d="M15 1L8 5L1 1" stroke="#5D5D5D"/>
                    </svg>
                </button>
                <div class="comment-final-container">
                    <div class="comment-final-item">
                        <span class="comment-final-item-text">Товаров</span>
                        <!-- <div class="comment-one-dotted"></div> -->
                        <span class="comment-final-item-text">2</span>
                    </div>
                    <div class="comment-final-item">
                        <span class="comment-final-item-textbold">Итого</span>
                        <!-- <div class="comment-two-dotted"></div> -->
                        <span class="comment-final-item-textbold-price">1702.52 ₽</span>
                    </div>
                    <button class="comment-final-btn">Купить</button>
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