@extends('layouts.padrao')

@section('content')
    <div id="page-wrapper">

        <div class="header">
            <h1 class="page-header">Adicionar Cliente</h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('Clientes') }} ">Listar Clientes</a></li>
                <li class="active">Adicionar Cliente</li>
            </ol>
        </div>

        <div id="page-inner">

            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="card-title">
                                <div class="title">Novo Cliente</div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-horizontal">
                                {!!Form::open(['url' => 'clientes/'.$cliente->idCliente, 'method' => 'put'])!!}

                                <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                                    <label for="nome" class="col-md-2 control-label">*Nome:</label>

                                    <div class="col-md-8">
                                        <input id="nome" type="text" class="form-control" name="nome" value="{{ $cliente->nome }}" placeholder="Academia ABC/Padaria Sonho de mel " maxlength="255" pattern="[a-zA-Z\s]+$" data-toggle="tooltip" data-placement="top" title="Esse campo aceita somente caracteres minúsculo/MAIÚSCULOS" required autofocus>

                                        @if ($errors->has('nome'))
                                            <span class="help-block">
                                        <strong>{{ $cliente->nome }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('cnpj') ? ' has-error' : '' }}">
                                    <label for="cnpj" class="col-md-2 control-label">*CNPJ:</label>

                                    <div class="col-md-8">
                                        <input id="cnpj" type="text" class="form-control" name="cnpj" value="{{ $cliente->cnpj }}"  placeholder="00000000000000" maxlength="14" data-toggle="tooltip" data-placement="top" title="Esse campo só aceita números de 0 a 9" pattern="[0-9]+$" autofocus>

                                        @if ($errors->has('cnpj'))
                                            <span class="help-block">
                                        <strong>{{ $cliente->cnpj }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('ie') ? ' has-error' : '' }}">
                                    <label for="ie" class="col-md-2 control-label">IE:</label>

                                    <div class="col-md-8">
                                        <input id="ie" type="text" class="form-control" name="ie" value="{{ $cliente->ie }}" data-toggle="tooltip" data-placement="top" title="Esse campo só aceita números de 0 a 9" pattern="[0-9]+$" autofocus>

                                        @if ($errors->has('ie'))
                                            <span class="help-block">
                                                <strong>{{ $cliente->ie }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('cep') ? ' has-error' : '' }}">
                                    <label for="cep" class="col-md-2 control-label">CEP:</label>

                                    <div class="col-md-8">
                                        <input id="cep" type="text" class="form-control" value="{{ $cliente->cep }}" name="cep" data-toggle="tooltip" data-placement="top" title="Esse campo só aceita números de 0 a 9" pattern="[0-9]+$" autofocus>

                                        @if ($errors->has('cep'))
                                            <span class="help-block">
                                                <strong>{{ $cliente->cep }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('endereco') ? ' has-error' : '' }}">
                                    <label for="endereco" class="col-md-2 control-label">*Endereço:</label>

                                    <div class="col-md-8">
                                        <input id="endereco" type="text" class="form-control"  value="{{ $cliente->endereco }}" name="endereco" data-toggle="tooltip" data-placement="top" title="Esse campo aceita somente caracteres minúsculo/MAIÚSCULOS" required autofocus>

                                        @if ($errors->has('endereco'))
                                            <span class="help-block">
                                                <strong>{{ $cliente->endereco }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('bairro') ? ' has-error' : '' }}">
                                    <label for="bairro" class="col-md-2 control-label">*Bairro:</label>

                                    <div class="col-md-8">
                                        <input id="bairro" type="text" class="form-control" value="{{ $cliente->bairro }}" name="bairro" data-toggle="tooltip" data-placement="top" title="Esse campo aceita somente caracteres minúsculo/MAIÚSCULOS" required autofocus>

                                        @if ($errors->has('bairro'))
                                            <span class="help-block">
                                                <strong>{{ $cliente->bairro }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('cidade_idCidade') ? ' has-error' : '' }}">
                                    <label for="cidade_idCidade" class="col-md-2 control-label">*Cidade:</label>

                                    <div class="col-md-8">
                                        @foreach($cidade as $c)
                                            @if($c->idCidade == $cliente->cidade_idCidade )
                                            <input id="cidade_idCidade" type="text" class="form-control" value="{{$c->nome }}" data-toggle="tooltip" data-placement="top" title="Esse campo aceita somente caracteres minúsculos/MAIÚSCULOS"  name="cidade_idCidade" required autofocus>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('estado_uf') ? ' has-error' : '' }}">
                                    <label for="estado" class="col-md-2 control-label">*Estado:</label>

                                    <div class="col-md-8">
                                        @foreach($cidade as $c)
                                            @if($c->idCidade == $cliente->cidade_idCidade )
                                            <input id="estado_uf" type="text" maxlength="2" class="form-control" value="{{$c->estado_uf }}" data-toggle="tooltip" data-placement="top" title="Esse campo aceita somente caracteres MAIÚSCULOS"  name="estado_uf" required autofocus>
                                         @endif
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('fone') ? ' has-error' : '' }}">
                                    <label for="fone" class="col-md-2 control-label">Telefone:</label>

                                    <div class="col-md-8">
                                        <input id="fone" type="text" class="form-control" value="{{ $cliente->fone }}" name="fone" data-toggle="tooltip" data-placement="top" title="Esse campo aceita somente números 0 a 9" autofocus>

                                        @if ($errors->has('fone'))
                                            <span class="help-block">
                                        <strong>{{ $cliente->fone }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('celular') ? ' has-error' : '' }}">
                                    <label for="celular" class="col-md-2 control-label">*Celular:</label>

                                    <div class="col-md-8">
                                        <input id="celular" type="text" class="form-control" name="celular" value="{{ $cliente->celular }}" data-toggle="tooltip" data-placement="top" title="Esse campo aceita somente números 0 a 9" required autofocus>

                                        {{--@if ($errors->has('celular'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('celular') }}</strong>--}}
                                        {{--</span>--}}
                                        {{--@endif--}}
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-2 control-label">*E-Mail:</label>

                                    <div class="col-md-8">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ $cliente->email }}" data-toggle="tooltip" data-placement="top" title="Esse campo aceita somente caracteres minúsculo/MAIÚSCULOS e caracteres especiais. Obrigatório o uso de @!" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required autofocus>

                                        @if ($errors->has('email'))
                                         <span class="help-block">
                                            <strong>{{ $cliente->email }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-4 col-md-offset-2">
                                        <button type="submit" class="btn btn-primary">
                                            Salvar Alterações!
                                        </button>
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection