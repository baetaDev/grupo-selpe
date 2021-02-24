@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabela de Vagas</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-append">
                                        <a class="btn btn-primary" href="{{ route('create') }}"> Adicionar</a>
                                    </div>
                                </div>
                            </div>
                        </div>                                  
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Empresa</th>
                                <th>Cargo</th>
                                <th>Descrição</th>
                                <th>Salário</th>
                                <th>Like</th>
                                <th>Data</th>
                                <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vagas as $vaga) 
                                <tr>
                                <td>{{$vaga->id}}</td>
                                <td>{{$vaga->name}}</td>
                                <td>{{$vaga->email}}</td>
                                <td>{{$vaga->companyName}}</td>
                                <td>{{$vaga->office}}</td>
                                <td>{{$vaga->description}}</td>
                                <td>{{$vaga->value}}</td>
                                <td>{{$vaga->like}}</td>
                                <td>{{$vaga->created_at}}</td>
                                <td>
                                <div class="btn-group">
                                    <form action="{{ route('destroy', $vaga->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    <form action="{{ route('like',$vaga->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-info">Like</button>
                                    </form>
                                </div>
                                </td>
                                </tr>
                                <tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>                                
                    </div>                                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
