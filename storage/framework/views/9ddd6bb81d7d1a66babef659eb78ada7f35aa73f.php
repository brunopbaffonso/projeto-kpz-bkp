<?php $__env->startSection('content'); ?>
    <div id="page-wrapper">

        <div class="header">
            <h1 class="page-header">Adicionar Cliente</h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo e(url('/')); ?>">Inicio</a></li>
                <li><a href="<?php echo e(url('clientes')); ?> ">Listar Clientes</a></li>
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
                                <?php echo Form::open(['url' => 'fornecedores/', 'method' => 'post']); ?>



                                <div class="form-group<?php echo e($errors->has('nome') ? ' has-error' : ''); ?>">
                                    <label for="nome" class="col-md-2 control-label">*Nome:</label>

                                    <div class="col-md-8">
                                        <input id="nome" type="text" class="form-control" name="nome" value="<?php echo e(old('nome')); ?>" placeholder=" Pague Pouco LTDA/ Academia Fortes" maxlength="255" pattern="[a-zA-Z\s]+$" data-toggle="tooltip" data-placement="top" title="Esse campo aceita somente caracteres minúsculo/MAIÚSCULOS" required autofocus>

                                        <?php if($errors->has('nome')): ?>
                                            <span class="help-block">
                                        <strong><?php echo e($cliente->nome); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('cnpj') ? ' has-error' : ''); ?>">
                                    <label for="cnpj" class="col-md-2 control-label">*CNPJ:</label>

                                    <div class="col-md-8">
                                        <input id="cnpj" type="text" class="form-control" name="cnpj" value="<?php echo e(old('cnpj')); ?>" data-toggle="tooltip" placeholder="00000000000000" maxlength="14" data-placement="top" title="Esse campo só aceita números de 0 a 9" pattern="[0-9]+$" maxlength="14" autofocus>

                                        <?php if($errors->has('cnpj')): ?>
                                            <span class="help-block">
                                        <strong><?php echo e($cliente->cnpj); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('ie') ? ' has-error' : ''); ?>">
                                    <label for="ie" class="col-md-2 control-label">IE:</label>

                                    <div class="col-md-8">
                                        <input id="ie" type="text" class="form-control" name="ie" value="<?php echo e(old('ie')); ?>" data-toggle="tooltip" data-placement="top" title="Esse campo só aceita números de 0 a 9" pattern="[0-9]+$" autofocus>

                                        <?php if($errors->has('ie')): ?>
                                            <span class="help-block">
                                        <strong><?php echo e($cliente->ie); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('cep') ? ' has-error' : ''); ?>">
                                    <label for="cep" class="col-md-2 control-label">CEP:</label>

                                    <div class="col-md-8">
                                        <input id="cep" type="text" placeholder="000000000" maxlength="9" class="form-control" value="<?php echo e(old('cep')); ?>" name="cep" data-toggle="tooltip" data-placement="top" title="Esse campo só aceita números de 0 a 9" pattern="[0-9-]+$" autofocus>

                                        <?php if($errors->has('cep')): ?>
                                            <span class="help-block">
                                        <strong><?php echo e($cliente->cep); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('endereco') ? ' has-error' : ''); ?>">
                                    <label for="endereco" class="col-md-2 control-label">*Endereço:</label>

                                    <div class="col-md-8">
                                        <input id="endereco" type="text" class="form-control" placeholder="João Avelange" maxlength="255" value="<?php echo e(old('endereco')); ?>" name="endereco" data-toggle="tooltip" data-placement="top" title="Esse campo aceita somente caracteres minúsculo/MAIÚSCULOS"  required autofocus>

                                        <?php if($errors->has('endereco')): ?>
                                            <span class="help-block">
                                        <strong><?php echo e($cliente->endereco); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('bairro') ? ' has-error' : ''); ?>">
                                    <label for="bairro" class="col-md-2 control-label">*Bairro:</label>

                                    <div class="col-md-8">
                                        <input id="bairro" type="text" placeholder="Osasco" maxlength="255" class="form-control" value="<?php echo e(old('bairro')); ?>" name="bairro" data-toggle="tooltip" data-placement="top" title="Esse campo aceita somente caracteres minúsculo/MAIÚSCULOS" required autofocus>

                                        <?php if($errors->has('bairro')): ?>
                                            <span class="help-block">
                                        <strong><?php echo e($cliente->bairro); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('cidade_idCidade') ? ' has-error' : ''); ?>">
                                    <label for="bairro" class="col-md-2 control-label">*Cidade:</label>

                                    <div class="col-md-8">
                                        <input id="cidade_idCidade" placeholder="Rio de Janeiro" maxlength="255" type="text" class="form-control" value="<?php echo e(old('cidade_idCidade')); ?>" data-toggle="tooltip" data-placement="top" title="Esse campo aceita somente caracteres minúsculo/MAIÚSCULOS" name="cidade_idCidade" required autofocus>

                                        <?php if($errors->has('$cidade->cidade_nome')): ?>
                                            <span class="help-block">
                                        <strong><?php echo e($cidade->cidade_nome); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('estado_uf') ? ' has-error' : ''); ?>">
                                    <label for="bairro" class="col-md-2 control-label">*Estado:</label>

                                    <div class="col-md-8">
                                        <input id="estado_uf" type="text" maxlength="2" placeholder="RJ" class="form-control" value="<?php echo e(old('estado_uf')); ?>" data-toggle="tooltip" data-placement="top" title="Esse campo aceita somente caracteres MAIÚSCULOS. Maximo de 2 caracteres." name="estado_uf" required autofocus>

                                        <?php if($errors->has('$cidade->cidade_uf')): ?>
                                            <span class="help-block">
                                        <strong><?php echo e($cidade->cidade_uf); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('fone') ? ' has-error' : ''); ?>">
                                    <label for="fone" class="col-md-2 control-label">Telefone:</label>

                                    <div class="col-md-8">
                                        <input id="fone" type="text" placeholder="(00)00000000" maxlength="12" class="form-control" value="<?php echo e(old('fone')); ?>" name="fone" data-toggle="tooltip" data-placement="top" title="Esse campo aceita somente números 0 a 9" autofocus>

                                        <?php if($errors->has('fone')): ?>
                                            <span class="help-block">
                                        <strong><?php echo e($cliente->fone); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('celular') ? ' has-error' : ''); ?>">
                                    <label for="celular" class="col-md-2 control-label">*Celular:</label>

                                    <div class="col-md-8">
                                        <input id="celular" type="text" placeholder="(00)900000000" maxlength="13" class="form-control" name="celular" value="<?php echo e(old('celular')); ?>" data-toggle="tooltip" data-placement="top" title="Esse campo aceita somente números 0 a 9" required autofocus>

                                        <?php if($errors->has('celular')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('celular')); ?></strong>
                                        </span>--}}
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                    <label for="email" class="col-md-2 control-label">*E-Mail:</label>

                                    <div class="col-md-8">
                                        <input id="email" type="email" placeholder="cliente@email.com" class="form-control" name="email" value="<?php echo e(old('email')); ?>" data-toggle="tooltip" data-placement="top" title="Esse campo aceita somente caracteres minúsculo/MAIÚSCULOS e caracteres especiais. Obrigatório o uso de @!" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required autofocus>

                                        <?php if($errors->has('email')): ?>
                                         <span class="help-block">
                                            <strong><?php echo e($cliente->email); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-4 col-md-offset-2">
                                        <button type="submit" class="btn btn-primary">
                                            Salvar Alterações!
                                        </button>
                                    </div>
                                </div>
                                <?php echo Form::close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.padrao', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>