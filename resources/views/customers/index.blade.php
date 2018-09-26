@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td> <a href="{{$customer->path()}}">{{ $customer->name }}</a></td>
                                <td> <a href="{{$customer->path()}}"> Detalhar </a></td>

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
