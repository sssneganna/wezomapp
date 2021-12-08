@php
$blog = [
    [
        'stickers' => [['text' => 'Полезные советы', 'color' => 'violet']],
        'image' => './assets/blog-1.jpg',
        'date' => '22',
        'month' => 'сент',
        'text' => 'Как выбрать корм для питомца. Советы профессионалов. Выбираем корм для котов 7+',
        'url' => '#'
        ],
    [
        'stickers' => [['text' => 'Лайфхаки', 'color' => 'orange']],
        'image' => './assets/blog-2.jpg',
        'date' => '19',
        'month' => 'сент',
        'text' => 'Как научить собаку команде "принеси тапочки" в домашних условиях',
        'url' => '#'
        ],
    [
        'stickers' => [['text' => 'Видео', 'color' => 'turquoise']],
        'image' => './assets/blog-3.jpg',
        'date' => '14',
        'month' => 'сент',
        'text' => 'Обзор товаров. Выбираем лучшую когтеточку для вашего кота.',
        'url' => '#',
        'video' => 'https://www.youtube.com/watch?v=b_J0rnYPjPY',
        ],
    [
        'stickers' => [['text' => 'Обзоры товаров', 'color' => 'blue']],
        'image' => './assets/blog-4.jpg',
        'date' => '09',
        'month' => 'сент',
        'text' => 'Игрушка для собак Trixie Мяч светящийся с шипами',
        'url' => '#'
        ],
    ];

$blogMenu = [
    [
        'name' => 'Новости', 
        'url' => '#'
        ],
    [
        'name' => 'Полезные советы', 
        'url' => '#'
        ],
    [
        'name' => 'Видео', 
        'url' => '#'
        ],
    [
        'name' => 'Обзоры товаров', 
        'url' => '#'
        ],
    [
        'name' => 'Лайфаки', 
        'url' => '#'
        ],
    ]
@endphp

<section class="blog">
    <h2 class="blog__title">Полезные материалы</h2>
    <div class="blog__menu">
        <div class="blog__container">
            <div class="blog__nav">
                <ul class="blog__list">
                    @foreach($blogMenu as $item)
                    <li class="blog__item">
                        <a class="blog__link" href="{{$item['url']}}">{{$item['name']}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="blog__link-button">
                <a href="#" class="link link--transparent link--size-small">Перейти в блог</a>
            </div>
        </div>
    </div>
    <div class="blog__gallery">
        <ul class="blog-gallery">
            @foreach($blog as $item)
            <li class="blog-gallery__item">
                <div class="blog-gallery__sticker">
                    @foreach($item['stickers'] as $sticker)
                    <div class="stickers">
                        <span class="sticker sticker--{{$sticker['color']}}">{{$sticker['text']}}</span>
                    </div>
                    @endforeach
                </div>
                <div class="blog-gallery__card">
                    <div class="blog-gallery__top">
                        <a href="#" class="blog-gallery__img-link">
                            <img src="{{$item['image']}}" alt="1">
                        </a>
                        @if(isset($item['video']))
                        <div class="blog-gallery__button">
                            <a href="{{$item['video']}}" data-popup data-type="iframe" class="button button--size-medium-big button--filled-black">
                                <span class="triangle"></span>
                            </a>
                        </div>
                        @endif
                    </div>
                    <div class="blog-gallery__bottom">
                        <div class="blog-gallery__date">
                            <span>{{$item['date']}}</span>{{$item['month']}}</div>
                            <a class="blog-gallery__link" href="{{$item['url']}}">{{$item['text']}}</a>
                        </div>
                </div>
            </li>
                @endforeach
        </ul>
    </div>
</section>
         