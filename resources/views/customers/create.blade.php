@extends('layouts.app')
@section('content')
<div class="page-header">
    <h1>Novo Cadastro</h1>
</div>
{!! Form::open(['route' => 'customers.store',"class"=>"form-horizontal","role"=>"form"]) !!}
    {!! $form !!}
    <div class='form-group'>
        <div class="col-md-16 control-label">
            {!! Form::submit("Salvar",["class"=>"btn btn-default btn-primary","name"=>"btn-save", "disabled"=>true]) !!}
        </div>
    </div>
{!! Form::close()!!}
@stop
