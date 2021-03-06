@extends('front.main')

@section('content')
<div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header">
                            <h1>Our Products</h1>
                        </div>
                    </div>

                    @foreach($products as $product)
                            <div class="col-md-4">
                                <div class="product-box text-center">
                                    <div class="product-box__image">
                                        <a href="{{url('products/product/'.$product->id)}}">
                                            <img src="{{asset('resources')}}/assets/images/abstract-q-c-380-200-5.jpg" class="img-responsive" alt="Product Image">
                                            <span><i class="fa fa-star"></i> Product Info</span>
                                        </a>
                                    </div>
                                    <div class="product-box__title">
                                        <h2>{{$product->title}}</h2>
                                    </div>
                                    <div class="product-box__desc">
                                        <p>{{$product->description}}</p>
                                    </div>
                                    <div class="product-box__price">
                                        <span>{{$product->price}}<sup>EGP</sup></span>
                                    </div>
                                    <a href="{{url('products/product/'.$product->id)}}" class="btn btn-lg btn-success"><i class="fa fa-shopping-cart"></i> Buy Now</a>
                                </div>
                            </div>
                        @endforeach


                </div>
            </div>
@stop