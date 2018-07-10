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
    <div id="login-button" class="cell shrink">
        <a href="#">
            <img class="chooser" src="{{ asset('img/Login_Button.png') }}" alt="">
        </a>
    </div>
</div>

<div id="login-modal" class="modal-container hidden">
    <div id="loginbar" class="grid-x bg-gray">
        <div id="back-button" class="cell small-2 text-left">
            <a href="#">
                <img class="chooser-mini" src="{{ asset('img/Back_Button.png') }}" alt="">
            </a>
        </div>
        <div class="cell auto text-center">
            <a href="{{ route('index') }}">
                <img class="chooser" src="{{ asset('img/Login_Text.png') }}" alt="">
            </a>
        </div>
        <div class="cell small-2 text-right">
        </div>
    </div>

    <div id="loginbar-menu" class="grid-y align-middle align-center">
        <!-- If logged in -->
        <img class="cell small-1 chooser" src="{{ asset('img/Profile_Menu.png') }}" alt="">
        <img class="cell small-1 chooser" src="{{ asset('img/Lacak_Pesanan_Menu.png') }}" alt="">
        <img class="cell small-1 chooser" src="{{ asset('img/Wallet_Menu.png') }}" alt="">
        <img class="cell small-1 chooser" src="{{ asset('img/Pengembalian_Barang_Menu.png') }}" alt="">

        <img class="cell small-2" src="{{ asset('img/Dots.png') }}" alt="" style="max-height: 80px; width: 3px;">

        <div class="cell small-2 grid-y align-middle align-center">
            <img class="cell small-10 chooser" src="{{ asset('img/Logout_Only_Text.png') }}" alt="">
            <img class="cell small-2" src="{{ asset('img/Down_Menu.png') }}" alt="" style="width: 30px; height: 30px; margin-top: -10px;">
        </div>
        <!-- Else -->

    </div>
</div>
