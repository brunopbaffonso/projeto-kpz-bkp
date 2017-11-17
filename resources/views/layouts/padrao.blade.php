<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="Templateq" name="author" />
    <title>KAPAZI CAPACHOS PERSONALIZADOS</title>
    <!-- Bootstrap Styles-->
{!! Html::style('css/bootstrap.min.css') !!}
<!-- FontAwesome Styles-->
{!! Html::style('css/font-awesome.css') !!}
<!-- Custom Styles-->
{!! Html::style('css/custom-styles.css') !!}
<!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><strong> KAPAZI</strong></a>
            <div id="sideNav" href="">
                <i class="fa fa-bars icon"></i>
            </div>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </nav>
    <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li>
                    <a href="{{ url('/') }}""><i class="glyphicon glyphicon-chevron-right"></i> Inicio</a>
                </li>

                <li>
                    <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> Insumo<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('insumos/create') }}">Adicionar Insumo</a>
                        </li>
                        <li>
                            <a href="{{ url('insumos') }}">Lista Insumo</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> SubProduto<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('subprodutos/create') }}">Adicionar Subproduto</a>
                        </li>
                        <li>
                            <a href="{{ url('subprodutos') }}">Lista de Subprodutos</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> Modelos<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('modelos/create') }}">Adicionar Modelo</a>
                        </li>
                        <li>
                            <a href="{{ url('modelos') }}">Lista de Modelos</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> Ordem de Serviço<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('oss/create') }}">Adicionar Ordem de Serviço</a>
                        </li>
                        <li>
                            <a href="{{ url('oss') }}">Lista Ordem de Serviço</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> Ordem de Compra<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('ocs/create') }}">Adicionar Ordem de Compra</a>
                        </li>
                        <li>
                            <a href="{{ url('ocs') }}">Lista Ordem de Compra</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> Fornecedores<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('fornecedores') }}">Entrar em Contato</a>
                        </li>
                        <li>
                            <a href="{{ url('fornecedores/create') }}">Adicionar Fornecedor</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> Clientes<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('clientes') }}">Entrar em Contato</a>
                        </li>
                        <li>
                            <a href="{{ url('clientes/create') }}">Adicionar Cliente</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> Gerar Relátorios<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="chart.html">Compra</a>
                        </li>
                        <li>
                            <a href="morris-chart.html">Venda</a>
                        </li>
                        <li>
                            <a href="morris-chart.html">Entregas</a>
                        </li>
                        <li>
                            <a href="morris-chart.html">Pagamento Vendedores</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
@yield('content')
{{ Html::script('js/jquery-1.10.2.js') }}
<!-- Bootstrap Js -->
{{ Html::script('js/bootstrap.min.js') }}
<!-- Metis Menu Js -->
{{ Html::script('js/jquery.metisMenu.js') }}
<!-- Custom Js -->
{{ Html::script('js/custom-scripts.js') }}
</body>

</html>