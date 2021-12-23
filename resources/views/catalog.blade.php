@php
$seoContent = [
    [ 
        'title' => 'Каталог товаров для собак',
        'text' => 'Любящие владельцы собак и кошек всегда хотят порадовать 
                        своих любимцев новыми игрушками, 
                        приобрести качественную амуницию, 
                        обеспечить животному полноценное питание и отдых, 
                        заботятся о его здоровье. Зоомагазин — это любимое место для всех любителей животных.',
        'subtitle' => 'Каким должен быть хороший магазин товаров для животных',
        'subtext' => 'Многие владельцы животных часами просматривают адреса зоомагазинов в
                        интернете,
                        читают
                        отзывы. Далеко не каждый зоомагазин в Киеве и других городах соответствует
                        критериям,
                        важным
                        для
                        покупателя:'
    ]
];
@endphp

@extends('layouts.base')
@section('content')
<div class="catalog-container">
    <div class="catalog-container__pet-catalog">
        @include("widgets.pet-catalog")
    </div>
    <div class="catalog-container__catalog-list">
        @include("widgets.catalog-list")
    </div>
    <div class="catalog-container__seo">
        @foreach($seoContent as $content)
        @include("widgets.seo", ['content' => $content] )
        @endforeach
    </div>
</div>
@endsection