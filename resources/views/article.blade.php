@extends('layouts.master')

@section('content')

    <a href="/artikel/create" class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;&nbsp;Buat Artikel</a>

    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Judul</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($article as $key => $val)
            <tr>
                <td>{{$val->judul}}</td>
                <td>
                    <a href="/artikel/{{$val->id}}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i>&nbsp;&nbsp;Show</a>
                    <a href="/artikel/{{$val->id}}/edit" class="btn btn-sm btn-success"><i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>
                    <form action="/artikel/{{$val->id}}" method="post" style="display:inline;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>&nbsp;&nbsp;Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@push('scripts')
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
@endpush