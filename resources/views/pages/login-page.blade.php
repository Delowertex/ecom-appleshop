@extends('layout.app')
@section('content')
    @include('component.MenuBar')
    @include('component.HeroSlider')
    @include('component.login')

    @include('component.Footer')

    <script>
        (async()=>{

            await HeroSlider();
        })()
       
    </script>
@endsection