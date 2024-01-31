@extends('organic.layouts.MasterLayout')

@section('banner_hero')
    @include('organic.layouts.BannerHero')
@endsection

@section('main-content')
    @include('organic.layouts.categories_section')
    @include('organic.layouts.featured_section')
@endsection
