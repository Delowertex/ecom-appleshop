@extends('layout.app')
@section('content')
    {{-- @include('component.home-page.header-section')
    @include('component.home-page.banner-section')
    @include('component.home-page.collection-section')
    @include('component.home-page.exclusive-product')
    @include('component.home-page.summer-collection')
    @include('component.home-page.feature-product')
    @include('component.home-page.client-say')
    @include('component.home-page.delivery-return-support')
    @include('component.home-page.subscribe-section')
    @include('component.home-page.footer-section') --}}
    @include('component.MenuBar')
    @include('component.HeroSlider')
    @include('component.TopCategories')
    @include('component.ExclusiveProducts')
    @include('component.TopBrands')
    @include('component.Footer')

    <script>
        (async()=>{
            await Catgegory();

            await HeroSlider();

            await TopCategory();
            
            await Popular();

            await New();

            await TopItem();

            await Special();
            await TopBrand();
        })()
    </script>

@endsection