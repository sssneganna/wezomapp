@php
$sliderNav = [
    [
        'img' => '/assets/slider-1.jpg'
        ],
        [
        'img' => '/assets/slider-2.jpg'
        ],
        [
        'img' => '/assets/slider-3.jpg'
        ],
        [
        'img' => '/assets/slider-4.jpg'
        ]
    ];

$slider = [
    [
        'img' => '/assets/slider-big-1.jpg'
        ],
        [
            'img' => '/assets/slider-big-1.jpg'
        ],
        [
            'img' => '/assets/slider-big-1.jpg'
        ],
        [
            'img' => '/assets/slider-big-1.jpg'
        ]
    ];

$rating = [
        ['rating' => 4]
        ];

@endphp
<section class="product">
    <div class="container">
        <h1 class="product__title">Royal Canin Maxi Adult Сухой корм для собак крупных пород, 7 кг</h1>
        <div class="product__flex-container">
        <div class="product__left">
        <ul class="slider-nav js-slider-nav">
                                @foreach($sliderNav as $item)
                                <li class="slider-nav__item">
                                    <img class="slider-nav__image" src="{{$item['img']}}"  alt="image1">
                                </li>
                            @endforeach
                            </ul>
                            <ul class="slider js-slider-for">
                            @foreach($slider as $item)
                                <li class="slider__item">
                                    <img class="slider__image" src="{{$item['img']}}"  alt="image1">
                                </li>
                            @endforeach
                            </ul>
        </div>
        <div class="product__right">
            <div class="product__top">
                <a href="#" class="product__brand">
<img src="/assets/product-brand.png" alt="a"></img>
<span class="product__brand-text">Чехия</span>
                </a>
                <div class="product__rating">
                <div class="rating">
                @foreach($rating as $item)
         @for($i=1; $i<=5; $i++)
         <span class="rating__star rating__star--size {{$i<=$item['rating'] ? 'rating__star--checked' : ''}}"></span>
         @endfor
           @endforeach
        </div>
        <div  class="product__rating-link">
            <a class="link link--dashed" href="#">Отзывы (65)</a>

            </div>
        <div class="product__rating-link">
        <a class="link link--dashed" href="#">Вопросы (3)</a>
        </div>
            </div>
        </div>
        <div class="product__body">
            <div class="product__body-left"></div>
            <div class="product__body-right"></div>
        </div>
<div class="product__bottom"> @include("widgets.accordion")</div>
</div>

    </div>
</section>