
@extends('layouts.all')

@php
    $title = "Политика конфиденциальности";
    $description = "Политика конфиденциальности";
@endphp

@section('title', $title)
@section('description', $description)
@section('main')
    <div class="inner">
        <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
    </div>

    <section class="about-page">
        <div class="inner">
            <h1 class="page-title">{{ $title }}</h1>

            {!! $options['policy'] !!}

        </div>
    </section>
@endsection
