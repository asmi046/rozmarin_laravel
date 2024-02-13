
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
            <h1 class="page-title">Портфолио</h1>
            <div class="our-works-box">
                @foreach ($all_project as $item)
                    <x-project.card :item="$item"></x-project.card>
                @endforeach
            </div>
            <x-pagination :tovars="$all_project"></x-pagination>
        </div>
    </section>
@endsection
