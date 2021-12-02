@php 
$benefits = [
    [
        'icon' => './dist/spritemap.svg#sprite-benefits-4', 
        'size-icon' => 'icon-1', 
        'text' => 'Бесплатная доставка при заказе от 300 грн'
        ],
    [
        'icon' => './dist/spritemap.svg#sprite-benefits-2', 
        'size-icon' => 'icon-2', 
        'text' => 'Акции и скидки среди 2400 товаров'
        ],
    [
        'icon' => './dist/spritemap.svg#sprite-benefits-3', 
        'size-icon' => 'icon-3', 
        'text' => 'Более 100 магазинов по всей Украине'],
    [
        'icon' => './dist/spritemap.svg#sprite-benefits-1', 
        'size-icon' => 'icon-4', 
        'text' => 'Дисконтная программа ZooBonus.ua']
 ];
@endphp

<div class="benefits">
    <div class="container">
        <div class="benefits__container">
            <ul class="benefits__list"> 
                @foreach($benefits as $item) 
                <li class="benefits__item">
                    <div class="button button--size-large button--transparent">
                        <svg class="benefits__{{$item['size-icon']}}">
                            <use xlink:href="{{$item['icon']}}"></use>
                        </svg>
                    </div>
                    <div class="benefits__text">{{$item['text']}}</div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>