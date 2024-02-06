
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
            <li><span>Портфолио</span></li>
        </ul>
    </div>
    <section class="our-work-page">
        <div class="inner">
            <h1 class="page-title">О компании</h1>
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
                <div class="our-work">
                    <div class="our-work__img lightgallery-box" data-src="{{asset('img/ow-7.jpg')}}">
                        <img src="{{asset('img/ow-7.jpg')}}" alt="" class="lightgallery">
                        <span class="our-work__marker">Казенные участки</span>
                    </div>
                    <div class="our-work__text">
                        <span class="our-work__name">Пример названия</span>
                        <a href="#" class="our-work__link">Подробнее <span>→</span></a>
                    </div>
                </div>
                <div class="our-work">
                    <div class="our-work__img lightgallery-box" data-src="{{asset('img/ow-8.jpg')}}">
                        <img src="{{asset('img/ow-8.jpg')}}" alt="" class="lightgallery">
                        <span class="our-work__marker">Казенные участки</span>
                    </div>
                    <div class="our-work__text">
                        <span class="our-work__name">Пример названия</span>
                        <a href="#" class="our-work__link">Подробнее <span>→</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
