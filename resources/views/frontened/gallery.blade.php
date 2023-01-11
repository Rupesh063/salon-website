@extends('frontened.layouts.main')
@section('main-container')


    <main>
<div class="gallery-header">
    <h1>Some of your most awesome haircuts</h1>
    <p>Hope you come back soon</p>
</div>

<video width="1500"height="500" controls><source src="Images/Studio_Project.mp4" type="video/mp4"></video>
<h3>Happy client</h3>

<div class="row gallery-row">
<div class="column">
        <img src="Images/2.jpg" alt=""style="width:100%">
        <img src="Images/3.jpg" alt=""style="width:100%">
        <img src="Images/4.jpg" alt=""style="width:100%">
        <img src="Images/5.jpg" alt=""style="width:100%">
    </div>

    <div class="column">
        <img src="Images/6.jpg" alt=""style="width:100%">
        <img src="Images/7.jpg" alt=""style="width:100%">
        <img src="Images/8.jpg" alt=""style="width:100%">      
        <img src="Images/9.jpg" alt=""style="width:100%">
    </div>

    <div class="column">
       <img src="Images/10.jpg" alt=""style="width:100%">               
       <img src="Images/11.jpg" alt=""style="width:100%">
       <img src="Images/13.jpg" alt=""style="width:100%">  
       <img src="Images/14.jpg" alt=""style="width:100%">
    </div>

 <div class="column">
      <img src="Images/15.jpg" alt=""style="width:100%">
      <img src="Images/16.jpg" alt=""style="width:100%">
      <img src="Images/17.jpg" alt=""style="width:100%">
      <img src="Images/18.jpg" alt=""style="width:100%">
    </div>
</div>
</div>
    </main>
    @endsection
   