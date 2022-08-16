@extends('layouts.app2')

@section('content')
<div class="container">
    <h1 style="text-align: center ;">Student</h1>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: darkslateblue;">
                    <a class="btn btn-warning" href="/Student/create">add Student</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                    @csrf
                        <tr>
                        <th>no</th>
                        <th>name</th>
                        <th>phone_number</th>
                        <th>car</th>
                        <th>action</th>
                        </tr>
                        @foreach($Student as $s)
                        <tr>
                            <td>{{$s->id}}</td>
                            <td>{{$s->name}}</td>
                            <td>{{$s->phone_number}}</td>
                            <td>{{$s->car->car}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-info" href="/Student/{{$s->id}}/edit">edit</a>
                                    <form action="/Student/{{$s->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-danger" type="submit" value="delete" onclick="return confirm('Hapus data?')">
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