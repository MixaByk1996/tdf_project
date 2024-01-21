@extends('layouts.app')
@section('title-block')Кабинет@endsection
@section('content')
<section class="cabinet-section">
    <div class="cabinet-section-container">
        <div class="cabinet-nameses-container">
            <div class="cabinet-allmain-container">
                <h1 class="cabinet-main-text">Личный кабинет</h1>
                <span class="catalog-main-grides-text">Главная / Мой кабинет</span>
            </div>
            <div class="cart-block">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="22" viewBox="0 0 25 22" fill="none">
                    <path
                        d="M20.1172 17.875C18.9441 17.875 18.0751 18.8203 18.0751 19.9375C18.0751 21.0977 18.9875 22 20.1172 22C21.2034 22 22.1593 21.0977 22.1593 19.9375C22.1593 18.8203 21.2903 17.875 20.1172 17.875ZM7.60369 17.875C6.43055 17.875 5.56156 18.8203 5.56156 19.9375C5.56156 21.0977 6.474 22 7.60369 22C8.68993 22 9.64583 21.0977 9.64583 19.9375C9.64583 18.8203 8.77683 17.875 7.60369 17.875ZM24.7229 1.93359C24.4622 1.58984 24.0711 1.375 23.5932 1.375H5.25741L5.17051 0.859375C5.08361 0.386719 4.64912 0 4.17117 0H0.999343C0.434497 0 0 0.472656 0 1.03125C0 1.54688 0.434497 2.0625 0.999343 2.0625H3.25873L5.86571 15.6836C5.99606 16.1562 6.43055 16.5 6.95195 16.5H21.2034C21.7683 16.5 22.2462 16.0703 22.2462 15.5117C22.2462 14.9102 21.7683 14.4375 21.2034 14.4375H7.77749L7.38644 12.375H21.2469C21.8552 12.375 22.3766 11.9883 22.5504 11.3867L24.9401 3.17969C25.0705 2.75 24.9836 2.27734 24.7229 1.93359Z"
                        fill="white"></path>
                </svg>
                <div class="cart-count-block">
                    <span class="cart-count-text">1</span>
                </div>
            </div>
        </div>
        <div class="data-profile-container">
            <div class="data-profile-urls">
                <span class="data-url data-url-data data-url-active">Личные данные</span>
                <span class="data-url data-url-history">История заказов</span>
                <span class="data-url">Избранные</span>
                <span class="data-url">Личные сообщения</span>
            </div>

            <div class="data-profileform-container">
                <div class="data-profile-white-container">
                    <div class="data-profile-form-container">
                        <p class="data-profile-form-text">Данные профиля</p>
                        <form class="data-profile-container-alls">
                            <div class="data-profile-input-container">
                                <input class="data-profile-input" value="{{$user->fio}}" placeholder="ФИО"/>
                                <input class="data-profile-input" value="{{$user->city}}" placeholder="Город"/>
                                <input class="data-profile-input" placeholder="ИНН"/>
                                <input class="data-profile-input"  placeholder="Название компании" />
                                <div class="input-profile-row-container">
                                    <input class="data-profile-input-small" value="{{$user->phone}}" placeholder="Номер телефона"/>
                                    <input class="data-profile-input-small" value="{{$user->email}}" placeholder="Email"/>
                                </div>
                            </div>
                            <input type="submit" class="data-profile-input-send" value="Обновить данные"/>
                        </form>
                    </div>
                </div>
                <div class="update-password-container">
                    <p class="update-password-text">Изменение пароля для входа</p>
                    <form class="update-password-form">
                        <div class="update-password-input-container">
                            <input type="password" class="update-password-input" placeholder="Пароль"/>
                            <input type="password" class="update-password-input" placeholder="Подтверждение пароля"/>
                        </div>
                        <input type="submit" class="update-password-input-send" value="Сменить пароль"/>
                    </form>
                </div>
            </div>










            <!-- -------------------------------------------------------------------- -->





            <div class="data-profile-orders-container">
                <div class="order-card">
                    <div class="order-info">
                        <div class="order-details">
                            <span class="order-date">07.01.2024</span>
                            <img src="/img/products/1.png" width="171px" height="171px" />
                            <span class="order-total">Сумма................1702.52 Р</span>
                        </div>
                    </div>
                    <div class="order-button-container">
                        <span class="order-number">Номер заказа: 175H3101</span>
                        <button class="details-button">Детали -></button>
                    </div>
                </div>

                <div class="order-card">
                    <div class="order-info">
                        <div class="order-details">
                            <span class="order-date">07.01.2024</span>
                            <img src="/img/products/1.png" width="171px" height="171px" />
                            <span class="order-total">Сумма................1702.52 Р</span>
                        </div>
                    </div>
                    <div class="order-button-container">
                        <span class="order-number">Номер заказа: 175H3101</span>
                        <button class="details-button">Детали -></button>
                    </div>
                </div>
            </div>



            <div class="order-summary-container">
                <div class="back-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="24" viewBox="0 0 42 24" fill="none" transform="scale(-1, 1) translate(-42, 0)">
    <path d="M2 10.5C1.17157 10.5 0.5 11.1716 0.5 12C0.5 12.8284 1.17157 13.5 2 13.5V10.5ZM41.0607 13.0607C41.6464 12.4749 41.6464 11.5251 41.0607 10.9393L31.5147 1.3934C30.9289 0.807611 29.9792 0.807611 29.3934 1.3934C28.8076 1.97919 28.8076 2.92893 29.3934 3.51472L37.8787 12L29.3934 20.4853C28.8076 21.0711 28.8076 22.0208 29.3934 22.6066C29.9792 23.1924 30.9289 23.1924 31.5147 22.6066L41.0607 13.0607ZM2 13.5H40V10.5H2V13.5Z" fill="white"/>
</svg>
</div>
                <div class="order-summary">
                    <div class="order-header">
                        <div class="order-number">Номер заказа: 175H3101</div>
                        <div class="order-date">Дата покупки: 07/01/2024</div>
                    </div>
                    <div class="order-total">
                        <span>Итого</span>
                        <span class="total-price">1702.52 Р</span>
                    </div>
                    <div class="discount">
                        <span>Скидка</span>
                        <span>0.00 Р</span>
                    </div>
                    <div class="delivery-cost">
                        <span>Стоимость доставки</span>
                        <span>0.00 Р</span>
                    </div>

                    <div class="order-items">
                        <div class="item">
                            <img src="/img/products/1.png" style="min-width:171px; min-height:171px" />
                            <div class="item-description">
                                <div>BLUM</div>
                                <div style="margin-top: 10px; margin-bottom: 10px
                            color: #5D5D5D; font-weight: 600; font-size: 18px">CLIP top BLUMOTION шарнир петли, 110°,
                                    накладные, с доводчиком</div>
                                <div>Код: 175H3101</div>
                                <div>Матеріал: сталь</div>
                                <div class="price-container">
                                    <div>Количество в наборе: 1</div>
                                    <div class="price">823.36 Р</div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <button class="order-button">Повторить заказ</button>
                </div>
            </div>




        </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const detailsButtons = document.querySelectorAll('.details-button');
    const orderSummary = document.querySelector('.order-summary-container');
    const profileOrdersContainer = document.querySelector('.data-profile-orders-container');
    const backButton = document.querySelector('.back-button');

    // Установка начальных стилей для анимации
    orderSummary.style.opacity = '0';
    orderSummary.style.transform = 'translateY(20px)';
    orderSummary.style.transition = 'opacity 0.5s, transform 0.5s';
    orderSummary.style.display = 'none';

    profileOrdersContainer.style.opacity = '1';
    profileOrdersContainer.style.transform = 'translateY(0)';
    profileOrdersContainer.style.transition = 'opacity 0.5s, transform 0.5s';
    profileOrdersContainer.style.display = 'block';

    // Функция для плавного переключения видимости
    function toggleVisibility(showElement, hideElement, displayStyle) {
        hideElement.style.opacity = '0';
        hideElement.style.transform = 'translateY(20px)';
        setTimeout(() => {
            showElement.style.opacity = '1';
            showElement.style.transform = 'translateY(0)';
            hideElement.style.display = 'none';
            showElement.style.display = displayStyle; // 'flex' или 'block'
        }, 500); // Задержка должна соответствовать времени анимации
    }

    // Обработчики для кнопок деталей и возврата
    detailsButtons.forEach(button => {
        button.addEventListener('click', function () {
            toggleVisibility(orderSummary, profileOrdersContainer, 'flex');
        });
    });

    backButton.addEventListener('click', function() {
        toggleVisibility(profileOrdersContainer, orderSummary, 'block');
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    function applyInitialStyles() {
        const profileFormContainer = document.querySelector('.data-profileform-container');
        const profileOrdersContainer = document.querySelector('.data-profile-orders-container');

        profileFormContainer.style.opacity = '1';
        profileFormContainer.style.transform = 'translateY(20px)';
        profileFormContainer.style.transition = 'opacity 0.5s ease-in-out, transform 0.5s ease-in-out';

        profileOrdersContainer.style.opacity = '0';
        profileOrdersContainer.style.transform = 'translateY(20px)';
        profileOrdersContainer.style.transition = 'opacity 0.5s ease-in-out, transform 0.5s ease-in-out';
    }

    applyInitialStyles();

    const profileFormContainer = document.querySelector('.data-profileform-container');
    const profileOrdersContainer = document.querySelector('.data-profile-orders-container');
    const detailsButtons = document.querySelectorAll('.details-button');
    const orderSummary = document.querySelector('.order-summary-container');
    const backButton = document.querySelector('.back-button');
    const dataUrlData = document.querySelector('.data-url-data');
    const dataUrlHistory = document.querySelector('.data-url-history');
    const dataUrls = document.querySelectorAll('.data-url, .data-url-active');

    function changeActiveElement(newActiveElement) {
        dataUrls.forEach(element => {
            element.classList.remove('data-url-active');
        });
        newActiveElement.classList.add('data-url-active');
    }

    function toggleVisibility(elementToShow, elementToHide) {
        elementToHide.style.opacity = '0';
        elementToHide.style.transform = 'translateY(20px)';
        setTimeout(() => {
            elementToShow.style.opacity = '1';
            elementToShow.style.transform = 'translateY(0)';
            elementToHide.style.display = 'none';
            elementToShow.style.display = 'block';
        }, 500);
    }

    // Устанавливаем видимость для data-profileform-container
    profileFormContainer.style.display = 'block';
    profileFormContainer.style.opacity = '1';
    profileFormContainer.style.transform = 'translateY(0)';

    // Скрываем data-profile-orders-container
    profileOrdersContainer.style.display = 'none';
    profileOrdersContainer.style.opacity = '0';
    profileOrdersContainer.style.transform = 'translateY(20px)';

    detailsButtons.forEach(button => {
        button.addEventListener('click', function () {
            orderSummary.style.display = 'flex';
            profileOrdersContainer.style.display = 'none';
        });
    });

    backButton.addEventListener('click', function() {
        orderSummary.style.display = 'none';
        profileOrdersContainer.style.display = 'block';
    });

    dataUrlData.addEventListener('click', function() {
        toggleVisibility(profileFormContainer, profileOrdersContainer);
        changeActiveElement(dataUrlData);
    });

    dataUrlHistory.addEventListener('click', function() {
        toggleVisibility(profileOrdersContainer, profileFormContainer);
        changeActiveElement(dataUrlHistory);
    });
});
</script>


@endsection