@extends('layout.appp')
@section('content')

@include('component.home-page.popup')
@include('component.home-page.header')


@include('component.ByCategoryList')
@include('component.home-page.footer-section')

<script>
    $(".preloader").delay(100).fadeOut(100).addClass('loaded');
</script>    
@endsection