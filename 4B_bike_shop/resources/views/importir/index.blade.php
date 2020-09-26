@extends('bootstrap.navbar')

@section('content')
<h4>
    Importir
    <a href="importir/create" class="btn btn-success" style="display: inline-flex; float: right;">Add importir</a>
</h4>

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Telp</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($importirs as $key => $importir)
        <tr>
            <th scope="row">{{$key + 1}}</th>
            <td>{{$importir->name}}</td>
            <td>{{$importir->address}}</td>
            <td>{{$importir->tlp}}</td>
            <td style="display: flex">
                <a href="importir/{{$importir->id}}/edit" class="btn btn-warning btn-sm" >Edit</a>
                <form action="importir/{{$importir->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger btn-sm">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
