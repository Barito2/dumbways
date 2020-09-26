@extends('bootstrap.navbar')

@section('content')
<form action="/importir" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Telp</label>
        <input type="text" name="telp" class="form-control" id="exampleFormControlInput1" placeholder="telp">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Address</label>
        <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
