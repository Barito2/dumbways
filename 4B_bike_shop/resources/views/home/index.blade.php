@extends('bootstrap.navbar')

@section('content')
<div class="row">
    @foreach ($products as $product)
    <div class="col-md-4 mt-4">
        <div class="card" style="width: 18rem;">
            <img src="{{asset('images/'.$product->foto)}}" class="card-img-top" alt="..." style="width: 285px">
            <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">Rp. {{$product->price}}</p>
            <a href="product/{{$product->id}}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
