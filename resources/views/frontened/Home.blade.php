@extends('frontened.layouts.main')
@section('main-container')

<style>
    #home{
        background:linear-gradient(rgba(236, 230, 230, 0.5),#1e1f1e),url(images/1.jpg) no-repeat center center fixed;
        height: 85vh;
        position: relative;
        width: 100%;
        background-size: cover;
    }
</style>
    <main>
        <div id="home">
            <div class="overlay">
            <div class="landing-text">
            <h3>Getting your hair ready</h3>
            <h1>R&M Gents parlour</h1>
            <hr id="hr-main">
            <a href="{{url('/contact')}}" class="button btn-hire">Appoinment</a>
        </div>
        </div>
        </div>
    </main>
    @endsection
   