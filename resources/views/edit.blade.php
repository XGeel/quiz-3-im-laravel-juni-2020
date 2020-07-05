@extends('layouts.master')

@section('content')
    <form action="/artikel/{{$article->id}}" method="post">
        @csrf
        @method('put')
        <h1>Edit Artikel</h1>
        <div class="form-group mt-3">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" value="{{$article->judul}}" name="judul" id="judul"/>
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <textarea class="form-control" name="isi" id="isi">{{$article->isi}}</textarea>
        </div>
        <div class="form-group">
            <label for="tag">Tag</label>
            <input type="text" class="form-control" value="{{$article->tag}}" name="tag" id="tag">
        </div>
        <button type="submit" class="btn btn-success">Edit</button>
    </form>
@endsection 