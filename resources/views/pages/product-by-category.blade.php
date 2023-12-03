@extends('layout.app')
@section('content')
    @include('component.MenuBar')
    @include('component.HeroSlider')
    @include('component.ByCategoryList')
    
    @include('component.Footer')

    <script>
        (async()=>{
            await Catgegory();
            await HeroSlider();
            await ByCategory();
        })()
        
    </script>
    
@endsection