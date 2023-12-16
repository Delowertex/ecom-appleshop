@extends('layout.appp')
@section('content')
    
@include('component.home-page.header')
@include('component.varify-page.varify')
@include('component.home-page.footer-section')


<script>
    (async()=>{
        $(".preloader").delay(100).fadeOut(100).addClass('loaded');
    })()
</script>
    
@endsection