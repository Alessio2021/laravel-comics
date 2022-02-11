@extends('guest.layout.base')

@section('documentTitle')
    {{$nomePagina}}
@endsection

@section('content')

    <div class="main">
        <div class="jumbo">
        </div>
        <div class="container-main">
        <h2 class="title-absolute">current series</h2>
        <div class="container">
            <ul class="product-list">
                @foreach ($cards as $card)
                    <li>
                        <div class="container-img">
                            <img src="{{ $card['thumb'] }}" alt="">
                        </div>
                        <h4>{{ $card['series'] }}</h4>
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