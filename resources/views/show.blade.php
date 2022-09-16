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

<div class="container">

</div>

@endsection