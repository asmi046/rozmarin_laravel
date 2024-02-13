<footer id="footer">
    <div class="inner">
        <img src="{{asset('img/logo.svg')}}" class="footer-logo">
       <div class="footer-content">
        <div class="footer-content__top">

                <menu class="main-menu">
                    <x-menu-puncts></x-menu-puncts>
                </menu>
            </div>
            <div class="footer-content__bottom">
                <span class="footer__copyright">© Все права защищены. 2021 - {{ date("Y")}}</span>
                <a href="#" class="footer__privacy-policy">Политика конфиденциальности</a>
            </div>
       </div>


    </div>
</footer>
