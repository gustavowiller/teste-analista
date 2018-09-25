@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Endereço</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($addresses as $address)
                            <tr>
                                <td> {{ $address->street }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
