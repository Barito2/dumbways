@extends('bootstrap.navbar')

@section('content')
    <h4>
        Product
        <a href="/product/create" class="btn btn-success" style="display: inline-flex; float: right;">Add product</a>
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
                <th scope="col">Importir</th>
                <th scope="col">Qty</th>
                <th scope="col">Price</th>
                <th scope="col">Photo</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $key => $product)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->importir->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td><img src="{{asset('images/'.$product->foto)}}" alt="" style="width: 100px"></td>
                <td style="display: flex">
                    <a href="/product/{{$product->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="product/{{$product->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
