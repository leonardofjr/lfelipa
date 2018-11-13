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
@endsection

@section('footer')
  @include('frontend.section.footer')
@endsection