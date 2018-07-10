@extends('main')

@section('title', "Uniform | Eureka")

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/pages/uniform.css') }}">
@endsection

@section('content')
<div id="searchbar" class="bg-gray">

</div>

<div id="uniform" class="chooser-bg overlay-container" style="background-image: url({{ asset('img/Uniform_Top.png') }})">
    <a href="#" class="overlay-content grid-y align-middle align-center">
        <img class="chooser cell shrink" src="{{ asset('img/Uniform_Text.png') }}" alt="">
    </a>
</div>

<div id="products" class="grid-x">
    <a href="#" class="cell small-6 medium-4 large-3">
        <img class="chooser" src="{{ asset('img/Uniform_1.png') }}" alt="">
    </a>
    <a href="#" class="cell small-6 medium-4 large-3">
        <img class="chooser" src="{{ asset('img/Uniform_2.png') }}" alt="">
    </a>
    <a href="#" class="cell small-6 medium-4 large-3">
        <img class="chooser" src="{{ asset('img/Uniform_3.png') }}" alt="">
    </a>
    <a href="#" class="cell small-6 medium-4 large-3">
        <img class="chooser" src="{{ asset('img/Uniform_4.png') }}" alt="">
    </a>
</div>
@endsection

@section('extra-js')
<script type="application/javascript" src="{{ asset('js/pages/uniform.js') }}"></script>
@endsection
