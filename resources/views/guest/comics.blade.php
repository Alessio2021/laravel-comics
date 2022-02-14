@extends('guest.layout.base')

@section('pageTitle')
    {{$nomePagina}}
@endsection

@section('content')

    <div class="main">
        <div class="container-main">
        <h2 class="title-absolute">current series</h2>
        <div class="container">
            <ul class="product-list">
                @foreach ($cards as $card)
                    <li>
                        <a href="{{ route('product', $card['id']) }}">
                            <div class="container-img">
                                <img src="{{ $card['thumb'] }}" alt="">
                            </div>
                            <h4>{{ $card['series'] }}</h4>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="button">
            <button>load more</button>
            </div>
        </div>
        </div>
    </div>

@endsection