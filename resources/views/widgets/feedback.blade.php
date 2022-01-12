@php
$reviews = [
  ['rating' => 5,
  'name' => 'Татьяна Куприна',
  'date' => ' 12 апреля 2021',
  'title' => 'Отличный корм! Хороший состав',
  'text-review' => 'Отличный корм! Хороший состав. Собаки едят с удовольствием. Чувствуют себя прекрасно. Кормлю собак Фест Чойс уже не первый год. Всем довольны.',
  'image' => [
                [
                    'src' => './assets/reviews-img-1.jpg',
                    'alt' => '1',
                    'src-big' => './assets/reviews-big-1.jpg'
                    
                ],
                [
                    'src' => './assets/reviews-img-2.jpg',
                    'alt' => '2',
                    'src-big' => './assets/reviews-big-2.jpg'

                ]

            ]
  ],
  ['rating' => 4,
  'name' => 'Татьяна Куприна',
  'date' => ' 12 апреля 2021',
  'title' => 'Супер КОРМ!!!',
  'text-review' => 'Отличный корм! Хороший состав. Собаки едят с удовольствием. Чувствуют себя прекрасно. Кормлю собак Фест Чойс уже не первый год. Всем довольны.'
  ],
  ['rating' => 5,
  'name' => 'Татьяна Куприна',
  'date' => ' 12 апреля 2021',
  'title' => 'Поделюсь своим опытом',
  'text-review' => 'Перевёл Николь с натурального питания на 1st Choice Sensitive Skin&Coat Adult Lumb&Fish и остался очень доволен. Со стулом всё наладилось ( раньше переодично сталкивались с диареей), собака кушает с удовольствием и то, что заметили все знакомые - улучшилось состояние шерсти!! Восторг просто! Очень порадовал ещё тот факт, что консультант дал корм на пробу бесплатно, сейчас такое редко где встретишь. Это похвально, господа. Спасибо за внимание и дельные советы по питанию и уходу.',
  'image' => [
                [
                    'src' => './assets/reviews-img-3.jpg',
                    'alt' => '1',
                    'src-big' => './assets/reviews-big-3.jpg'
                    
                ]
            ],
    'button' => []
  ],
  ['rating' => 5,
  'name' => 'Татьяна Куприна',
  'date' => ' 12 апреля 2021',
  'title' => 'Моей собаке очень подошел этот корм!',
  'text-review' => 'Отличный корм! Хороший состав. Собаки едят с удовольствием. Чувствуют себя прекрасно. Кормлю собак Фест Чойс уже не первый год. Всем довольны.'
  ],
  ['rating' => 4,
  'name' => 'Татьяна Куприна',
  'date' => ' 12 апреля 2021',
  'title' => 'Моей собаке очень подошел этот корм!',
  'text-review' => 'Отличный корм! Хороший состав. Собаки едят с удовольствием. Чувствуют себя прекрасно. Кормлю собак Фест Чойс уже не первый год. Всем довольны.'
  ],
  ['rating' => 5,
  'name' => 'Татьяна Куприна',
  'date' => ' 12 апреля 2021',
  'title' => 'Поделюсь своим опытом',
  'text-review' => 'Перевёл Николь с натурального питания на 1st Choice Sensitive Skin&Coat Adult Lumb&Fish и остался очень доволен. Со стулом всё наладилось ( раньше переодично сталкивались с диареей), собака кушает с удовольствием и то, что заметили все знакомые - улучшилось состояние шерсти!! Восторг просто! Очень порадовал ещё тот факт, что консультант дал корм на пробу бесплатно, сейчас такое редко где встретишь. Это похвально, господа. Спасибо за внимание и дельные советы по питанию и уходу.'
  ]
    ];
   
$questions = [
    [
        
        'name' => 'SN',
        'title' => 'Sn',
        'text' => 'Можно ли смешивать сухой корм Royal Canin с домашней едой?'
        ],
        [
        
        'name' => 'MV',
        'title' => 'Mv',
        'text' => 'Как правильно смешивать сухой и влажный корм?'
        ],
        [
        
        'name' => 'TB',
        'title' => 'Tb',
        'text' => 'Почему среди рационов Royal Canin нет кормов с разными вкусами,например со вкусом ягненка или лосося?'
        ],
];

$productRating = [
    [ 'rating' => '5',
    'procent' => '81%'
    ],
    [ 'rating' => '4',
    'procent' => '9%'
    ],
    [ 'rating' => '3',
    'procent' => '5%'
    ],
    [ 'rating' => '2',
    'procent' => '2%'
    ],
    [ 'rating' => '1',
    'procent' => '0%'
    ],

];
@endphp

<div class="feedback">
    <div class="container">
        <div class="tabs js-tab">
            <ul class="tabs__buttons">
                <li class="tabs__button tabs__button--size-medium js-tab-trigger is-active" data-type-tab="multi" data-tab="reviews">Отзывы (65)</li>
                <li class="tabs__button tabs__button--size-medium js-tab-trigger" data-type-tab="multi" data-tab="questions">Вопросы (3)</li>
            </ul>
            <div class="tabs__content js-tab-content is-active" data-tab="reviews">
                <div class="feedback__reviews">
                    <div class="feedback__left">
                        <div class="reviews" id="reviews-questions">
                            <ul class="reviews__list">
                                @foreach($reviews as $item)
                                <li class="reviews__item js-comment">
                                    <div class="reviews__flex">
                                        <div class="reviews__info">
                                            <div class="reviews__rating">
                                                <div class="rating">
                                                    @for($i=1; $i<=5; $i++)
                                                    <span class="rating__star rating__star--size {{$i<=$item['rating'] ? 'rating__star--checked' : ''}}"></span>
                                                    @endfor
                                                </div>
                                            </div>
                                            <div class="reviews__name">{{$item['name']}}</div>
                                            <div class="reviews__date">{{$item['date']}}</div>
                                        </div>
                                        <div class="reviews__text">
                                            <div class="reviews__title">{{$item['title']}}</div>
                                            <div class="reviews__text-review"><span>{{$item['text-review']}}</span>
                                            @if(isset($item['button']))
                                            <button class="button button--dashed-orange button--inline">Читать больше</button>
                                            @endif
                                        </div>
                                        <div class="reviews__box">
                                            <div class="reviews__pictures">
                                                @if(isset($item['image']))
                                                @foreach($item['image'] as $image)
                                                <div class="reviews__picture-item">
                                                    
                                                    <a href="{{$image['src-big']}}" data-popup data-type="image">
                                                    <img src="{{$image['src']}}" alt="{{$image['alt']}}"></img>
                                                    </a>
                                                </div>
                                                @endforeach
                                                @endif
                                            </div>
                                            <div class="reviews__button">
                                                <button class="button button--ok">
                                                    <svg class="button__icon" width="15" height="15">
                                                        <use xlink:href="./dist/spritemap.svg#sprite-icon-ok"></use>
                                                    </svg>
                                                </button>
                                                <span class="reviews__button-count">78</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <div class="reviews__button">
                            <button class="button button--border-orange button--size-rectangle-small js-btn-showmore">Показать все отзывы</button>
                        </div>
                    </div>
                </div>
                <div class="feedback__right">
                    <div class="product-rating">
                        <div class="product-rating__left">
                            <div class="product-rating__circular-progress">
                                <div class="circle" id="circle-a">
                                    <strong data-value="0.95">95%</strong>
                                </div>
                            </div>
                            <span class="product-rating__info">пользователей рекомендуют этот продукт</span>
                        </div>
                        <div class="product-rating__right">
                            <div class="product-rating__title">Фильтровать по оценке</div>
                            <ul class="product-rating__list">
                                @foreach($productRating as $item)
                                <li class="product-rating__item">
                                    <div class="product-rating__value">
                                        <div class="rating">
                                            <span class="rating__star rating__star--size rating__star--checked"></span>      
                                        </div>
                                        <span class="product-rating__text">{{$item['rating']}}</span>
                                    </div>
                                    <div class="product-rating__progress">
                                        <span  style="width: {{$item['procent']}}"></span>
                                    </div>
                                    <div class="product-rating__text">{{$item['procent']}}</div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        </div>
                    <div class="feedback__bottom">
                        <div class="feedback__button">
                            <button class="button button--size-rectangle button--filled-orange">Написать отзыв </button>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <div class="tabs__content js-tab-content" data-tab="questions">
            <div class="feedback__reviews">
                    <div class="feedback__left">
                        <div class="reviews" >
                        <ul class="reviews__list">
                                @foreach($questions as $item)
                                <li class="reviews__item reviews__item--block">
                                    <div class="reviews__flex">
                                        <div class="reviews__info">
                                            <div class="reviews__img-box">
                                        <span class="reviews__short-name">{{$item['name']}}</span>
                                        </div>
                                        </div>
                                        <div class="reviews__text">
                                            <div class="reviews__title">{{$item['title']}}</div>
                                            <div class="reviews__text-review">{{$item['text']}}</div>
                                            <div class="reviews__answer"></div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                        <div class="feedback__right">
                        <div class="feedback__bottom">
                        <div class="feedback__button">
                            <button class="button button--size-rectangle button--filled-orange">Написать вопрос </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>