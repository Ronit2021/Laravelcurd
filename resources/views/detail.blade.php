@extends('master')
@section('content')
<div class="container custom-product ">

    <div class="row mt-5">
        
        <div class="col-md-6">
            <img src="{{$products['gallery']}}"  class="my-2 image detail-image" style="width: -webkit-fill-available;">
        </div>
        <div class="col-md-6">
                <a href="/" class="btn btn-primary mb-5">Go Back</a>
                <h2>{{$products['name']}}</h2>
                <h4>Price: {{$products['price']}}</h4>
                <h5>Category: {{$products['category']}}</h5>
                <h5>Description: {{$products['description']}}</h5>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$products['id']}}">
                    <button class="btn btn-primary" type="submit"> Add to cart</button>
                </form>
                
                <button class="btn btn-success" type="submit"> Buy Now</button> 
        </div>
    </div>
 
</div>


@endsection