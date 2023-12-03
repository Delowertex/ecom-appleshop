@extends('layout.app')
@section('content')
    @include('component.MenuBar')
    @include('component.HeroSlider')
    @include('component.PolicyList')
    @include('component.Footer')

    <script>
        (async()=>{

            await HeroSlider();
            await Policy();
        })()
       
    </script>

@endsection