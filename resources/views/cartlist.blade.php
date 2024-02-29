@extends('master')
@section('content')
<div class="container-fluid custom-product ">

    <div class="row mt-5">
        <div class="col-md-12">
                <div class="trending-wrapper">
                    <h4>My Orders</h4>
                    @foreach($products as $item)


                    <div class="searched-item">
                        
                            <div class="row cart-list-divider">
                                <div class="col-md-4" style="margin: 0 auto;text-align: center;">
                                    <a href="detail/{{$item->id}}" > <img src="{{$item->gallery}}" class="img trending-image" style="height: 200px;"></a>
                                </div>
                                 <div class="col-md-4">
                                    <a href="detail/{{$item->id}}" >  <h2>{{$item->name}}</h2></a>
                                    <a href="detail/{{$item->id}}" ><h5>{{$item->price}}</h5></a>
                                </div>
                                <div class="col-md-4">
                                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to Cart</a>
                                </div>
                                
                            </div>
                            
                        
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
 
</div>


@endsection