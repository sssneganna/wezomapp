@extends('layouts.base')
@section('content')
<div class="catalog-product">
    <div class="catalog-product__breadcrumbs">
        @include("widgets.breadcrumbs")
    </div>
    <div class="catalog-product__product">
        @include("widgets.product")
    </div>
    <div class="catalog-product__about-product">
        @include("widgets.about-product")
    </div>
    <div class="catalog-product__feedback">
        @include("widgets.feedback")
    </div>
    <div class="catalog-product__cards">
        @include("widgets.recommendations")
    </div>
</div>           
@endsection
