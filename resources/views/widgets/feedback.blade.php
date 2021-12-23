@php
$reviews = [
  ['rating' => 5,
  'name' => 'Татьяна Куприна',
  'date' => ' 12 апреля 2021',
  'title' => 'Отличный корм! Хороший состав',
  'text-review' => 'Отличный корм! Хороший состав. Собаки едят с удовольствием. Чувствуют себя прекрасно. Кормлю собак Фест Чойс уже не первый год. Всем довольны.'
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
  'text-review' => 'Перевёл Николь с натурального питания на 1st Choice Sensitive Skin&Coat Adult Lumb&Fish и остался очень доволен. Со стулом всё наладилось ( раньше переодично сталкивались с диареей), собака кушает с удовольствием и то, что заметили все знакомые - улучшилось состояние шерсти!! Восторг просто! Очень порадовал ещё тот факт, что консультант дал корм на пробу бесплатно, сейчас такое редко где встретишь. Это похвально, господа. Спасибо за внимание и дельные советы по питанию и уходу.'
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
                <li class="tabs__button js-tab-trigger is-active" data-tab="reviews">Отзывы (65)</li>
                <li class="tabs__button js-tab-trigger" data-tab="questions">Вопросы (3)</li>
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
                                            <div class="reviews__text-review">{{$item['text-review']}}</div>
                                            <div class="reviews__pictures"></div>
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
                                <div class="product-rating__diagram-progress">
                                
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
                </div>
            </div>
        </div>
    </div>
    </div>
            <div class="tabs__content js-tab-content" data-tab="questions">
            <div class="feedback__questions">
                    <div class="feedback__left">
                        <div class="questions" ></div>
                    
</div>
</div>
            </div>
</div>