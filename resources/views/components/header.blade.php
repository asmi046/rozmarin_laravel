<header id="header">
    <div class="inner">
        <a href="/" class="logo">
            <img src="{{asset('img/logo.svg')}}" alt="Логотип">
        </a>
        <nav>
            <menu class="main-menu">
                <x-menu-puncts></x-menu-puncts>
            </menu>
        </nav>
        <div class="header-contacts">
            <div class="header-contacts__phone-box">
                <a href="tel:+7{{ phone_format($options['phone']) }}" class="header-contacts__phone" >{{ $options['phone'] }}</a>
                <a href="tel:+7{{ phone_format($options['phone2']) }}" class="header-contacts__phone" >{{ $options['phone2'] }}</a>
            </div>
            <a href="{{ phone_format($options['vk_lnk']) }}" class="social-link social-link--vk">ВК</a>
            <button class="burger-btn"><span></span></button>
        </div>
    </div>
</header>
