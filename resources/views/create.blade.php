@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-12">                
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Adicionar Vaga</h3>
                        </div>                
                        <form action="{{ route('store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nome">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="companyName">Empresa</label>
                                    <input type="text" class="form-control" name="companyName" placeholder="Empresa">
                                </div>
                                <div class="form-group">
                                    <label for="office">Cargo</label>
                                    <input type="text" class="form-control" name="office" placeholder="Cargo">
                                </div>
                                <div class="form-group">
                                    <label for="description">Descrição</label>
                                    <input type="text" class="form-control" name="description" placeholder="Descricao">
                                </div>
                                <div class="form-group">
                                    <label for="value">Salario</label>
                                    <input type="number" class="form-control" name="value" placeholder="Salario">
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-default float-right">Submit</button>
                                    <a class="btn btn-primary float-left" href="{{ route('home') }}"> Voltar</a>
                                </div>
                            </div>                                
                        </form>
                    </div>                         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
