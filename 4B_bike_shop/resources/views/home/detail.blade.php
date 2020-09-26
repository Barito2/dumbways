@extends('bootstrap.navbar')

@section('content')
<div class="row">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
        <div class="col-md-4">
            <img src="{{asset('images/'.$product->foto)}}" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">
                Importer : {{$product->importir->name}}<br>
                Price : {{$product->price}}<br>
                Qty : {{$product->qty}}<br>
            </p>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
