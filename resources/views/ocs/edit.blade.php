@extends('layouts.padrao')

@section('content')
    <div id="page-wrapper">

        <div class="header">
            <h1 class="page-header">Adicionar Ordem de Compra</h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('ocs') }}  ">Listar OC</li>
                <li class="active">Adicionar OC</li>
            </ol>
        </div>

        <div id="page-inner">

            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="card-title">
                                <div class="title">Nova Ordem de Compra</div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-horizontal">
                                {!!Form::open(['url' => 'ocs/'.$oc->idOC, 'method' => 'put'])!!}

                                <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                                    <label for="tipo" class="col-md-2 control-label">Descrição:</label>

                                    <div class="col-md-8">
                                        <input id="tipo" type="text" class="form-control" name="tipo" value="{{ $oc->tipo }}" placeholder="Compra de Manta" maxlength="255" pattern="[a-zA-Z\s]+$" data-toggle="tooltip" data-placement="top" title="Esse campo aceita somente caracteres minúsculo/MAIÚSCULOS" autofocus>

                                        @if ($errors->has('tipo'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('tipo') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('observacoes') ? ' has-error' : '' }}">
                                    <label for="observacoes" class="col-md-2 control-label">Observações:</label>

                                    <div class="col-md-10">
                                        <textarea id="observacoes" class="form-control" name="observacoes" value="{{ $oc->observacoes }}" dplaceholder="Foram compradas 2 rolos de tapets, 3 latas de tinta" maxlength="255" data-toggle="tooltip" data-placement="top" title="Esse campo aceita somente caracteres minúsculo/MAIÚSCULOS, números e caracteres especiais" autofocus></textarea>

                                        @if ($errors->has('observacoes'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('observacoes') }}</strong>
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

                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Quantidade</th>
                                        <th>Largura</th>
                                        <th>Comprimento</th>
                                        <th>Unidade de Medida</th>
                                        <th>Borda</th>
                                        <th>Preço Unitario</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($insumos as $insumo)
                                        <tr>
                                            <td>{{ $insumo->quantidade }}</td>
                                            <td>{{ $insumo->largura }}</td>
                                            <td>{{ $insumo->comprimento }}</td>
                                            <td>{{ $insumo->unidadeMedida }}</td>
                                            <td>{{ $insumo->borda }}</td>
                                            <td>{{ $insumo->precoUnit }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Quantidade</th>
                                        <th>Largura</th>
                                        <th>Comprimento</th>
                                        <th>Unidade de Medida</th>
                                        <th>Borda</th>
                                        <th>Preço Unitario</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection