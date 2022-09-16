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

<div class="specifications">
    <div class="container">
        <div class="row">
            <div class="col-50 talent">
            <h3>Talent</h3>
            <div class="artists">
                <div class="col-25">
                    <p>Art by:</p>
                </div>
                <div class="col-75">
                    <p> @foreach($album['artists'] as $artist)
                    {{$artist}},
                    @endforeach
                    </p>
                </div>
            </div>
            <div class="writters">
                <div class="col-25">
                    <p>Written by:</p>
                </div>
               <div class="col-75">
                    <p> @foreach($album['writers'] as $writer)
                    {{$writer}},
                    @endforeach
                    </p>
               </div>
            </div>
        </div>
        <div class="col-50 specs">
            <h3>Specs</h3>
            <div class="info_specs">
                <div class="col-25">
                    <p>Series:</p>
                </div>
                <div class="col-75">
                    <p class="series">{{ strtoupper($album['series']) }}</p>
                </div>
            </div>
             <div class="info_specs">
                <div class="col-25">
                    <p>U.S. Price:</p>
                </div>
                <div class="col-75">
                    <p>{{ $album['price'] }}</p>
                </div>
            </div>
            <div class="info_specs date">
                <div class="col-25">
                    <p>On Sale Date:</p>
                </div>
                <div class="col-75">
                    <p>{{ $album['sale_date'] }}</p>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="specification_cards">
    <div class="container">
                <div class="row single_album_cards">
            <div class="col-25 card digital">
                <p>DIGITAL COMICS</p>
                <img width="50" src="{{asset('images/buy-comics-digital-comics.png')}}" alt="mini card bianca con scritta DC">
            </div>
            <div class="col-25 card">
                <p>SHOP DC</p>
                <img width="50" src="{{asset('images/buy-comics-subscriptions.png')}}" alt="mini card bianca con simbolo fulmine">
            </div>
            <div class="col-25 card">
                <p>COMIC SHOP LOCATOR</p>
                <img width="40" src="{{asset('images/buy-comics-shop-locator.png')}}" alt="simbolo della posizione bianco">
            </div>
            <div class="col-25 card">
                <p>SUBSCRIPTIONS</p>
                 <img width="50" src="{{asset('images/buy-comics-merchandise.png')}}" alt="mini immagine maglietta bianca">
            </div>
        </div>
    </div>
</div>
@endsection