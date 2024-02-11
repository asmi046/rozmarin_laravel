
@extends('layouts.all')

@php
    $title = !empty($service_info->seo_title)?$service_info->seo_title:$service_info->title;
    $description = !empty($service_info->seo_description)?$service_info->seo_description:$service_info->title;
    $pageTitle = "Презентация региона"

@endphp

@section('title', $title)
@section('description', $description)
@section('main')
    <div class="inner">
        <ul class="breadcrumbs">
            <li><a href="/">Главная</a> <i>/</i></li>
            <li><span>Ландшафтное проектирование и 3D визуализация</span></li>
        </ul>
    </div>
    <section class="service-detail-page content-page">
        <div class="inner">
            <h1 class="page-title">
                {{ $service_info->title }}
            </h1>

            {!! $service_info->description !!}

            <!-- Slider main container -->
            <div class="ex-slider-box">
                <div class="swiper ex-slider">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="lightgallery-box" data-src="{{asset('img/ex-1.jpg')}}">
                                <img src="{{asset('img/ex-1.jpg')}}" alt="" class="lightgallery">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="lightgallery-box" data-src="{{asset('img/ex-2.jpg')}}">
                                <img src="{{asset('img/ex-2.jpg')}}" alt="" class="lightgallery">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="lightgallery-box" data-src="{{asset('img/ex-3.jpg')}}">
                                <img src="{{asset('img/ex-3.jpg')}}" alt="" class="lightgallery">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="lightgallery-box" data-src="{{asset('img/ex-4.jpg')}}">
                                <img src="{{asset('img/ex-4.jpg')}}" alt="" class="lightgallery">
                            </div>
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                  <!-- If we need pagination -->
                  <div class="swiper-pagination"></div>

            </div>

        </div>
    </section>
@endsection
