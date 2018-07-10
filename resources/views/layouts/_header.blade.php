<div id="navbar" class="grid-x bg-light-gray">
    <div class="cell shrink">
        <a href="#">
            <img class="chooser" src="{{ asset('img/Cart_Button.png') }}" alt="">
        </a>
    </div>
    <div class="cell auto text-center">
        @if(Request::is('uniform'))
        <a href="{{ route('uniform') }}">
            <img class="chooser" src="{{ asset('img/Uniform_Title_Text.png') }}" alt="">
        </a>
        @else
        <a href="{{ route('index') }}">
            <img class="chooser" src="{{ asset('img/Logo_Text.png') }}" alt="">
        </a>
        @endif
    </div>
    <div class="cell shrink">
        <a href="#">
            <img class="chooser" src="{{ asset('img/Login_Button.png') }}" alt="">
        </a>
    </div>
</div>
