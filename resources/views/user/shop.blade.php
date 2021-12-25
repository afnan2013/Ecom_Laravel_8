@extends('user/layout')

@section('container')


<div class="row">
    <h1>Alham</h1>
    <ul class="product-list grid-products equal-container">
        
        <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
            <div class="product product-style-3 equal-elem ">
                <div class="product-thumnail">
                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                        <figure><img src="assets/images/products/digital_20.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                    </a>
                </div>
                <div class="product-info">
                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                    <a href="#" class="btn add-to-cart">Add To Cart</a>
                </div>
            </div>
        </li>
        
    </ul>

</div>

@endsection