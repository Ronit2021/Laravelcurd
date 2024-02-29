@extends('master')
@section('content')
<div class="container-fluid custom-product ">

    <div class="row mt-5">
        <div class="col-md-12">
                <div class="trending-wrapper">
                    @foreach($orders as $item)
                    <div class="searched-item">
                        
                            <div class="row cart-list-divider">
                                <div class="col-md-4" style="margin: 0 auto;text-align: center;">
                                    <a href="detail/{{$item->id}}" > <img src="{{$item->gallery}}" class="img trending-image" style="height: 200px;"></a>
                                </div>
                                 <div class="col-md-8">
                                    <h2>Name: {{$item->name}}</h2>
                                    <h5>Delivery Status: {{$item->status}}</h5>
                                    <h5>Address: {{$item->address}}</h5>
                                    <h5>Payment Status: {{$item->payment_status}}</h5>
                                    <h5>Payment Method: {{$item->payment_method}}</h5>
                                </div>
                            </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
 
</div>


@endsection