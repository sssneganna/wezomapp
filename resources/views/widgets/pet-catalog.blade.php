@php
$petCatalogMenu = [
    [
        'name' => 'Корм',
        'url' => '#'
    ],
    [
        'name' => 'Лакомства',
        'url' => '#'
    ],
    [
        'name' => 'Игрушки',
        'url' => '#'
    ],
    [
        'name' => 'Уход',
        'url' => '#'
    ],
    [
        'name' => 'Здоровье',
        'url' => '#'
    ],
    [
        'name' => 'Косметика',
        'url' => '#'
    ],
    [
        'name' => 'Одежда и обувь',
        'url' => '#'
    ],
    [
        'name' => 'Амуниция',
        'url' => '#'
    ],
    [
        'name' => 'Путешествия',
        'url' => '#'
    ],
    [
        'name' => 'Товары для дома',
        'url' => '#'
    ],
];
@endphp

<section class="pet-catalog">
<div class="container container--big container--none-padding">
    <div class="pet-catalog__container">
        <div class="pet-catalog__background">
            <img src="/assets/catalog-background.jpg" alt="goods for dogs"></img>
        </div>
        <div class="pet-catalog__box">
            <div class="container container--big container--padding">
                <div class="pet-catalog__flex-container">
                    <div class="pet-catalog__add-pet">
                        <div class="add-pet">
                            <div class="add-pet__top">
                                <div class="add-pet__info-text">Товары для</div>
                                <div class="add-pet__info-icon">
                                    <svg width="14" height="14">
                                        <use xlink:href="./dist/spritemap.svg#sprite-add-pet-info-icon"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="add-pet__background">
                                <img class="add-pet__bg-image" src="/assets/add-pet-bg-1.png" alt="add-pet-bg"></img>
                                <img class="add-pet__bg-image-decor" src="/assets/add-pet-bg-2.png" alt="add-pet-bg"></img>
                            </div>
                            <div class="add-pet__main">
                                <div class="add-pet__image">
                                    <img class="add-pet__image-icon" src="/assets/add-pet-dog.png" alt="add-pet-bg"></img>
                                </div>
                                <div class="add-pet__text">У вас есть собака?</div>
                                <div class="add-pet__button">
                                    <button class="link link--transparent link--size-small-l">+ Добавить питомца </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pet-catalog__content">
                        <h1 class="pet-catalog__title">Каталог товаров <br><span>для собак</span></h1>
                        <div class="pet-catalog__subtitle">Товары и аксессуары для собак и щенков</div>
                        <ul class="pet-catalog__menu">
                            @foreach($petCatalogMenu as $item)
                            <li class="pet-catalog__item">
                                <a href="{{$item['url']}}" class="pet-catalog__link">{{$item['name']}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>