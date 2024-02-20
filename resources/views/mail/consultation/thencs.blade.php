@extends('layouts.all')

@php
    $title = "Благодарим за обращении";
    $description = "Благодарим за обращении, ждите обратной связи от наших специалистов";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

<div class="inner">
    <ul class="breadcrumbs">
        <li><a href="{{ route('home') }}">Главная</a> <i>/</i></li>
        <li><span>Портфолио</span></li>
    </ul>
</div>

<section class="our-work-page">
    <div class="inner">
        <h1>Благодарим за обращение</h1>
        <p>Мы свяжемся с Вами в самое ближайшее время</p>
    </div>
</section>

@endsection
