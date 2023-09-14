@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        <div class="container py-5">

            <h1 class="display-5 fw-bold">
                Welcome to Laravel+Bootstrap 5
            </h1>

            <p class="col-md-8 fs-4">This a preset package with Bootstrap 5 views for laravel projects including laravel
                breeze/blade. It works from laravel 9.x to the latest release 10.x</p>
            <a href="https://packagist.org/packages/pacificdev/laravel_9_preset" class="btn btn-primary btn-lg"
                type="button">Documentation</a>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <p class="fs-4">Just in case you need it, you can find here your local meteo</p>
            <div class="d-flex justify-content-center align-items-center">
                <div class="weather-box">
                    <div class="glass h-100 w-100">
                        <h1 class="text-center pt-2 text-light">Rome</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
