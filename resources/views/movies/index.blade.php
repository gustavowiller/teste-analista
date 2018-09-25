@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Título</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($movies as $movie)
                            <tr>
                                <td> {{ $movie->title }}</td>
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
