@extends('layouts.app')

@section('title', 'Empresas')

@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header"><i class="fa fa-building"></i> {{ __('Empresas') }}</div>

            @if ($numberCompanies == 0)
                <div class="card-body">
                    <p>Você ainda não tem nenhuma empresa cadastrada!</p>
                    <a href="{{ route('companies.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova Empresa</a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table" style="min-width: 1100px">
                        <thead class="bg-white">
                        <tr>
                            <th>Nome Fantasia</th>
                            <th>Razão Social</th>
                            <th class="text-center">Cidade</th>
                            <th class="text-center">Ações</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->corporate_name }}</td>
                                <td class="text-center">{{ $company->city }}-{{ $company->uf }}</td>
                                <td class="text-center">
                                    <a href="{{ url('empresas/abrir/'.$company->id) }}" class="btn btn-primary" style="padding: 2px 5px"><i class="fa fa-eye"></i> Ver</a>
                                    <a href="{{ url('empresas/editar/'.$company->id) }}" class="btn btn-success" style="padding: 2px 5px"><i class="fa fa-pencil-square-o"></i> Editar</a>
                                    <a href="{{ url('empresas/remover/'.$company->id) }}" class="btn btn-danger" style="padding: 2px 5px"><i class="fa fa-eraser"></i> Remover</a>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="5">
                                <a href="{{ route('companies.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Nova Empresa</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            @endif

        </div>
    </div>
@endsection
