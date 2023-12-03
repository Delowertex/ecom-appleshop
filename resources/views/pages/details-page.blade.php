@extends('layout.app')
@section('content')
    @include('component.MenuBar')
    @include('component.HeroSlider')
    @include('component.ProductDetails')

    @include('component.Footer')

    <script>
        HeroSlider();
    </script>
@endsection