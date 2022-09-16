@extends('layouts.app')
@section('page-title', 'comic page')

@section('content')

<div class="bgblue">
    <div class="container">
         <div class="thumb">
            <div class="album">
                <img src="{{ $album['thumb'] }}" alt="{{ $album['title'] }}">
                <p class="type_album">{{ $album['type'] }}</p>
                <small class="view_gallery">
                    <a href="#">view gallery</a>
                </small>
            </div>
        </div>
    </div>
</div>

<div class="single_album container">
    <div class="row d_flex">
        <div class="col-75">
             <h2> {{ strtoupper($album['title']) }} </h2>
             <div class="single_album_info">
                 <div class="avaiable col-75">
                     <p>U.S. Price: <span>{{ $album['price'] }}</span></p>
                     <p>AVAIABLE</p>
                 </div>
                 <div class="check col-25 t_center">
                     <p>Check Availability</p>
                 </div>
             </div>
             <div class="description">
                 <p>{{ $album['description'] }} </p>
             </div>
         </div>
         <div class="col-25 rewards">
             <p>ADVERTISEMENT</p>
             <img src="{{asset('images/adv.jpg')}}" alt="Superman">
         </div>
     </div>
 </div>
@endsection