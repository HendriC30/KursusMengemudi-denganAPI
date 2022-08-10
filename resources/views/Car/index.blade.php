@extends('layouts.app2')

@section('content')
<div class="container">
    <h1 style="text-align: center ;">Car</h1>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: darkslateblue;">
                    <a class="btn btn-warning" href="/Car/create">add Car</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                    @csrf
                        <tr>
                        <th>no</th>
                        <th>name car</th>
                        <th>brand</th>
                        <th>action</th>
                        </tr>
                        @foreach($car as $c)
                        <tr>
                            <td>{{$c->id}}</td>
                            <td>{{$c->car}}</td>
                            <td>{{$c->Brand->brand}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-info" href="/Car/{{$c->id}}/edit">edit</a>
                                    <form action="/Car/{{$c->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-danger" type="submit" value="delete">
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection