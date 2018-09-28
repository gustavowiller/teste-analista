    <div class='form-group'>
        {{Form::label("name","Nome",["class"=>"col-md-2 control-label"])}}
        <div class="col-md-10">
            {{ Form::text('name',$customer->name,["class"=>"form-control"])}}
            <span class="text-danger">{{ $errors->first('name')}}</span>
        </div>
    </div>
    <div class='form-group'>
        {{Form::label("address_cep","CEP",["class"=>"col-md-2 control-label"])}}

        <div class="col-md-2">
            {{ Form::text('address_cep',$customer->address_cep,["class"=>"form-control"])}}
            <span id="errors_cep" class="text-danger">{{ $errors->first('address_cep')}}</span>
        </div>
        <span id="loading_cep" style="display:none">{{ HTML::image('images/spinner.gif','Carregando...',["title"=>"Carregando..."]) }}</span>
    </div>
    <div class="form-group">
        {{ Form::label("observation","Observação",["class"=>"col-md-2 control-label"])}}
        <div class="col-md-4">
            {{ Form::textarea('observation',$customer->observation,["class"=>"form-control","rows"=>2])}}
        </div>
    </div>
    @section('js')
        {{ HTML::script("js/jquery.mask(1.13.3).min.js") }}
        {{ HTML::script("js/jquery-ui(1.11.2).js") }}

        <script>
            $(document).ready(function(){
                $('#address_cep').mask('00000-000');
                $('#document_number').mask('000.000.000-00');
                $('#phone').mask('(00) 0 0000-0000');
                $('#phone_cel').mask('(00) 0 0000-0000');
            });
        </script>

        {{ HTML::script("js/select-cep.js") }}
        {{ HTML::script("js/delete-form.js") }}
    @stop
