@extends('layouts.master')

@section('content')
    <h3>Judul : {{$article->judul}}</h3>
    <h3>Slug : {{$article->slug}}</h3>
    <p class="mt-3">{{$article->isi}}</p>

    <?php 
    // untuk merubah tag menjadi array
        $tag = preg_replace('/#/', "",$article->tag);
        $button=explode(' ',$tag);
    ?>
    <div>
    {{-- untuk menampilkan array tag sebagai button --}}
        @foreach ($button as $value)
            <a href="" class="btn btn-sm btn-success mt-1"><i class="fas fa-tag"></i>&nbsp;&nbsp;{{$value}}</a>
        @endforeach
    </div>
@endsection