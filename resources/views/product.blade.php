@extends('master')
@section('content')
<div class="container-fluid custom-product ">
        <!-- Slider Start-->
            
        
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
              
                @foreach ($product as $item)
                <div class="carousel-item {{$item['id'] == 1 ? 'active':'' }}">
                    <img src="{{$item['gallery']}}"  class="d-block" style="height: 300px;text-align: center;  margin: 0 auto;">
                    <div class="carousel-caption" >
                    <h3>{{$item['name']}}</h3>
                    <p>{{$item['description']}}</p>
                    </div>
                </div>
                @endforeach
           
         
          
            </div>
            
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        
        <!-- Slider END-->
        <div class="trending-wrapper py-3">
            <h3 class="py-2">Trending Products</h3>
            <span style="display: none;">{{$i = 1}}</span>
            @foreach ($product as $item)
            @if ($i < 5 )
            <span style="display: none;">{{$i++}}</span>
                <div class="trending-item py-3">
                 <a href="detail/{{$item['id']}}">
                    <img src="{{$item['gallery']}}"  class="trending-image my-2 image">
                    <div class="my-3" >
                        <h3>{{$item['name']}}</h3>
                    </div>
                 </a> 
                </div>
                
            @endif
            @endforeach
        </div>

</div>


@endsection