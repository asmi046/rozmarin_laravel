
@extends('layouts.all')

@php
    $title = "Заголовок";
    $description = "Дескрипшен";
    $pageTitle = "Презентация региона"

@endphp

@section('title', $title)
@section('description', $description)
@section('main')
    <div class="inner">
        <ul class="breadcrumbs">
            <li><a href="/">Главная</a> <i>/</i></li>
            <li><span>О компании</span></li>
        </ul>
    </div>
    <section class="about-page">
        <div class="inner">
            <h1 class="page-title">О компании</h1>
            <div class="about-content">
                <div class="about-content__left-col">
                    <div class="ld-img-box">
                        <img src="{{asset('img/lg-img-1.svg')}}" alt="" class="ld-img-1">
                        <img src="{{asset('img/lg-img-2.svg')}}" alt="" class="ld-img-2">
                        <img src="{{asset('img/ld.png')}}" alt="" class="ld-img">
                    </div>
                </div>
                <div class="about-content__right-col">
                    <p>
                        Давайте знакомиться, меня зовут Марина Шабанова, я - Ваш ландшафтный дизайнер и руководитель ландшафтной студии "Розмарин".
                    </p>
                    <p>
                        Цель студии - создание красивых и функциональных садов с учетом архитектуры дома, эстетики и удобства использования.
                    </p>
                    <p>
                        Создание проекта ландшафтного дизайна - это большой труд дизайнера, инженера и дендролога, который обязательно удовлетворит пожелания самого взыскательного и требовательного владельца сада и членов его семьи.
                    </p>
                    <p>
                        Мы озеленяем сады, реализуем проекты благоустройства территории и оказываем услуги по комплексному профессиональному уходу за садами.
                    </p>
                </div>
            </div>
            <h2 class="section-title">Этапы работы</h2>
            <ol class="work-stages-list">
                <li class="work-stages-list-item">
                    <span class="work-stages-list-item__caption">Выезд</span>
                    <p>
                        Выезжаем на участок, заполняем техническое задание со всеми пожеланиями владельца и членов его семьи, анализируем территорию, архитектуру строений и окружающего пространства, производим фото и видеосьемку.
                    </p>
                </li>
                <li class="work-stages-list-item">
                    <span class="work-stages-list-item__caption">Концепция</span>
                    <p>
                        Создаем идею будущего сада, разрабатываем оптимальное зонирование, подбераем мощение, растения, варианты освещения и малых архитектурных форм, далее согласовываем эскиз с владельцем.
                    </p>
                </li>
                <li class="work-stages-list-item">
                    <span class="work-stages-list-item__caption">Рабочие чертежи</span>
                    <p>
                        Разрабатываем только после согласования концепции! На основе рабочей документации владелец участка сможет выполнить реализацию концепции сада собственными силами или с помощью наших специалистов. Чертежи сэкономят время на подсчет необходимых растений и материалов, сбережет деньги на покупку ненужных материалов или их излишков, упростят контроль за строительством сада.
                    </p>
                </li>
                <li class="work-stages-list-item">
                    <span class="work-stages-list-item__caption">Реализация проекта</span>
                    <p>
                        Выполняем весь комплекс работ по проекту:<br>
                        - строительство жилых домов (по проекту архитектора), беседок;<br>
                        - проведение земельных работ, прокладка инженерных коммуникаций;<br>
                        - создание малых архитектурных форм, устройство дорожек и площадок;<br>
                        - посадка растений, монтаж систем автоматического полива, освещения сада.
                    </p>
                </li>
                <li class="work-stages-list-item">
                    <span class="work-stages-list-item__caption">Уход за садом</span>
                    <p>
                        По желанию владельца комплексно ухаживаем за реализованным садом в течении всего сезона или периодически выезжаем для осуществления сезонных работ (весеняя обрезка растений, подготовка сада к летнему или зимнему сезону, посадка огородных культур, обработка от болезней и вредителей, укрытие растений на зиму, разовые консультации и т.д.).
                    </p>
                </li>
            </ol>
            <h2 class="section-title">
                Наша команда
            </h2>
            <div class="teams">
                <div class="teams-item">
                    <img src="{{asset('img/teams-1.jpg')}}" alt="" class="teams-item__img">
                    <span class="teams-item__name">Иванов <br> Иван Иванович</span>
                </div>
                <div class="teams-item">
                    <img src="{{asset('img/teams-2.jpg')}}" alt="" class="teams-item__img">
                    <span class="teams-item__name">Петрова <br> Мария Ивановна</span>
                </div>
                <div class="teams-item">
                    <img src="{{asset('img/teams-3.jpg')}}" alt="" class="teams-item__img">
                    <span class="teams-item__name">Сидоров <br> Иван Иванович</span>
                </div>
                <div class="teams-item">
                    <img src="{{asset('img/teams-4.jpg')}}" alt="" class="teams-item__img">
                    <span class="teams-item__name">Константинопольская <br> Анастасия Игоревна</span>
                </div>
            </div>
        </div>
    </section>
@endsection
