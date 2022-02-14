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
    <div class="info">
        <div class="container-product d-flex">
            <div class="info_sx col-50">
                <h3>Talent</h3>
                <div class="row d-flex">
                    <div class="col-30">
                        <h5>Art by:</h5>
                    </div>
                    <div class="col">
                        @foreach ($product as $key => $item)
                            @if ($key === 'artists')
                                @foreach ($item as $value)
                                    @if ($loop->last)
                                        <span><a href="#">{{$value}}</a></span>
                                    @else
                                        <span><a href="#">{{$value}}, </a></span>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-30">
                        <h5>Written by:</h5>
                    </div>
                    <div class="col">
                        @foreach ($product as $key => $item)
                            @if ($key === 'writers')
                                @foreach ($item as $value)
                                    @if ($loop->last)
                                        <span><a href="#">{{$value}}</a></span>
                                    @else
                                        <span><a href="#">{{$value}}, </a></span>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="info_dx col-50">
                <h3>Specs</h3>
                <div class="row d-flex">
                    <div class="col-30">
                        <h5>Series:</h5>
                    </div>
                    <div class="col">
                        <h4><a href="#">{{$product['series']}}</a></h4>
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-30">
                        <h5>U.S. Price:</h5>
                    </div>
                    <div class="col">
                        <span>{{$product['price']}}</span>
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-30">
                        <h5>On Sale Date:</h5>
                    </div>
                    <div class="col">
                        <span>{{ date_format(date_create($product['sale_date']),'M d Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection