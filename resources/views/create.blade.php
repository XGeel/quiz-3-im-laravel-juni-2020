@extends('layouts.master')

@section('content')
    <form action="/artikel" class="text-primary" method="post">
        @csrf
        <h1>Buat Artikel Baru</h1>
        <div class="form-group mt-3">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul"/>
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <textarea class="form-control" name="isi" id="isi"></textarea>
        </div>
        <div class="form-group">
            <label for="tag">Tag</label>
            <input type="text" class="form-control" name="tag" id="tag">
        </div>
        <button type="submit" class="btn btn-primary">Post</button>
    </form>
@endsection 