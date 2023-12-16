@extends('layout.appp')
@section('content')

    @include('component.home-page.header')
    @include('component.home-page.banner')
    @include('component.wish-page.wishlist')
    @include('component.home-page.footer-section')

<script>
    (async()=>{
        await Banner();
            $(".preloader").delay(100).fadeOut(100).addClass('loaded');
    })()
</script>
    
@endsection