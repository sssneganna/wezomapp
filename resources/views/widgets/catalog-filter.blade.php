@php
$filterMenu  = [
  [ 
        'title' => 'Категории',
        'categories' => [
        [
            'category' => 'Сухой корм',
            'number' => '584',
            'href' => '#'
        ],
        [
            'category' => 'Консервы',
            'number' => '317',
            'href' => '#'
        ],
        [
            'category' => 'Ветеринарные диеты',
            'number' => '158',
            'href' => '#'
        ],
        [
            'category' => 'Заменители молока',
            'number' => '59',
            'href' => '#'
        ],
]
]
            
];

$filterList = [
    [
        'title' => 'Бренд',
        'class' => 'is-active',
        'data-item' => 'value_1',
        'data-content' => 'value_1',
        'value' => [
            [
                'name' => 'ROYAL CANIN',
                'number' => '24',
                'href' => '#'
            ],
            [
                'name' => '1st Choice',
                'number' => '36',
                'href' => '#'
            ],
            [
                'name' => 'Home Food',
                'number' => '12',
                'href' => '#'
            ],
            [
                'name' => 'Acana',
                'number' => '15',
                'href' => '#'
            ],
            [
                'name' => 'Nature\'s Protection',
                'number' => '38',
                'href' => '#'
            ],
            [
                'name' => 'Purina Pro Plan',
                'number' => '49',
                'href' => '#'
            ],
            [
                'name' => 'Advance',
                'number' => '4',
                'href' => '#'
            ],
            [
                'name' => 'AnimAll VetLine',
                'number' => '17',
                'href' => '#'
            ],
            [
                'name' => 'Brit Care',
                'number' => '19',
                'href' => '#'
            ],
            ]
            ],
            [
        'title' => 'Цена, ₴ ',
        'class' => 'is-active',
        'data-item' => 'value_2',
        'data-content' => 'value_2',
        'range-slider' => []
        ],
            [
                'title' => 'Класс',
                'class' => 'is-active',
                'data-item' => 'value_3',
        'data-content' => 'value_3',
                'value' => [
                    [
                        'name' => 'Премиум',
                        'number' => '24',
                        'href' => '#'
                    ],
                    [
                        'name' => 'Суперпремиум',
                        'number' => '36',
                        'href' => '#'
                    ],
                    [
                        'name' => 'Холистик',
                        'number' => '12',
                        'href' => '#'
                    ],
    ]
            
    ],
    [
                'title' => 'Ингредиенты',
                'class' => '',
                'data-item' => 'value_4',
        'data-content' => 'value_4',
                'value' => [
                    [
                        'name' => 'Премиум',
                        'number' => '24',
                        'href' => '#'
                    ],
                    [
                        'name' => 'Суперпремиум',
                        'number' => '36',
                        'href' => '#'
                    ],
                    [
                        'name' => 'Холистик',
                        'number' => '12',
                        'href' => '#'
                    ],
    ]
            
    ],
    [
                'title' => 'Особенности',
                'class' => '',
                'data-item' => 'value_5',
        'data-content' => 'value_5',
                'value' => [
                    [
                        'name' => 'Премиум',
                        'number' => '24',
                        'href' => '#'
                    ],
                    [
                        'name' => 'Суперпремиум',
                        'number' => '36',
                        'href' => '#'
                    ],
                    [
                        'name' => 'Холистик',
                        'number' => '12',
                        'href' => '#'
                    ],
    
            ]
                ],
                [
                'title' => 'Вес упаковки',
                'class' => '',
                'data-item' => 'value_6',
        'data-content' => 'value_6',
                'value' => [
                    [
                        'name' => '2,72кг',
                        'number' => '24',
                        'href' => '#'
                    ],
                    [
                        'name' => '7кг',
                        'number' => '36',
                        'href' => '#'
                    ],
                    [
                        'name' => '15кг',
                        'number' => '12',
                        'href' => '#'
                    ],
    ]
            
                ],
                [
                'title' => 'Порода',
                'class' => '',
                'data-item' => 'value_7',
        'data-content' => 'value_7',
                'value' => [
                    [
                        'name' => 'Малые',
                        'number' => '24',
                        'href' => '#'
                    ],
                    [
                        'name' => 'Средние',
                        'number' => '36',
                        'href' => '#'
                    ],
                    [
                        'name' => 'Крупные',
                        'number' => '12',
                        'href' => '#'
                    ],
    ]
            
                ],
    
    
];
@endphp

<div class="catalog-main__top-mob">
    <button class="button-close js-is-active"></button>
   
</div>
<div class="catalog-main__add-pet">
@include("widgets.add-pet")
</div>
<div class="filter">
    @foreach($filterMenu as $menu)
  
   
    <div class="filter__item">
        <div class="filter__title">{{$menu['title']}}</div>

        <div class="filter__categories">
        @foreach($menu['categories'] as $category)
            <a href="{{$category['href']}}" class="filter__category">
                <span>{{$category['category']}}</span>
                <span class="filter__category-number">({{$category['number']}})</span>
            </a>
            @endforeach
        </div>
</div>
</div>
@endforeach
<div class="filter">
    <div class="filter__item">
        <a href="#" class="filter__value is-active">
    <svg class="card__icon" width="32" height="32">
                    <use xlink:href="./dist/spritemap.svg#sprite-price-icon"></use>
                </svg>
                <span class="filter__auto-order">Автозаказ</span>
                <svg width="14" height="14">
                                        <use xlink:href="./dist/spritemap.svg#sprite-price-icon-info"></use>
                                    </svg>  
                </a>
                <div class="filter__info">Экономия до 10% на заказах</div>
    </div>
</div>
        <div class="filter js-tab">
        @foreach($filterList as $item)
        <div class="filter__item accordion__item">
       <div class="filter__header accordion__header accordion__header--filter js-tab-trigger {{$item['class']}}" data-type-tab="single" data-tab="{{$item['data-item']}}">
        <div class="filter__title">{{$item['title']}}</div>
        <svg class="filter__arrow accordion__arrow accordion__arrow--filter" width="19" height="11">
                <use xlink:href="./dist/spritemap.svg#sprite-arrow-filter"></use>
            </svg>
            </div>
        <div class="filter__values accordion__content accordion__content--filter js-tab-content {{$item['class']}}" data-tab="{{$item['data-content']}}">
      
        
        @if(isset ($item['value']))
        @foreach($item['value'] as $value)
       
            <a href="{{$value['href']}}" class="filter__value is-active">
           
                <span>{{$value['name']}}</span>
                <span class="filter__value-number">({{$value['number']}})</span>
               
            </a>


            @endforeach
            <button class="filter__button-show">+ показать все</button>
            @endif
           
           
            @if(isset ($item['range-slider']))
      
      <div class="range-slider">
                              <form class="range-slider__form" action="#">
                                  <input class="range-slider__input js-min"  placeholder="от:" min="410" name="cost_min" value="from" autocomplete="off">
                                  <div class="range-slider__line">-</div>
                                  <input class="range-slider__input js-max"  placeholder="до:" max="6597" name="cost_max" value="to"  autocomplete="off">
                                  <button type="submit" class="range-slider__button ">OK</button>
                              </form>
                              <div class="range-slider__container">
                              <input class="js-range-slider"  data-min="410" data-max="6597" name="my_range" value="">
                              </div>
                          </div>
                          
      @endif
            
      
 
        </div>

        
</div>

    
    @endforeach
    </div>
