@extends('layout.appp')
@section('content')
    @include('component.home-page.header')
    @include('component.home-page.banner')
    @include('component.detail-page.details')
    @include('component.home-page.footer-section')

    <script>
        (async()=>{
            // await Catgegory();

            await Banner();
            $(".preloader").delay(100).fadeOut(100).addClass('loaded');
            await productDetails();
            $(".preloader").delay(100).fadeOut(100).addClass('loaded');
        })()
    </script>
@endsection