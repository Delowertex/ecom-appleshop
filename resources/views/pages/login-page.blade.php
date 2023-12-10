@extends('layout.appp')
@section('content')
    @include('component.home-page.header')
    @include('component.home-page.banner')
    @include('component.login-page.login')

    @include('component.Footer')

    <script>
        (async()=>{
            // await Catgegory();

            await Banner();
            $(".preloader").delay(100).fadeOut(100).addClass('loaded');
        })()
       
    </script>
@endsection