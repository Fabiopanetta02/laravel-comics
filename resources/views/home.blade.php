@extends('layouts.app')
@section('page-title', 'homepage')

@section('content')
<div class="site_main_content">
    <div class="container">


        <div class="btn-current">
            <a href="#">CURRENT SERIES</a>
        </div>
    <div class="thumbs row">

        @foreach($albums as $index => $album)

        <div class="thumb col-2">
            <a href="{{ route ('album', ['id' => $index])}}">
                <img src="{{ $album['thumb'] }}" alt="{{ $album['title'] }}">
                <h5> {{ strtoupper($album['series']) }} </h5>
            </a>
        </div>
        @endforeach
    </div>
    <!-- /.thumbs -->
    <div class="btn">
        <a href="#">LOAD MORE</a>
    </div>
    <!-- /.btn -->
        </div>
</div>
  <!-- /.site_main_content -->
<div class="cards">
    <div class="container">
          <div class="row">
            <div class="card">
            <img width="50" src="{{asset('images/buy-comics-digital-comics.png')}}" alt="mini card bianca con scritta DC">
            <p>DIGITAL COMICS</p>
         </div>
         <div class="card">
           <img width="50" src="{{asset('images/buy-comics-merchandise.png')}}" alt="mini immagine maglietta bianca">
           <p>DC MERCHANDISE</p>
         </div>
         <div class="card">
           <img width="50" src="{{asset('images/buy-comics-subscriptions.png')}}" alt="mini card bianca con simbolo fulmine">
           <p>SUBSCRIPTION</p>
         </div>
         <div class="card">
           <img width="40" src="{{asset('images/buy-comics-shop-locator.png')}}" alt="simbolo della posizione bianco">
           <p>COMIC SHOP LOCATOR</p>
         </div>
         <div class="card">
           <img width="50" src="{{asset('images/buy-dc-power-visa.svg')}}" alt="mini simbolo bianco batteria">
           <p>DC POWER VISA</p>
         </div>
          </div>
    </div>
    <!-- /.container -->
</div>
<!-- /.cards -->
@endsection