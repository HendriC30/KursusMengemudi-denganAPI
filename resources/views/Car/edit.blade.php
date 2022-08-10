@extends('layouts.app2')

@section('content')
<div class="container">
    <h1 style="text-align: center ;">Edit Car</h1>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <form action="/Car/{{$Car->id}}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">name car:</label>
                    <input type="text" class="form-control" name="car" aria-describedby="emailHelp" value="{{$Car->car}}">
                </div>

                <!-- select untuk brand  -->
                <div>
                <select class="form-select" aria-label="Default select example" name="brand_id" id="brand_id">
                    <option selected>brand car</option>
                    @foreach ($brand as $b)
                    <option value="{{$b->id}}">{{ $b->brand }}</option>
                    @endforeach
                </select>
                </div>
                </div><br>
                    <a href="/Car"><button type="button" class="btn btn-secondary">back</button></a>
                    <input class="btn btn-success" type="submit" name="submit" value="update">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

