@extends('layouts.master')

@section('title', $data['title'])
@section ('head-scripts')
        <link rel="stylesheet" href="./css/slick-1.8.0/slick.css">
        <link rel="stylesheet" href="./css/slick-1.8.0/slick-theme.css">
        <link rel="stylesheet" href="./css/animate-css/animate.css">
        <link rel="stylesheet" href="./css/app.css">
@endsection

@section('header')
        @include('components.navigation')
@endsection

@section('content')
            @include('frontend.section.home')
            @include('frontend.section.work')
            @include('frontend.section.skills')
            @include('frontend.section.about')
@endsection

@section('footer')
  @include('frontend.section.footer')
@endsection

@section('after-body-scripts')
    <script src="scripts/slick-1.8.0/slick.min.js"></script>
    <script src="scripts/gsap/TweenMax.min.js"></script>
    <script src="scripts/gsap/plugins/scrollToPlugin.min.js"></script>
    <script src="scripts/Scroll-Magic/scrollMagic.min.js"></script>
    <script src="scripts/Scroll-Magic/plugins/animation.gsap.js"></script>
    <script src="scripts/Scroll-Magic/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="dist/scripts/scripts.js"></script>
@endsection
