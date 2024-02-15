
@extends('layouts.all')

@php
    $title = !empty($project->seo_title)?$project->seo_title:$project->title;
    $description = !empty($project->seo_description)?$project->seo_description:$project->title;
@endphp

@section('title', $title)
@section('description', $description)
@section('main')
    <div class="inner">
        <x-breadcrumbs.main :project="$project"></x-breadcrumbs.main>
    </div>

    <section class="service-detail-page content-page">
        <div class="inner">
            <h1 class="page-title">
                {{ $project->title }}
            </h1>

            <p class="year">Проект выполнен в {{ $project->year }} году</p>
            @if (!empty($project->file))
                <p class="presentation_file">
                    <a href="{{Storage::url($project->file[0])}}">Презентация проекта</a>
                </p>
            @endif

            {!! $project->description !!}


            @if (count($project->galery) > 0)
                <!-- Slider main container -->
                <div class="ex-slider-box">
                    <div class="swiper ex-slider">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @foreach ($project->galery as $item)
                                <div class="swiper-slide">
                                    <div class="lightgallery-box" data-src="{{ Storage::url($item) }}">
                                        <img src="{{ Storage::url($item) }}" alt="{{ $project->title }}" class="lightgallery">
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
