@extends('layouts.app')

@section('title', 'Cargos')

@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header"><i class="fa fa-id-badge"></i> {{ __('Cargos') }}</div>

            @if ($numberRoles == 0)
                <div class="card-body">
                    <p>Você ainda não tem nenhum cargo cadastrado!</p>
                    <a href="{{ route('roles.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Novo Cargo</a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table" style="min-width: 1100px">
                        <thead class="bg-white">
                        <tr>
                            <th>Nome</th>
                            <th class="text-center">Ações</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td class="text-center">
                                    <a href="{{ url('cargos/editar/'.$role->id) }}" class="btn btn-success" style="padding: 2px 5px"><i class="fa fa-pencil-square-o"></i> Editar</a>
                                    <a href="{{ url('cargos/remover/'.$role->id) }}" class="btn btn-danger" style="padding: 2px 5px"><i class="fa fa-eraser"></i> Remover</a>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="5">
                                <a href="{{ route('roles.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Novo Cargo</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            @endif

        </div>
    </div>
@endsection
