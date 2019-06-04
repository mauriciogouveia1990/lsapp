@extends('layouts.app')
{{-- @extends('layouts/app') --}}
{{-- nome da pagina e nome do ficheiro --}}

    @section('content')
        <div class="jumbotron text-center">
            <h1>{{$title}}</h1>
            <p> This is the Laravel Application from the "Laravel from Scratch" YouTube series.</p>
            <p>
                <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </div>
    @endsection