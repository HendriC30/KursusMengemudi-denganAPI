@extends('layouts.app2')

@section('content')
<div class="container">
    <h1 style="text-align: center ;">Edit Student</h1>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <form action="/Student/{{$Student->id}}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">name :</label>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="{{$Student->name}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">phone number :</label>
                    <input type="text" class="form-control" name="phone_number" aria-describedby="emailHelp" value="{{$Student->phone_number}}">
                </div>
                <div>
                <select class="form-select" aria-label="Default select example" name="car_id" id="car_id">
                    <option selected>stundent car</option>
                    @foreach ($cars as $c)
                    <option value="{{$c->id}}">{{ $c->car }}</option>
                    @endforeach
                </select>
                </div><br>
                    <a href="/Student"><button type="button" class="btn btn-secondary">back</button></a>
                    <input class="btn btn-success" type="submit" name="submit" value="update" onclick="return confirm('update data?')">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

