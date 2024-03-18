<header class="header">
    <input type="hidden" id="is_user_check" name="is_user_check" value="{{\Illuminate\Support\Facades\Auth::user() != null ? 1 : 0}}">
    <div class="header-container">
        <a href="/">
            <img src="/img/logoheader.svg" />
        </a>
        <form class="search-form" action="{{route('search')}}" method="post">
            @csrf
            <input class="search-form-input" type="text" name="text" placeholder="Поиск..." />
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
            <a href="mailto:info@TDFurnitur.com" class="contact-item-url">info@TDFurnitur.com</a>
        </div>

        <div class="burger-menu-icon">
    <span></span>
    <span></span>
    <span></span>
</div>
    </div>
</header>

<div class="burger-menu-container">
    <div>
        <div class="social-icons--line--one">
            <img src="/img/line/Line 13.jpg" alt="">
        </div>

        <div class="social-icons--line--two">
            <img src="/img/line/Line 14.jpg" alt="">
        </div>

<div class="social-icons--two">
<a href="tel:+7123456789">
    <img src="/img/phone.svg" alt="phone">
</a>
<a href="https://vk.com/your_page">
    <img src="/img/vk.svg" alt="vk">
</a>
<a href="https://t.me/your_channel">
    <img src="/img/telegram.svg" alt="telegram">
</a>
</div>

<div class="social-icons--three">
<a href="tel:+7123456789" >
    <img src="/img/phone.svg" alt="phone">
</a>
<a href="https://vk.com/your_page">
    <img src="/img/vk.svg" alt="vk">
</a>
<a href="https://t.me/your_channel">
    <img src="/img/telegram.svg" alt="telegram">
</a>
</div>

<div class="social-icons--line--three">
            <img src="/img/line/LineBottom.jpg" alt="">
        </div>

    </div>

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
                <a href="{{url('contacts')}}" class="header-menu-item-url">Контакты</a>
            </li>

            @if (!Auth::guest())
            <a class="profile-url" href="/cabinet">Профиль</a>
            @else
            @endif

            
        @if (!Auth::guest())
        <!-- <div class="logout-btn-shows" tokendat="{{ csrf_token() }}">
            Выйти
        </div> -->
        @else
        <div class="register-btn-shows">
            Зарегистрироваться
        </div>
        <div class="auth-btn-shows">
           Войти
        </div>
        @endif


        </ul>


</div>


