@extends('guest.layout.base')

@section('pageTitle')
    {{$nomePagina}}
@endsection

@section('content')
    
    <div class="container_fluid">
        <div class="container-product">
            <img src="{{$product['thumb']}}" alt="$Product['title']">
        </div>
    </div>
    <div class="container-product d-flex">
        <div class="sx">
            <h2>{{ $product['title'] }}</h2>
            <div class="d-flex green-section">
                <div class="w-100 price d-flex">
                    <span class="w-60">U.S. price:<strong>{{$product['price']}}</strong></span>
                    <span class="d-flex flex-end w-100">AVAILABLE</span>
                </div>
                <div class="availability w-40">
                    <span class="">Check Availability<i class="fas fa-caret-down"></i></span>
                </div>
            </div>
            <div class="description">
                <p>{{$product['description']}}</p>
            </div>
        </div>
        <div class="dx">
            <h4>advertisement</h4>
            <img src="{{asset('images/adv.jpg')}}" alt="">
        </div>
    </div>

@endsection