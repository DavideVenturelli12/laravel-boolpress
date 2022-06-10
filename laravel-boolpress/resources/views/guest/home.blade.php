@extends('layouts.front-app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Benvenuto su Boolpress!</div>
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{ route('login') }}">Accedi</a>
                        <a class="btn btn-primary" href="{{ route('register') }}">Registrati</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
