@extends('samples.layout')
@section('content')


    <div class="card">
        <div class="card-header">Sample Page</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Name : {{ $samples->name }}</h5>
                <p class="card-text">Address : {{ $samples->address }}</p>
                <p class="card-text">Mobile : {{ $samples->mobile }}</p>
            </div>

            </hr>

        </div>
    </div>
