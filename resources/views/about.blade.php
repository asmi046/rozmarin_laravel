
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
