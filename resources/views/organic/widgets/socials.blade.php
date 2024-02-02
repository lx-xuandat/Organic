@if (!empty($Store->socials['facebook']))
    <a href="{{ $Store->socials['facebook'] }}"><i class="fa fa-facebook"></i></a>
@endif

@if (!empty($Store->socials['twitter']))
    <a href="{{ $Store->socials['twitter'] }}"><i class="fa fa-twitter"></i></a>
@endif

@if (!empty($Store->socials['instagram']))
    <a href="{{ $Store->socials['instagram'] }}">
        <i class="fa fa-instagram"></i>
    </a>
@endif

@if (!empty($Store->socials['pinterest']))
    <a href="{{ $Store->socials['pinterest'] }}"><i class="fa fa-pinterest-p"></i></a>
@endif
