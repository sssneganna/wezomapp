@php
$slider = [
    [
        'img' => '/assets/slider-1.jpg',
        'gallery' => '/assets/slider-big-1.jpg'
        ],
        [
        'img' => '/assets/slider-2.jpg',
        'gallery' => '/assets/slider-big-1.jpg'
        ],
        [
        'img' => '/assets/slider-3.jpg',
        'gallery' => '/assets/slider-big-1.jpg'
        ],
        [
        'img' => '/assets/slider-4.jpg',
        'gallery' => '/assets/slider-big-1.jpg'
        ],
        [
            'video' => [],
            'video-gallery' => 'https://www.youtube.com/embed/pXeTgZWTvbQ'
        ]
    ];



$rating = [
        ['rating' => 4]
        ];

$priceList = [
    [
        'left-text' => 'Цена со скидкой:',
        'price-new' => '1241,00 ₴',
        'price-old' => '1280,00 ₴',
        'info-delivery' => 'Бесплатная доставка для этого товара',
        'sticker' => '-5%'

    ],
    [
        'left-icon-text' => 'Автозаказ',
        'price-new' => '1180,20 ₴',
        'price-old' => '',
        'info-delivery' => ''
    ]
];

$weightList = [
    [
        'id' => 'weight1',
        'for' => 'weight1',
        'value' => '2.72',
        'text' => 'Вес: 2,72 кг',
        'text-weight' => '2,72 кг',
        'price' => '184,50 грн/кг',
        'checked' => ''
    ],
    [
        'id' => 'weight2',
        'for' => 'weight2',
        'value' => '7',
        'text' => 'Вес: 7 кг',
        'text-weight' => '7 кг',
        'price' => '162,00 грн/кг',
        'checked' => 'checked',
    ],
    [
        'id' => 'weight3',
        'for' => 'weight3',
        'value' => '15',
        'text' => 'Вес: 15кг',
        'text-weight' => '15 кг',
        'price' => '154,20 грн/кг',
        'checked' => ''
    ],
];

@endphp

<section class="product">
    <div class="container">
        <h1 class="product__title">Royal Canin Maxi Adult Сухой корм для собак крупных пород, 7 кг</h1>
        <div class="product__flex-container">
        <div class="product__top product__top--show">
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
                        <a class="link link--dashed" href="#reviews-questions">Отзывы (65)</a>
                    </div>
                    <div class="product__rating-link">
                        <a class="link link--dashed" href="#reviews-questions">Вопросы (3)</a>
                    </div>
                </div>
            </div>
            <div class="product__left">
                <div class="product-gallery">
                    <div class="product-gallery__nav">
                <ul class="slider-nav js-import js-slider-nav">
                    @foreach($slider as $item)
                    <li class="slider-nav__item">
                        @if(isset($item['img']))
                        <img class="slider-nav__image" src="{{$item['img']}}"  alt="image1">
                        @endif
                        @if(isset($item['video']))
                        <div class="slider-nav__video">
                            <svg  width="40" height="40" >
                                <use xlink:href="./dist/spritemap.svg#sprite-play-video"></use>
                            </svg>
                            <span class="slider-nav__text">Видеообзор</span>
                        </div>
                        @endif
                    </li>
                    @endforeach
                </ul>
                </div>
                <div class="product-gallery__overlay">
                    <div class="product-gallery__top">
                        <div class="product-gallery__stickers">
                            <div class="stickers">
                                <span class="sticker sticker--pink">Скидка -5%</span>
                            </div>
                        </div>
                        <div class="product-gallery__avatar">
                        <img  src="/assets/add-pet-dog.png" alt="add-pet-bg"></img>
                        <span class="product-gallery__avatar-icon">
                        <svg class="product-gallery__avatar-icon-check" width="10" height="8">
                                    <use xlink:href="./dist/spritemap.svg#sprite-check-white"></use>
                                </svg>
                        </span>
                        </div>
                        <div class="product-gallery__button">
                            <button  class="button button--size-small-l button--transparent-shadow button--transparent-hover">
                                <svg width="18" height="17" class="product-gallery__icon">
                                    <use xlink:href="./dist/spritemap.svg#sprite-favorites"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="product-gallery__slider">
                    <div class="slider js-slider-for">
                        @foreach($slider as $item)
                        <div class="slider__item">
                            @if(isset($item['gallery']))
                            <img class="slider__image" src="{{$item['gallery']}}"  alt="image1">
                            @endif
                            @if(isset($item['video-gallery']))
                            <iframe width="100%" height="480" src="{{$item['video-gallery']}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            @endif
                        </div>
                        @endforeach
                    </div>
                    </div>
                    <div class="product-gallery__share">
                        <div class="share-block">
                            <div class="share-block__text">Поделиться</div>
                            <div class="share-block__icon">
                            <ul class="social-icon">
                                <li class="social-icon__item">
                                    <a class="button button--size-small-l button--share" target="blank"
                                        href="https://www.facebook.com/">
                                        <svg width="8" height="16">
                                            <use xlink:href="./dist/spritemap.svg#sprite-icon-fb">
                                            </use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social-icon__item">
                                    <a class="button button--size-small-l button--share" target="blank"
                                        href="https://twitter.com/?lang=ru">
                                        <svg width="17" height="14">
                                            <use xlink:href="./dist/spritemap.svg#sprite-icon-twitter">
                                            </use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            </div>
                        </div>
</div>
                    </div>
                </div>
            </div>
        <div class="product__right">
            <div class="product__top product__top--hide">
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
                        <a class="link link--dashed" href="#reviews-questions">Отзывы (65)</a>
                    </div>
                    <div class="product__rating-link">
                        <a class="link link--dashed" href="#reviews-questions">Вопросы (3)</a>
                    </div>
                </div>
            </div>
            <div class="product__body">
                
                <div class="product__body-left">
                    <div class="product__weight">
                        <div class="weight">
                            <div class="weight__placeholder"></div>
                            <div class="weight__list">
                                @foreach($weightList as $weightItem)
                                <div class="weight__item">
                                    <input class="weight__custom-input" type="radio" id="{{$weightItem['id']}}" name="weight" value="{{$weightItem['value']}}" {{$weightItem['checked']}}>
                                    <label  for="{{$weightItem['for']}}">
                                        <span class="weight__text">{{$weightItem['text']}}</span> 
                                        <span class="weight__box"> 
                                            <span class="weight__text-weight">{{$weightItem['text-weight']}}</span>
                                            <span class="weight__price">  {{$weightItem['price']}}</span>
                                        </span> 
                                    </label>
                                </div>
                                @endforeach  
                            </div>
                        </div>
                    </div>
                    <div class="product__price-container">
                    <div class="product-cost">
                        @foreach($priceList as $item)
                        <div class="product-cost__item">
                        <div class="product-cost__price">
                        @if(isset($item['left-text']))
                            <div class="product-cost__left">{{$item['left-text']}}</div>
                           @endif
                           @if(isset($item['left-icon-text']))
                           <div class="product-cost__left">
                                <svg class="product-cost__price-icon" width="20" height="20">
                                    <use xlink:href="./dist/spritemap.svg#sprite-price-icon"></use>
                                </svg>
                                <div class="product-cost__price-name">{{$item['left-icon-text']}}</div>
                            </div>
                           @endif
                                <div class="product-cost__right">
                                    <span class="product-cost__price-new">{{$item['price-new']}}</span>
                                <span class="product-cost__price-old">{{$item['price-old']}}</span>
                                @if(isset($item['sticker']))
                                <span class="product-cost__stickers">
                                <span class="stickers">
                                <span class="sticker sticker--pink">{{$item['sticker']}}</span>
                            </span>
</span>
@endif
                            </div>
                            </div>
                            <div class="product-cost__delivery">{{$item['info-delivery']}}</div>
                        </div>
                        @endforeach
                                <div class="product-cost__price-info-box">
                                <div class="product-cost__left"></div>
                                <div class="product-cost__price-info">Экономия до 10% на заказах с регулярными поставками
                                    <svg width="14" height="14">
                                        <use xlink:href="./dist/spritemap.svg#sprite-price-icon-info"></use>
                                    </svg>  
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="product__body-right">
                    <div class="product__quantity-box">
                        <div class="product__quantity">
                        <div class="quantity"  data-min="1" data-max="10" data-step="1">
                            <div class="quantity__button number-minus">
                                <svg width="17" height="17">
                                    <use xlink:href="./dist/spritemap.svg#sprite-minus-input"></use>
                                </svg>
                            </div>
                            <input type="number"  class="quantity__input" name="count" value="1">
                            <div class="quantity__button number-plus">
                                <svg width="17" height="17">
                                    <use xlink:href="./dist/spritemap.svg#sprite-plus-input"></use>
                                </svg>
                            </div>
                    </div>
                    </div>
                    <div class="product__offer">
                        <span>Заказать упаковку х 8шт.</span>
                        <span>(+2% к скидке)</span>
                    </div>
                    </div>
                <div class="product__button">
                    <button class="button button--size-rectangle button--filled-orange">
                        <svg class="product__basket-icon" width="20" height="20">
                            <use xlink:href="./dist/spritemap.svg#sprite-basket"></use>
                        </svg>
                        <span>Купить</span>
                    </button>
                </div>
                <div class="product__button">
                    <button class="button button--size-rectangle button--border-orange">
                        <span>Купить в 1 клик</span>
                    </button>
                </div>
                <a href="#" class="product__presence">
                    <span class="product__presence-icon">
                   
                    </svg><svg class="product__presence-icon-check" width="10" height="8">
                        <use xlink:href="./dist/spritemap.svg#sprite-check"></use>
                    </svg>

</span>
                    <span class="product__presence-text">В наличии в 7 магазинах</span>
                </a>
            </div>
    </div>
        <div class="product__bottom"> @include("widgets.accordion")</div>
    </div>
</section>