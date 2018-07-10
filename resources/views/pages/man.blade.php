@extends('main')

@section('title', "Man | Eureka")

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/pages/man.css') }}">
@endsection

@section('content')
<div id="uniform" class="overlay-container chooser-bg" style="background-image: url({{ asset('img/Uniform_Hightlight.png') }})">
    <a href="{{ route('uniform') }}" class="overlay-content grid-y align-middle align-center">
        <img class="chooser cell shrink" src="{{ asset('img/Uniform_Text.png') }}" alt="">
    </a>
</div>

<div id="accesories" class="overlay-container chooser-bg" style="background-image: url({{ asset('img/Accesories_Hightlight.png') }})">
    <div class="overlay-content grid-y align-middle align-center">
        <img class="chooser cell shrink" src="{{ asset('img/Accesories_Text.png') }}" alt="">
    </div>
</div>

<div id="shoes" class="overlay-container chooser-bg" style="background-image: url({{ asset('img/Shoes_Hightlight.png') }})">
    <div class="overlay-content grid-y align-middle align-center">
        <img class="chooser cell shrink" src="{{ asset('img/Shoes_Text.png') }}" alt="">
    </div>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/pages/man.js') }}"></script>
@endsection
