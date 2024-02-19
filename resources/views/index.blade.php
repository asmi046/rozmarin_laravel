
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
        {{-- <img src="{{asset('img/hall-decor-img.png')}}" class="hall-section__decor-img hall-section__decor-img--left" aria-hidden="true" alt="">
        <img src="{{asset('img/hall-decor-img.png')}}" class="hall-section__decor-img hall-section__decor-img--right" aria-hidden="true" alt=""> --}}
        <div class="inner">
            <div class="f-img-box">
                <img src="{{asset('img/f-img-5.svg')}}" alt="" class="f-img-5">
                <img src="{{asset('img/f-img-6.svg')}}" alt="" class="f-img-6">
                <img src="{{asset('img/f-img-4.svg')}}" alt="" class="f-img-4">
                <img src="{{asset('img/f-img-3.svg')}}" alt="" class="f-img-3">
                <img src="{{asset('img/f-img-2.svg')}}" alt="" class="f-img-2">
                <img src="{{asset('img/f-img-1.svg')}}" alt="" class="f-img-1">
            </div>
            {{-- <div class="hall__phone-box">
                <a href="tel:+7{{ phone_format($options['phone']) }}" class="hall__phone">{{ $options['phone'] }}</a>
                <a href="tel:+7{{ phone_format($options['phone2']) }}" class="hall__phone">{{ $options['phone2'] }}</a>
            </div>
            <h1 class="page-title">Студия<br> ландшафтного дизайна</h1> --}}

            <h1 class="page-title">Добро пожаловать в студию ландшафтного дизайна «Розмарин»!</h1>
            <p class="header_center_text">Мы очень любим свое дело, с радостью создадим для Вас уникальный красивый и функциональный сад, чтобы Вы чувствовали себя в нем уютно и комфортно.</p>
            <p class="header_center_text">В работе мы применяем творческий, индивидуальный подход к каждому клиенту, точность расчетов и высокое качество выполнения работ.</p>
            <p class="header_center_text">Наши ценности - честность и ответственность в работе, трудолюбие, уважение к людям и постоянное развитие в своем деле.</p>

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
                    <img src="{{asset('img/f-img-6.svg')}}" alt="" class="ld-img-1">
                    <img src="{{asset('img/f-img-2.svg')}}" alt="" class="ld-img-2">
                    <img src="{{asset('img/ld.png')}}" alt="" class="ld-img">
                </div>
            </div>
        </div>
    </section>

    <section class="services-section" id="services">
        {{-- <img src="{{asset('img/services-decor-img.png')}}" class="services-section__decor-img services-section__decor-img--left" aria-hidden="true" alt="">
        <img src="{{asset('img/services-decor-img.png')}}" class="services-section__decor-img services-section__decor-img--right" aria-hidden="true" alt=""> --}}
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
            <h2 class="section-title">Наши проекты</h2>
            <div class="our-works-box">
                @foreach ($main_project as $item)
                    <x-project.card :item="$item"></x-project.card>
                @endforeach
            </div>
            <a href="{{route('projects')}}" class="btn">Смотреть все примеры работ</a>
        </div>
    </section>
    <section class="contact-section" id="contacts">
        <div class="inner">
            <h2 class="section-title">Контакты</h2>
            <p class="subtitle">Мы оперативно ответим на любые ваши вопросы</p>
            <div class="contacts">
                <div class="contacts__left-col">
                    <h3>Ландшафтный дизайнер в Курске:</h3>
                    <ul class="contact-list">
                        <li>
                            <a href="tel:+7{{ phone_format($options['phone']) }}">{{ $options['phone'] }}</a>
                        </li>
                        <li>
                            <a href="tel:+7{{ phone_format($options['phone2']) }}">{{ $options['phone2'] }}</a>
                        </li>
                        <li>
                            <a href="mailto:{{ $options['email'] }}">{{ $options['email'] }}</a>
                        </li>
                    </ul>
                    <h3>Ландшафтный дизайнер в Белгороде:</h3>
                    <ul class="contact-list">
                        <li>
                            <a href="tel:+7{{ phone_format($options['phone_bel']) }}">{{ $options['phone_bel'] }}</a>
                        </li>
                    </ul>
                    <div class="social-link-box">
                        <a href="{{ $options['vk_lnk'] }}" class="social-link social-link--vk">ВК</a>
                        <a href="{{ $options['tg_lnk'] }}" class="social-link social-link--telegram">ВК</a>
                    </div>
                </div>
                <div class="contacts__right-col">

                    <x-consultation-form.form></x-consultation-form.form>
                </div>
            </div>

        </div>
    </section>
@endsection
