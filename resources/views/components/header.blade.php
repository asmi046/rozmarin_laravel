<header id="header">
    <div class="inner">
        <a href="/" class="logo">
            <img src="{{asset('img/logo.png')}}" alt="Логотип">
        </a>
        <nav>
            <menu class="main-menu">
                <li>
                    <a href="{{route('about')}}">О компании</a>
                </li>
                <li>
                    <a href="./#services">Услуги</a>
                </li>
                <li>
                    <a href="{{route('ourWorks')}}">Портфолио</a>
                </li>
                <li>
                    <a href="./#contacts">Контакты</a>
                </li>
            </menu>
        </nav>
        <div class="header-contacts">
            <div class="header-contacts__phone-box">
                <span class="header-contacts__phone">+7 960 690 59 51</span>
                <span class="header-contacts__phone">+7 919 170 07 05</span>
            </div>
            <a href="https://vk.com/club211378898" class="social-link social-link--vk">ВК</a>
            <button class="burger-btn"><span></span></button>
        </div>
    </div>
</header>
