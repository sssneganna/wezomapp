@php
$seoContent = [
    [ 
        'title' => 'Зоомагазин для домашних питомцев',
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
<div class="home">
    <div class="home__best-deals">
    @include("widgets.best-deals")
    </div>
    <div class="home__blog">
    <div class="blog-section">
        <div class="container">
            <div class="blog-section__content">
                <div class="blog-section__left">
                    @include("widgets.search-blog")
                </div> 
                <div class="blog-section__right"> 
                    @include("widgets.blog")
                </div>
            </div>
        </div>
    </div> 
</div>
<div class="home__benefits">
    @include("widgets.benefits")
</div>
<div class="home__seo">
    @foreach($seoContent as $content)
        @include("widgets.seo", ['content' => $content] )
    @endforeach
    </div>
</div>
@endsection