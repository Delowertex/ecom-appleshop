@extends('layout.app')
@section('content')
    @include('component.MenuBar')
    @include('component.ByBrandList')
    @include('component.TopBrands')
    @include('component.Footer')
    <script>
        (async () => {
            await Category();
            await ByBrand();

            await TopBrands();
        })()
    </script>
@endsection