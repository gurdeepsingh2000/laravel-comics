@extends('templates.base')
@section('title', 'Product')


@section('main')
    <div class='product-background'></div>
    <div class='product-splitter'></div>

    <div class='product-poster'>
        <img src="{{$card[$arrayIndex]['thumb']}}">
    </div>

    <div class='product-description-container'>
        <div class='product-info'>
            <div class='product-description'>
                <h1>{{$card[$arrayIndex]['title']}}</h1>

                <div class='product-price'>
                        <div class='price'>
                            <div class='price-usd'><p>U.S. Price</p> <span>{{$card[$arrayIndex]['price']}}</span></div>
                            <div class='availability'>AVAILABLE</div>
                        </div>

                        <div class='product-availability'>
                            <p>Check Availability</p>
                        </div>
                </div>

                    <div class='product-txt-description'>
                        <p>{{$card[$arrayIndex]['description']}}</p>
                    </div>
            </div>


                <div class='product-advertising'>
                    <div class='ad-container'>
                        <div>ADVERTISMENT</div>
                            <img src="/images/adv.jpg" alt="">
                        </div>
                    </div>
                </div>
        </div>
    </div>


    <div class="container-talent-specs">

        <div class="section-talent-specs">
            <div class="talent-container">
                <h3>Talent</h3>
                    <div class="talent">
                        <div>Art By:</div>
                            <div class="text-container">
                                @foreach ($card[$arrayIndex]['artists'] as $artist)
                                    <a href="">{{$artist}}</a>
                                @endforeach
                            </div>
                    </div>
                    
        <div class="talent">     
            <div>Written By:</div>
                <div class="text-container">
                    @foreach ($card[$arrayIndex]['writers'] as $writer)
                        <a href="">{{$writer}}</a>
                   @endforeach
             </div>        
          </div>
        </div>



        <div class="specs-container">
             <h3>Specs</h3>

             <div class="specs">
                        <div>Series:</div>
                        <div class="text-container">
                            <span>{{$card[$arrayIndex]['type']}}<span>
                        </div>
                    </div>  

                <div class="specs">
                     <div>Price:</div>
                        <div class="text-container">
                                <span>{{$card[$arrayIndex]['price']}}<span>
                        </div>
                </div>  

                <div class="specs">
                    <div>On Sale Date:</div>
                        <div class="text-container">
                            <span>{{$card[$arrayIndex]['sale_date']}}<span>
                        </div>
                </div>  
             </div>
        </div>
    </div>   


<div class="bottom-icons-container">
        <div class="bottom-icons">


        <div class="icon-card">
                <div class="card-container">
                    <img src="/images/buy-comics-digital-comics.png" alt="">
                </div>
               <div class='card-type'>DIGITAL COMICS</div>
            </div>

            <div class="icon-card">
                <div class="card-container">
                    <img src="/images/buy-comics-merchandise.png" alt="">
                </div>
              <div class='card-type'>COMICS MERCHANDISE</div>
            </div>

            <div class="icon-card">
                <div class="card-container">
                    <img src="/images/buy-comics-shop-locator.png" alt="">
                </div>
                <div class='card-type'>SHOP LOCATOR</div>
            </div>

            <div class="icon-card">
                <div class="card-container">
                <img src="/images/buy-comics-subscriptions.png" alt="">
                </div>
            <div class='card-type'>SUBSCRIPTIONS</div>
            </div>

        </div>
    </div>







@endsection
