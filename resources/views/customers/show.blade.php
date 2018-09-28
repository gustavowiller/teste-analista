@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $customer->name }}</div>

                <div class="card-body">
                    Name: {{ $customer->name }} <br />
                    Cpf: {{ $customer->cpf}} <br />
                    Rg: {{ $customer->rg }} <br />
                    Text: {{ $customer->observation}};
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($customer->addresses as $address)
            <div class="card">
                <div class="card-body">
                    {{$address->street}}
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($customer->movies as $movie)
            <div class="card">
                <div class="card-body">
                    {{$movie->title}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
