@extends('templates.base')
@section('title', 'HomePage - DC Comics')

@section('main')
<div class='main-background'></div>

<div class='main-poster-container'>

    <div class='current-series'> 
        <div>CURRENT SERIES</div>
    </div>

    @foreach($comics as $cardSingle)
    <div class='poster-card'>

        <div class='poster-image'>
        <a href="{{ route('product', [ 'id' => $loop->iteration ]) }}"><img src='{{$cardSingle["thumb"]}}'></a>
        </div>

        <div class='poster-txt'><a href="{{ route('product', [ 'id' => $loop->iteration ]) }}"><h3>{{ $cardSingle[ "title" ]}} </h3></a></div>

    </div>
    @endforeach

</div>

<div class="products-extra">
    <div class="product-card">
        <div>DIGITAL COMICS</div>
        <div class = 'product-img-container'><img src="images/buy-comics-digital-comics.png" alt=""></div>
    </div>

    <div class="product-card">
        <div>DC MERCHANDISE</div>
        <div class = 'product-img-container'><img src="images/buy-comics-merchandise.png" alt=""></div>
    </div>

    <div class="product-card">
        <div>SUBSCRIPTION</div>
        <div class = 'product-img-container'><img src="images/buy-comics-subscriptions.png" alt=""></div>
    </div>

    <div class="product-card">
        <div>COMIC SHOP LOCATION</div>
        <div class = 'product-img-container'><img src="images/buy-comics-shop-locator.png" alt=""></div>
    </div>

    <div class="product-card">
        <div>DC POWER VISA</div>
        <div class = 'product-img-container'><img src="images/buy-dc-power-visa.svg" alt=""></div>
    </div>
</div>
@endsection
