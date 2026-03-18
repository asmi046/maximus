@extends('layouts.all')

@php
    $title = '';
    $description = '';
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <section id="contacts-header" class="contacts-header">
        <div class="container">
            <x-div-icon icon="map_pin">г. Курск, пр-т Вячеслава Клыкова, д. 16</x-div-icon>
            <x-a-icon href="#" icon="phone" class="h_phone">+7 (4712)310-810</x-a-icon>
            <a href="#" class="button button-white">Позвонить</a>
        </div>
    </section>

    <section id="main-banner" class="main-banner">
        <div class="container">
            <div class="main-banner__text">
                <h1>Лечение наркомании и алкоголизма в Курске и Курской области</h1>
                <p>Приватный персонализированный клинико-реабилитационный центр</p>
                <a href="#" class="button">Консультация специалиста</a>
            </div>
            <div class="main-banner__stats">
                <div class="stat-block">
                    <p class="stat-block__title">БОЛЕЕ</p>
                    <span class="stat-block__number">7</span>
                    <p class="stat-block__subtitle">лет центру</p>
                </div>
                <div class="stat-block">
                    <p class="stat-block__title">БОЛЕЕ</p>
                    <span class="stat-block__number">100</span>
                    <p class="stat-block__subtitle">пациентов</p>
                </div>
                <div class="stat-block">
                    <p class="stat-block__title">Пациенты</p>
                    <span class="stat-block__number">4+</span>
                    <p class="stat-block__subtitle">регионов</p>
                </div>
                <div class="stat-block">
                    <p class="stat-block__title">Конфиденциальность</p>
                    <span class="stat-block__number">100%</span>
                    <p class="stat-block__subtitle">гарантия</p>
                </div>
            </div>

        </div>
    </section>

@endsection
