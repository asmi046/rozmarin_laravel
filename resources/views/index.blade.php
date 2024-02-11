
@extends('layouts.all')

@php
    $title = "Розмарин - студия ландшафтного дизайна";
    $description = "Быстрая и качественная разработка ландшафтного проекта любой сложности, выезд на место, контроль реализации на каждом этапе.";
    $pageTitle = "Презентация региона"

@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <section class="hall-section">
        <img src="{{asset('img/hall-decor-img.png')}}" class="hall-section__decor-img hall-section__decor-img--left" aria-hidden="true" alt="">
        <img src="{{asset('img/hall-decor-img.png')}}" class="hall-section__decor-img hall-section__decor-img--right" aria-hidden="true" alt="">
        <div class="inner">
            <div class="f-img-box">
                <img src="{{asset('img/f-img-4.svg')}}" alt="" class="f-img-4">
                <img src="{{asset('img/f-img-3.svg')}}" alt="" class="f-img-3">
                <img src="{{asset('img/f-img-2.svg')}}" alt="" class="f-img-2">
                <img src="{{asset('img/f-img-1.svg')}}" alt="" class="f-img-1">
            </div>
            <div class="hall__phone-box">
                <a href="tel:+79606905951" class="hall__phone">+7 960 690 59 51</a>
                <a href="tel:+79191707507" class="hall__phone">+7 919 170 75 07</a>
            </div>
            <h1 class="page-title">Студия ландшафтного дизайна</h1>
            <a href="#contacts" class="btn anchor-link">Получить консультацию</a>
        </div>
        <div class="inner about-box">
            <div class="about-box__left-col">
                <h2 class="section-title">О компании</h2>
                <p class="subtitle">ландшафтные проекты любой сложности</p>
                <p>
                    Давайте знакомиться, меня зовут Марина Шабанова, я - Ваш ландшафтный дизайнер и руководитель ландшафтной студии "Розмарин".
                </p>
                <a href="{{route('about')}}" class="btn">Подробнее</a>
            </div>
            <div class="about-box__right-col">
                <div class="ld-img-box">
                    <img src="{{asset('img/lg-img-1.svg')}}" alt="" class="ld-img-1">
                    <img src="{{asset('img/lg-img-2.svg')}}" alt="" class="ld-img-2">
                    <img src="{{asset('img/ld.png')}}" alt="" class="ld-img">
                </div>
            </div>
        </div>
    </section>

    <section class="services-section" id="services">
        <img src="{{asset('img/services-decor-img.png')}}" class="services-section__decor-img services-section__decor-img--left" aria-hidden="true" alt="">
        <img src="{{asset('img/services-decor-img.png')}}" class="services-section__decor-img services-section__decor-img--right" aria-hidden="true" alt="">
        <div class="inner">
            <h2 class="section-title">
                Услуги
            </h2>
            <div class="services-box">
                @foreach ($all_services as $item)
                    <x-service.main :item="$item"></x-service.main>
                @endforeach
            </div>
        </div>
    </section>

    <section class="our-works-section" id="our-works">
        <div class="inner clearfix">
            <h2 class="section-title">Наши работы</h2>
            <div class="our-works-box">
                <div class="our-work">
                    <div class="our-work__img lightgallery-box" data-src="{{asset('img/ow-1.jpg')}}">
                        <img src="{{asset('img/ow-1.jpg')}}" alt="" class="lightgallery">
                        <span class="our-work__marker">Частные участки</span>
                    </div>
                    <div class="our-work__text">
                        <span class="our-work__name">Пример названия</span>
                        <a href="#" class="our-work__link">Подробнее <span>→</span></a>
                    </div>
                </div>
                <div class="our-work">
                    <div class="our-work__img lightgallery-box" data-src="{{asset('img/ow-2.jpg')}}">
                        <img src="{{asset('img/ow-2.jpg')}}" alt="" class="lightgallery">
                        <span class="our-work__marker">Частные участки</span>
                    </div>
                    <div class="our-work__text">
                        <span class="our-work__name">Пример длинного названия   </span>
                        <a href="#" class="our-work__link">Подробнее <span>→</span></a>
                    </div>
                </div>
                <div class="our-work">
                    <div class="our-work__img lightgallery-box" data-src="{{asset('img/ow-3.jpg')}}">
                        <img src="{{asset('img/ow-3.jpg')}}" alt="" class="lightgallery">
                        <span class="our-work__marker">Частные участки</span>
                    </div>
                    <div class="our-work__text">
                        <span class="our-work__name">Пример очень неожиданно длинного названия   </span>
                        <a href="#" class="our-work__link">Подробнее <span>→</span></a>
                    </div>
                </div>
                <div class="our-work">
                    <div class="our-work__img lightgallery-box" data-src="{{asset('img/ow-4.jpg')}}">
                        <img src="{{asset('img/ow-4.jpg')}}" alt="" class="lightgallery">
                        <span class="our-work__marker">Частные участки</span>
                    </div>
                    <div class="our-work__text">
                        <span class="our-work__name">Пример названия</span>
                        <a href="#" class="our-work__link">Подробнее <span>→</span></a>
                    </div>
                </div>
                <div class="our-work">
                    <div class="our-work__img lightgallery-box" data-src="{{asset('img/ow-5.jpg')}}">
                        <img src="{{asset('img/ow-5.jpg')}}" alt="" class="lightgallery">
                        <span class="our-work__marker">Частные участки</span>
                    </div>
                    <div class="our-work__text">
                        <span class="our-work__name">Пример названия</span>
                        <a href="#" class="our-work__link">Подробнее <span>→</span></a>
                    </div>
                </div>
                <div class="our-work">
                    <div class="our-work__img lightgallery-box" data-src="{{asset('img/ow-6.jpg')}}">
                        <img src="{{asset('img/ow-6.jpg')}}" alt="" class="lightgallery">
                        <span class="our-work__marker">Казенные участки</span>
                    </div>
                    <div class="our-work__text">
                        <span class="our-work__name">Пример названия</span>
                        <a href="#" class="our-work__link">Подробнее <span>→</span></a>
                    </div>
                </div>
            </div>
            <a href="{{route('ourWorks')}}" class="btn">Смотреть все примеры работ</a>
        </div>
    </section>
    <section class="contact-section" id="contacts">
        <div class="inner">
            <h2 class="section-title">Контакты</h2>
            <p class="subtitle">Мы оперативно ответим на любые ваши вопросы</p>
            <div class="contacts">
                <div class="contacts__left-col">
                    <ul class="contact-list">
                        <li>
                            +7 960 690 59 51
                        </li>
                        <li>
                            +7 919 170 75 07
                        </li>
                        <li>
                            <a href="mailto:landshaft.rosmarin@gmail.com">landshaft.rosmarin@gmail.com</a>
                        </li>
                    </ul>
                    <div class="social-link-box">
                        <a href="https://vk.com/club211378898" class="social-link social-link--vk">ВК</a>
                        <a href="https://vk.com/club211378898" class="social-link social-link--instagram">ВК</a>
                    </div>
                </div>
                <div class="contacts__right-col">
                    <form class="callback-form">
                        <label class="form-elem">
                            <input type="email" name="email" class="form-elem__field" placeholder="Ваш Email">
                            {{-- <span class="form-elem__error">ошибка вашу дивизию</span> --}}
                        </label>
                        <label class="form-elem">
                            <input type="tel" name="tel" class="form-elem__field tel-mask" placeholder="Ваш телефон">
                            {{-- <span class="form-elem__error">ошибка вашу дивизию</span> --}}
                        </label>
                        <label class="form-elem">
                            <input type="text" name="name" class="form-elem__field" placeholder="Ваше имя">
                            {{-- <span class="form-elem__error">ошибка вашу дивизию</span> --}}
                        </label>
                        <label class="form-elem">
                            <textarea name="query" id="" cols="30" rows="10" class="form-elem__textarea" placeholder="Ваш вопрос"></textarea>
                            {{-- <span class="form-elem__error">ошибка вашу дивизию</span> --}}
                        </label>
                        <button type="submit" class="btn">Отправить</button>
                        <span class="form-notification">Нажимая на кнопку “отправить заявку” вы соглашаетесь с <a href="#">политикой конфиденциальности</a></span>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
