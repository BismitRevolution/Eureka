@extends('main')

@section('title', "Uniform | Eureka")

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/pages/uniform.css') }}">
@endsection

@section('content')
<div id="searchbar" class="grid-x bg-gray">
    <div class="cell small-2 text-left">
        <a href="#">
            <img class="chooser-mini" src="{{ asset('img/Sort_Text.png') }}" alt="">
        </a>
    </div>
    <div class="cell auto text-center">
        <a href="{{ route('index') }}">
            <img class="chooser" src="{{ asset('img/Search_Text.png') }}" alt="">
        </a>
    </div>
    <div class="cell small-2 text-right">
        <a href="#">
            <img class="chooser-mini" src="{{ asset('img/Filter_Text.png') }}" alt="">
        </a>
    </div>
</div>

<div id="searchbar-extended" class="grid-x bg-semi-gray">
    <div class="cell small-2 medium-1 text-left">
        <a href="#">
            <img class="chooser-mini" src="{{ asset('img/Search_Only_Text.png') }}" alt="">
        </a>
    </div>
    <div class="cell auto text-center">
        <form class="" action="#" method="post">
            <input class="form-underline form-narrow bg-transparent" type="text" name="search" value="">
        </form>
    </div>
    <div class="cell small-2 medium-1 text-right">
        <a href="#">
            <img class="chooser-mini" src="{{ asset('img/Up_Button.png') }}" alt="">
        </a>
    </div>
</div>

<div id="searchbar-sort" class="grid-x bg-semi-gray">
    <div class="cell small-2 medium-1 text-left">
        <a href="#">
            <img class="chooser-mini" src="{{ asset('img/Sort_Only_Text.png') }}" alt="">
        </a>
    </div>
    <div class="cell auto text-center">
        <form class="" action="#" method="post">
            <fieldset>
                <input class="bg-transparent" type="radio" name="sort" value="0">
                <img class="chooser-mini" src="{{ asset('img/Popularity_Text.png') }}" alt="">

                <input class="bg-transparent" type="radio" name="sort" value="1">
                <img class="chooser-mini" src="{{ asset('img/Low_To_High_Text.png') }}" alt="">

                <input class="bg-transparent" type="radio" name="sort" value="2">
                <img class="chooser-mini" src="{{ asset('img/High_To_Low_Text.png') }}" alt="">

                <input class="bg-transparent" type="radio" name="sort" value="3">
                <img class="chooser-mini" src="{{ asset('img/New_In_Text.png') }}" alt="">

                <input class="bg-transparent" type="radio" name="sort" value="4">
                <img class="chooser-mini" src="{{ asset('img/Discount_Text.png') }}" alt="">
            </fieldset>
        </form>
    </div>
    <div class="cell small-2 medium-1 text-right">
        <a href="#">
            <img class="chooser-mini" src="{{ asset('img/Up_Button.png') }}" alt="">
        </a>
    </div>
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
