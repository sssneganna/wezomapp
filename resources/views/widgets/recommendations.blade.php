@php
$recommendationsList = [
    [
        'url-image' => './assets/card-img-6.jpg',
        'name' => 'Brit Premium (Брит Премиум) by Nature ADULT L - Сухой корм с курицей, 4 кг',
        'rating' => '4',
        'number' => '65',
        'url' => '#'
    ],
    [
        'url-image' => './assets/card-img-4.jpg',
        'name' => 'Scalibor (Скалибор) ошейник 48 см',
        'rating' => '4',
        'number' => '65',
        'url' => '#'
    ],
    [
        'url-image' => './assets/card-img-5.jpg',
        'name' => '1st Choice Puppy Toy&Small Lamb&Fish сухой супер премиум корм для щенков мини и малых пород, 2 кг',
        'rating' => '4',
        'number' => '65',
        'url' => '#'
    ],
    [
        'url-image' => './assets/card-img-2.jpg',
        'name' => 'Schesir Dog Small Adult Lamb сухой монопротеиновый корм для собак малых пород',
        'rating' => '4',
        'number' => '65',
        'url' => '#'
    ],
    [
        'url-image' => './assets/card-img-1.jpg',
        'name' => 'Brit Premium (Брит Премиум) by Nature ADULT L - Сухой корм с курицей, 4 кг',
        'rating' => '4',
        'number' => '65',
        'url' => '#'
    ],
    [
        'url-image' => './assets/card-img-3.jpg',
        'name' => 'PetKind Beef Tripe Formula Беззерновые консервы для собак с говядиной, 500 мл',
        'rating' => '4',
        'number' => '65',
        'url' => '#'
    ],
];

@endphp

<div class="recommendations">
    <div class="container">
        <div class="recommendations__list js-import js-slider-product">
        @foreach($recommendationsList as $item)
        <div class="recommendations__item">
            <div class="product-recommendations js-height">
                <a href="{{$item['url']}}" class="product-recommendations__image">
                    <span class="product-recommendations__img">
                        <img src="{{$item['url-image']}}" alt="1"></img>
                    </span>
                </a>
                <div class="product-recommendations__rating">
                    <div class="rating">
                        @for($i=1; $i<=5; $i++)
                        <span class="rating__star {{$i<=$item['rating'] ? 'rating__star--checked' : ''}}"></span>
                        @endfor
                        <span class="rating__number rating__number--dark">({{$item['number']}})</span>
                    </div>
                </div>
                <a href="#" class="product-recommendations__link">{{$item['name']}}</a>
            </div>
        </div>
        @endforeach
    </div> 
    <div class="recommendations__link">
        <a href="#" class="link link--transparent link--size-small">Смотреть все</a>
    </div>
    </div>
</div>