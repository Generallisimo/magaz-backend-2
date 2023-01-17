@extends('layouts.main')
@section('title','Home')
@section('content')

    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">
                         
                        @php
                        $image = '';
                        if(count($item->images) > 0 ){ 
                            $image = $item->images[0]['img'];
                        } else {
                            $image = 'img/product-img/no-image.png';
                        }
                        @endphp
        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
                <img src="/img/product-img/{{$image}}" alt="">
                <img src="/img/product-img/{{$image}}" alt="">
                <img src="/img/product-img/{{$image}}" alt="">
            </div>
        </div>
                        
        <!-- Single Product Description --> 
        <div class="single_product_desc clearfix">
            <span>mango</span>
            <a href="cart.html">
                <h2>{{$item->title}}</h2>
            </a>
            @if($item->new_price != null)
            <p class="product-price"><span class="old-price">${{$item->price}}</span>$ {{$item->new_price}}</p>
            @else
            <p class="product-price"> ${{$item->price}}</p>
            @endif
            @if($item->in_stock)
            <p class="product-price"> Availability: In Stock </p>
            @else
            <p class="product-price"> Availability: None </p>
            @endif
            <p class="product-desc">{{$item->description}}</p>

            <!-- Form -->
            <form class="cart-form clearfix" method="post">
                <!-- Select Box -->
                <div class="select-box d-flex mt-50 mb-30">
                    <select name="select" id="productSize" class="mr-5">
                        <option value="value">Size: XL</option>
                        <option value="value">Size: X</option>
                        <option value="value">Size: M</option>
                        <option value="value">Size: S</option>
                    </select>
                    <select name="select" id="productColor">
                        <option value="value">Color: Black</option>
                        <option value="value">Color: White</option>
                        <option value="value">Color: Red</option>
                        <option value="value">Color: Purple</option>
                    </select>
                </div>
                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                    <button type="submit" name="addtocart" value="5" class="btn essence-btn">Add to cart</button>
                    <!-- Favourite -->
                    <div class="product-favourite ml-4">
                        <a href="#" class="favme fa fa-heart"></a>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- ##### Single Product Details Area End ##### -->

@endsection 