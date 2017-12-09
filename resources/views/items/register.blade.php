@extends('layouts.padrao')

@section('content')
    <div id="page-wrapper">

        <div class="header">
            <h1 class="page-header">Itens</h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('items') }}">Listar Itens</a></li>
                <li class="active"><a>Adicionar Item</a></li>
            </ol>
        </div>

        <div id="page-inner">

                <div id="error-div" class='alert-danger'>
                    <ul id="error-page">
                    </ul>
                </div>

            @if (Session::has('mensagem'))
            <!-- mostra este bloco se existe uma chave na sessão chamada mensagens-sucesso -->
                <div class='alert alert-success'>
                    @if (is_array(Session::get('mensagem')))
                        <ul>
                            @foreach (Session::get('mensagem') as $msg)
                                <li>{{$msg}}</li>
                            @endforeach
                        </ul>
                    @else
                        {{Session::get('mensagem')}}
                    @endif
                </div>
            @endif

            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="card-title">
                                <div class="title">Novo Item</div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-horizontal" for="quantidade" class="col-md-2 control-label">Código OS:</label>  {{ $OS }}
                                <div class="form-horizontal">
                                    {!!Form::open(['url' => 'items/', 'method' => 'post', 'enctype' => 'multipart/form-data'])!!}
                                    <input id="os_idOS" type="hidden" class="form-control" name="os_idOS" value="{{ $OS }}">

                                    <div class="form-group{{ $errors->has('quantidade') ? ' has-error' : '' }}">
                                        <label for="quantidade" class="col-md-2 control-label">Quantidade:</label>

                                        <div class="col-md-8">
                                            <input id="quantidade" type="number" class="form-control" name="quantidade" value="{{ old('quantidade') }}" pattern="[0-9]+$" placeholder="Ex: 1(tapete)/10 (chinelos)" ata-toggle="tooltip" data-placement="top" title="Esse campo so aceita números de 0 a 9" required autofocus>

                                            @if ($errors->has('quantidade'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('quantidade') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('comprimento') ? ' has-error' : '' }}">
                                        <label for="comprimento" class="col-md-2 control-label">Comprimento:</label>

                                        <div class="col-md-8">
                                            <input id="comprimento" type="number" class="form-control" name="comprimento" value="{{ old('comprimento') }}" placeholder="Ex: 0.60/0.90" data-toggle="tooltip" data-placement="top" title="Esse campo so aceita números de 0 a 9 separado por ponto" required autofocus>

                                            @if ($errors->has('comprimento'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('comprimento') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('largura') ? ' has-error' : '' }}">
                                        <label for="comprimento" class="col-md-2 control-label">Largura:</label>

                                        <div class="col-md-8">
                                            <input id="largura" type="number" class="form-control" name="largura" value="{{ old('largura') }}" placeholder="Ex: 0.60/0.90" data-toggle="tooltip" data-placement="top" title="Esse campo so aceita números de 0 a 9 separado por ponto" required autofocus>

                                            @if ($errors->has('largura'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('largura') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('unidadeMedida') ? ' has-error' : '' }}">
                                        <label for="unidadeMedida" class="col-md-2 control-label">Unidade de Medida</label>
                                        <select name="unidadeMedida">
                                            <option value="mm" class="form-control">mm (Milimetro)</option>
                                            <option value="cm" class="form-control">cm (Centimetros)</option>
                                            <option value="dm" class="form-control">dm (Decimetros)</option>
                                            <option value="m" class="form-control">m (Metros)</option>
                                            <option value="dam" class="form-control">dam (Decametros)</option>
                                        </select>
                                    </div>

                                    <div class="form-group{{ $errors->has('borda') ? ' has-error' : '' }}">
                                        <label for="borda" class="col-md-2 control-label">Borda</label>
                                        <select name="borda">
                                            <option value="0" class="form-control">Sem Borda</option>
                                            <option value="1" class="form-control">Pintada</option>
                                            <option value="2" class="form-control">Vulcanizada</option>
                                            <option value="3" class="form-control">Rebaixada</option>
                                        </select>
                                    </div>

                                    <div class="form-group{{ $errors->has('arte') ? ' has-error' : '' }}">
                                        <label for="arte" class="col-md-2 control-label">Arte:</label>

                                        <div class="col-md-8">
                                            <input id="arte" type="file" name="arte" value="{{ old('arte') }}" data-toggle="tooltip" data-placement="top" title="Tooltip on top" autofocus>

                                            @if ($errors->has('arte'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('arte') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('precoUnit') ? ' has-error' : '' }}">
                                        <label for="precoUnit" class="col-md-2 control-label">Preço Unitário:</label>

                                        <div class="col-md-8">
                                            <input id="precoUnit" type="number" class="form-control" name="precoUnit" value="{{ old('precoUnit') }}" placeholder="Ex: 10.00/300.50" data-toggle="tooltip" data-placement="top" title="Esse campo so aceita números de 0 a 9 separado por ponto" required autofocus>

                                            @if ($errors->has('precoUnit'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('precoUnit') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                        <div class="form-group">
                                            <div class="col-md-4 col-md-offset-2">
                                                <button type="submit" name="submit" value="0" class="btn btn-primary">
                                                    Cadastrar Novo Item
                                                </button>

                                                <button type="submit" name="submit" value="1" class="btn btn-success">
                                                    Cadastrar & Finalizar!
                                                </button>
                                            </div>

                                            {{--<div class="col-md-4 col-md-offset-2">--}}
                                                {{----}}
                                            {{--</div>--}}
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @push('js')
        <script>
            {{--$('#cadastraNovo').on('click', function () {--}}
                {{--$('#error-div').removeClass('alert');--}}
                {{--$('#error-page').html('');--}}
                {{--var formData = {--}}
                    {{--'os_ID'              : $('input[name="os_idOS"]').val(),--}}
                    {{--'quantidade'         : $('input[name="quantidade"]').val(),--}}
                    {{--'comprimento'        : $('input[name="comprimento"]').val(),--}}
                    {{--'largura'            : $('input[name="largura"]').val(),--}}
                    {{--'unidadeMedida'      : $('select[name="unidadeMedida"]').val(),--}}
                    {{--'borda'              : $('select[name="borda"]').val(),--}}
                    {{--'arte'               : $('input[name="arte"]').val(),--}}
                    {{--'precoUnit'          : $('input[name="precoUnit"]').val(),--}}
                    {{--'tipoBtn'            : '0'--}}
                {{--};--}}

                {{--$.ajaxSetup({--}}
                    {{--headers: {--}}
                        {{--'X-CSRF-TOKEN': "{{ csrf_token() }}"--}}
                    {{--}--}}
                {{--});--}}
                {{--$.ajax({--}}
                    {{--url: '{{ url('items')  }}',--}}
                    {{--type: 'POST',--}}
                    {{--dataType: 'json',--}}
                    {{--data: formData--}}
                {{--}).done(function(data) {--}}
                    {{--if (data.errorInfo) {--}}
                        {{--{{ $error = true }}--}}
                            {{--$('#error-div').addClass('alert');--}}
                            {{--$('#error-page').append('<div class="help-block">' + data.errorInfo + '</div>'); // add the actual error message under our input--}}
                        {{--console.log(data);--}}
                    {{--} else {--}}
                        {{--console.log(data);--}}
                    {{--}--}}
                {{--});--}}
            {{--});--}}
        </script>
    @endpush
@endsection
