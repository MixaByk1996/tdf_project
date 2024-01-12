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
                    <path d="M20.1172 17.875C18.9441 17.875 18.0751 18.8203 18.0751 19.9375C18.0751 21.0977 18.9875 22 20.1172 22C21.2034 22 22.1593 21.0977 22.1593 19.9375C22.1593 18.8203 21.2903 17.875 20.1172 17.875ZM7.60369 17.875C6.43055 17.875 5.56156 18.8203 5.56156 19.9375C5.56156 21.0977 6.474 22 7.60369 22C8.68993 22 9.64583 21.0977 9.64583 19.9375C9.64583 18.8203 8.77683 17.875 7.60369 17.875ZM24.7229 1.93359C24.4622 1.58984 24.0711 1.375 23.5932 1.375H5.25741L5.17051 0.859375C5.08361 0.386719 4.64912 0 4.17117 0H0.999343C0.434497 0 0 0.472656 0 1.03125C0 1.54688 0.434497 2.0625 0.999343 2.0625H3.25873L5.86571 15.6836C5.99606 16.1562 6.43055 16.5 6.95195 16.5H21.2034C21.7683 16.5 22.2462 16.0703 22.2462 15.5117C22.2462 14.9102 21.7683 14.4375 21.2034 14.4375H7.77749L7.38644 12.375H21.2469C21.8552 12.375 22.3766 11.9883 22.5504 11.3867L24.9401 3.17969C25.0705 2.75 24.9836 2.27734 24.7229 1.93359Z" fill="white"></path>
                </svg>
                <div class="cart-count-block">
                    <span class="cart-count-text">1</span>
                </div>
            </div>
        </div>
        <div class="data-profile-container">
            <div class="data-profile-urls">
                <span class="data-url-active">Личные данные</span>
                <span class="data-url">История заказов</span>
            </div>
            <div class="data-profileform-container">
                <div class="data-profile-white-container">
                    <div class="data-profile-form-container">
                        <p class="data-profile-form-text">Данные профиля</p>
                        <form class="data-profile-container-alls">
                            <div class="data-profile-input-container">
                                <input class="data-profile-input" value="{{$user->fio}}" placeholder="ФИО"/>
                                <input class="data-profile-input" placeholder="Город"/>
                                <div class="input-profile-row-container">
                                    <input class="data-profile-input-small" placeholder="Номер телефона"/>
                                    <input class="data-profile-input-small" placeholder="Email"/>
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
        </div>
    </div>
</section>
@endsection
