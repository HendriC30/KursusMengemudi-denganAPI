@extends('layouts.app2')

@section('content')
<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">

        <!-- tombol navigasi -->
        
    </nav>


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3 style="text-align: center;">selamat datang {{ Auth::user()->name }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
