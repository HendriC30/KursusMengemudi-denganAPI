@extends('layouts.app2')

@section('content')
<div class="container">
    <h1 style="text-align: center ;">Instructor</h1>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: darkslateblue;">
                    <a class="btn btn-warning" href="/Instructor/create">add Instructor</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                    @csrf
                        <tr>
                        <th>no</th>
                        <th>name</th>
                        <th>phone_number</th>
                        <th>student</th>
                        <th>action</th>
                        </tr>
                        @foreach($Instructor as $i)
                        <tr>
                            <td>{{$i->id}}</td>
                            <td>{{$i->name}}</td>
                            <td>{{$i->phone_number}}</td>
                            <td>{{$i->student->name}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-info" href="/Instructor/{{$i->id}}/edit">edit</a>
                                    <form action="/Instructor/{{$i->id}}" method="POST">
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