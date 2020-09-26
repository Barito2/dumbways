@extends('bootstrap.navbar')

@section('content')
<h4 class="mt-4">Add product</h4>
<form action="/product/{{$product->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="exampleFormControlInput1">Product</label>
        <input type="text" name="product" class="form-control" value="{{$product->name}}" id="exampleFormControlInput1" placeholder="product">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">importir</label>
        <select class="form-control" id="exampleFormControlSelect1" name="importir">
            <option>-- Pilih --</option>
            @foreach ($importir as $importir)
            <option value="{{$importir->id}}" @if($importir->id == $product->importir_id) selected @endif>{{$importir->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Qty</label>
        <input type="number" name="qty" value="{{$product->qty}}" class="form-control" id="exampleFormControlInput1" placeholder="qty">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Price</label>
        <input type="number" name="price" value="{{$product->price}}" class="form-control" id="exampleFormControlInput1" placeholder="price">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Foto</label>
        <input type="file" name="foto" class="form-control" id="exampleFormControlInput1">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
