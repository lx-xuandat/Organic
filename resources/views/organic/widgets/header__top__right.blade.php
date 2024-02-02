<div class="header__top__right__language">
    {{-- <img src="/img/language.png" alt=""> --}}
    <div>{{ __(session('language')) }}</div>
    <span class="arrow_carrot-down"></span>
    <ul>
        <li><a href="{{ route('customer.website.language', ['lang' => 'vi']) }}">@lang('vi')</a></li>
        <li><a href="{{ route('customer.website.language', ['lang' => 'en']) }}">@lang('en')</a></li>
    </ul>
</div>

<div class="header__top__right__auth">
    @guest('web')
        <a href="{{ route('customer.login') }}"><i class="fa fa-user"></i>{{ __('login') }}</a>
    @endguest
    @auth('web')
        <a href="{{ route('customer.account') }}"><i class="fa fa-user"></i> {{ auth('web')->user()->name }}</a>
    @endauth
</div>
