
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
        <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
    </div>

    <section class="service-detail-page content-page">
        <div class="inner">
            <h1 class="page-title">
                {{ $service_info->title }}
            </h1>

            {!! $service_info->description !!}


            @if (count($service_info->galery) > 0)
                <!-- Slider main container -->
                <div class="ex-slider-box">
                    <div class="swiper ex-slider">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @foreach ($service_info->galery as $item)
                                <div class="swiper-slide">
                                    <div class="lightgallery-box" data-src="{{ Storage::url($item) }}">
                                        <img src="{{ Storage::url($item) }}" alt="{{ $service_info->title }}" class="lightgallery">
                                    </div>
                                </div>
                            @endforeach



                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                </div>
            @endif


        </div>
    </section>
@endsection
