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
        'data-item' => '#value_1',
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
                'title' => 'Класс',
                'class' => 'is-active',
                'data-item' => '#value_2',
        'data-content' => 'value_2',
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
                'data-item' => '#value_3',
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
                'title' => 'Особенности',
                'class' => '',
                'data-item' => '#value_4',
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
                'title' => 'Вес упаковки',
                'class' => '',
                'data-item' => '#value_5',
        'data-content' => 'value_5',
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
                'data-item' => '#value_6',
        'data-content' => 'value_6',
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
    <button class="button-close"></button>
   
</div>
@include("widgets.add-pet")
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
        @foreach($filterList as $item)
        <div class="filter__item accordion__item accordion__item--border-line  {{$item['class']}}"  data-collapse="{{$item['data-item']}}">
        <div class="filter__title">{{$item['title']}}</div>
        <svg class="filter__arrow" width="19" height="11">
                <use xlink:href="./dist/spritemap.svg#sprite-arrow-filter"></use>
            </svg>
        <div class="filter__values accordion__content" id="{{$item['data-content']}}">
        @foreach($item['value'] as $value)
            <a href="{{$value['href']}}" class="filter__value is-active">
                <span>{{$value['name']}}</span>
                <span class="filter__value-number">({{$value['number']}})</span>
            </a>
            @endforeach
        </div>

      
</div>
    
    @endforeach
    </div>
