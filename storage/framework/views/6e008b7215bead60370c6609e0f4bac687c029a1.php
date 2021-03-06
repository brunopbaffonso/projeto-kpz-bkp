<?php $__env->startSection('content'); ?>
    <div id="page-wrapper" >
    <div class="header"> 
        <h1 class="page-header">Fornecedores</h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo e(url('/')); ?>">Inicio</a></li>
                <li class="active">Lista de Fornecedores</li>
                <li><a href="<?php echo e(url('fornecedores/create')); ?> ">Adicionar Fornecedor</a></li>
            </ol>               
    </div>
    <?php echo Form::open(['url' => 'fornecedores', 'method' => 'get', 'class' => 'form-inline text-center']); ?>

    <div id="page-inner"> 
        <div class="form-group">
            <label for="inputEmail3" class=" col-md-3 control-label" style="padding-top: 2%;">Pesquisa &nbsp;</label>
            <input type="text" class="form-control" name="nome" placeholder="Ex: Nome/CNPJ">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    <?php echo Form::close(); ?>

    <div class="col-md-12">
            <!--   Basic Table  -->
                 <div class="panel panel-default">
                    <div class="panel-heading">
                          Lista de Fornecedores
                    </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                            <tr>
                                <td>ID</td>
                                <td>Ativo</td>
                                <td>Nome</td>
                                <td>CNPJ</td>
                                <td>IE</td>
                                <td>Endereço</td>
                                <td>Bairro</td>
                                <td>CEP</td>
                                <td>Fone</td>
                                <td>Celular</td>
                                <td>E-mail</td>
                            </tr>
                            <?php $__currentLoopData = $fornecedor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fornecedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($fornecedor->idFornecedor); ?></td>
                                    <td><?php echo e($fornecedor->ativo); ?></td>
                                    <td><?php echo e($fornecedor->nome); ?></td>
                                    <td><?php echo e($fornecedor->cnpj); ?></td>
                                    <td><?php echo e($fornecedor->ie); ?></td>
                                    <td><?php echo e($fornecedor->endereco); ?></td>
                                    <td><?php echo e($fornecedor->bairro); ?></td>
                                    <td><?php echo e($fornecedor->cep); ?></td>
                                    <td><?php echo e($fornecedor->fone); ?></td>
                                    <td><?php echo e($fornecedor->celular); ?></td>
                                    <td><?php echo e($fornecedor->email); ?></td>
                                    <td>
                                         <div role="group" class="btn-group">
                                            <?php echo Form::open(['url' => 'fornecedores/'.$fornecedor->idFornecedor, 'method' => 'edit', 'onSubmit' => 'return confirm("Você deseja realmente Editar esse Fornecedor?");']); ?>

                                            <button class="btn btn-warning btn-xs" href="fornecedores/<?php echo e($fornecedor->idFornecedor); ?>/edit"><span class="glyphicon glyphicon-pencil"></span></button>
                                            <?php echo Form::close(); ?>

                                        </div>
                                         <div role="group" class="btn-group">
                                            <?php echo Form::open(['url' => 'fornecedores/'.$fornecedor->idFornecedor, 'method' => 'delete', 'onSubmit' => 'return confirm("Você deseja realmente exluir esse Fornecedor?");']); ?>

                                            <button type="submit" name="nada" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                                            <?php echo Form::close(); ?>

                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            </div>
                        </div>
                    <div class="panel-body" align="left">
                    <a href="fornecedores/create">
                         <button type="button" class="btn btn-primary">Cadastrar Fornecedor</button>
                    </a>
                </div>
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.padrao', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>