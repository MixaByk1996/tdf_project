<header class="header">
    <div class="header-container">
        <a href="/">
            <img src="/img/logoheader.svg" />
        </a>
        <form class="search-form">
            <input class="search-form-input" type="text" placeholder="Поиск..." />
            <button class="search-form-btn" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                    <path
                        d="M19.7067 19.3184L14.4673 13.8223C15.6012 12.3867 16.2268 10.541 16.2268 8.53125C16.2268 3.85547 12.5513 0 8.09384 0C3.59726 0 0 3.85547 0 8.53125C0 13.248 3.63636 17.0625 8.09384 17.0625C9.97067 17.0625 11.7302 16.4062 13.1378 15.2168L18.3773 20.7129C18.5728 20.918 18.8074 21 19.0811 21C19.3157 21 19.5503 20.918 19.7067 20.7129C20.0978 20.3438 20.0978 19.7285 19.7067 19.3184ZM1.87683 8.53125C1.87683 4.92188 4.65298 1.96875 8.13294 1.96875C11.5738 1.96875 14.3891 4.92188 14.3891 8.53125C14.3891 12.1816 11.5738 15.0938 8.13294 15.0938C4.65298 15.0938 1.87683 12.1816 1.87683 8.53125Z"
                        fill="#1D1D1B" />
                </svg>
            </button>
        </form>
        <div class="menu-container">
            <a href="tel:+7123456789" class="contact-item-url">+ 7 123 456 789</a>
            <a href="mailto:info@TDFurnitur.ru" class="contact-item-url">info@TDFurnitur.ru</a>
        </div>

        <div class="burger-menu-icon">
    <span></span>
    <span></span>
    <span></span>
</div>
    </div>
</header>

<div class="burger-menu-container">

<ul class="header-menu">
            <li class="header-menu-item">
                <a href="/" class="header-menu-item-url">Главная</a>
            </li>
            <li class="header-menu-item">
                <a href="{{url('about')}}" class="header-menu-item-url">О нас</a>
            </li>
            <li class="header-menu-item">
                <a href="/catalog" class="header-menu-item-url">Каталог</a>
            </li>
            <li class="header-menu-item">
                <a href="#t1" class="header-menu-item-url">Оставить заявку</a>
            </li>
            <li class="header-menu-item">
                <a href="{{url('contacts')}}" class="header-menu-item-url">Контакты</a>
            </li>
        </ul>


    <div class="register-auth-container">
        @if (!Auth::guest())
        <a class="profile-url" href="/cabinet">Профиль</a>
        <button class="logout-btn-shows" tokendat="{{ csrf_token() }}">
            <svg width="36px" height="36px" viewBox="0 0 24 24" fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.2929 14.2929C16.9024 14.6834 16.9024 15.3166 17.2929 15.7071C17.6834 16.0976 18.3166 16.0976 18.7071 15.7071L21.6201 12.7941C21.6351 12.7791 21.6497 12.7637 21.6637 12.748C21.87 12.5648 22 12.2976 22 12C22 11.7024 21.87 11.4352 21.6637 11.252C21.6497 11.2363 21.6351 11.2209 21.6201 11.2059L18.7071 8.29289C18.3166 7.90237 17.6834 7.90237 17.2929 8.29289C16.9024 8.68342 16.9024 9.31658 17.2929 9.70711L18.5858 11H13C12.4477 11 12 11.4477 12 12C12 12.5523 12.4477 13 13 13H18.5858L17.2929 14.2929Z"
                    fill="#FFFFFF" />
                <path
                    d="M5 2C3.34315 2 2 3.34315 2 5V19C2 20.6569 3.34315 22 5 22H14.5C15.8807 22 17 20.8807 17 19.5V16.7326C16.8519 16.647 16.7125 16.5409 16.5858 16.4142C15.9314 15.7598 15.8253 14.7649 16.2674 14H13C11.8954 14 11 13.1046 11 12C11 10.8954 11.8954 10 13 10H16.2674C15.8253 9.23514 15.9314 8.24015 16.5858 7.58579C16.7125 7.4591 16.8519 7.35296 17 7.26738V4.5C17 3.11929 15.8807 2 14.5 2H5Z"
                    fill="#FFFFFF" />
            </svg>
        </button>
        @else
        <button class="register-btn-shows">
            <svg height="26px" width="26px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 502.987 502.987" xml:space="preserve">
                <g>
                    <g>
                        <circle style="fill: #FFFFFF;" cx="185.994" cy="102.008" r="102.008" />
                        <path style="fill: #FFFFFF;" d="M334.444,261.459c-13.244,0-25.95,2.243-37.9,6.191c-25.216-32.335-65.273-53.323-110.55-53.323
			c-76.361,0.022-138.226,59.471-138.226,132.898v73.794h172.437c16.221,47.585,61.261,81.969,114.239,81.969
			c66.611,0,120.775-54.186,120.775-120.775S401.055,261.459,334.444,261.459z M240.309,382.213
			c0-51.899,42.236-94.156,94.135-94.156c51.942,0,94.178,42.257,94.178,94.156c0,51.921-42.236,94.156-94.178,94.156
			C282.545,476.369,240.309,434.134,240.309,382.213z" />
                        <path style="fill: #FFFFFF;" d="M351.269,312.97h-29.983c-0.022,14.366,0,52.158,0,52.158s-32.529,0-48.621,0.043v29.962
			c16.092-0.022,48.621-0.022,48.621-0.022s0,37.749-0.022,52.18h29.983c0.022-14.431,0.022-52.18,0.022-52.18s32.507,0,48.599,0
			v-29.983c-16.092,0-48.599,0-48.599,0S351.226,327.337,351.269,312.97z" />
                    </g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                </g>
            </svg>
        </button>
        <button class="auth-btn-shows">
            <svg fill="#FFFFFF" height="26px" width="26px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 296.999 296.999" xml:space="preserve">
                <g>
                    <g>
                        <g>
                            <path d="M146.603,0c-31.527,0-61.649,9.762-87.11,28.232c-4.377,3.176-5.567,9.188-2.73,13.791l23.329,37.845 c1.509,2.449,3.971,4.158,6.793,4.716c2.82,0.559,5.748-0.084,8.077-1.773c13.897-10.081,30.343-15.41,47.56-15.41
				c44.718,0,81.098,36.38,81.098,81.098c0,44.718-36.38,81.098-81.098,81.098c-17.217,0-33.663-5.329-47.56-15.41
				c-2.329-1.689-5.255-2.331-8.077-1.773c-2.821,0.558-5.283,2.267-6.793,4.716l-23.329,37.846
				c-2.838,4.603-1.647,10.615,2.73,13.791c25.46,18.47,55.583,28.232,87.11,28.232c81.883,0,148.5-66.617,148.5-148.5
				S228.486,0,146.603,0z M146.603,276.326c-23.925,0-46.906-6.529-67.024-18.965l12.579-20.407
				c15.288,8.741,32.497,13.317,50.364,13.317c56.117,0,101.771-45.655,101.771-101.771c0-56.116-45.655-101.771-101.771-101.771
				c-17.866,0-35.076,4.576-50.364,13.317L79.579,39.638c20.117-12.435,43.099-18.965,67.024-18.965
				c70.483,0,127.826,57.343,127.826,127.826S217.087,276.326,146.603,276.326z" />
                            <path d="M105.966,193.934c-2.115,3.172-2.312,7.25-0.513,10.611c1.799,3.36,5.302,5.459,9.113,5.459h45.482
				c3.456,0,6.684-1.727,8.601-4.603l34.112-51.167c2.315-3.472,2.315-7.996,0-11.467L168.65,91.599
				c-1.917-2.876-5.144-4.603-8.601-4.603h-45.482c-3.812,0-7.315,2.099-9.113,5.459c-1.799,3.361-1.602,7.44,0.513,10.611
				l12.027,18.041H29.288c-15.104,0-27.393,12.288-27.393,27.393s12.288,27.393,27.393,27.393h88.705L105.966,193.934z
				 M29.288,155.219c-3.705,0-6.719-3.014-6.719-6.719c0-3.705,3.014-6.719,6.719-6.719h108.02c3.812,0,7.315-2.099,9.113-5.459
				c1.799-3.361,1.602-7.44-0.513-10.611l-12.027-18.041h20.635l27.22,40.83l-27.22,40.83h-20.635l12.027-18.041
				c2.115-3.172,2.312-7.25,0.513-10.611c-1.799-3.36-5.302-5.459-9.113-5.459H29.288z" />
                        </g>
                    </g>
                </g>
            </svg>
        </button>
        @endif


    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const burgerMenuIcon = document.querySelector('.burger-menu-icon');
    const burgerMenuContainer = document.querySelector('.burger-menu-container');
    const body = document.body;
    let isMenuOpen = false;

    burgerMenuIcon.addEventListener('click', function () {
        if (!isMenuOpen) {
            burgerMenuContainer.classList.add('open');
            burgerMenuContainer.classList.remove('close');
            body.style.overflow = 'hidden'; 
            isMenuOpen = true;
        } else {
            burgerMenuContainer.classList.add('close');
            burgerMenuContainer.classList.remove('open');
            body.style.overflow = 'auto';
            isMenuOpen = false;
        }
    });

    document.addEventListener('click', function (e) {
        if (!burgerMenuContainer.contains(e.target) && !burgerMenuIcon.contains(e.target) && isMenuOpen) {
            burgerMenuContainer.classList.add('close');
            burgerMenuContainer.classList.remove('open');
            body.style.overflow = 'auto';
            isMenuOpen = false;
        }
    });
});



</script>
