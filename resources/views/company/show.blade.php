@extends('layouts.app')

@section('title', 'Ver Empresa')

@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header"><i class="fa fa-eye"></i> {{ __('Ver Empresa') }}</div>

            <div class="card-body">
                <form action="">
                    @csrf

                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label for="name">Nome Fantasia: *</label>
                                <input type="text" name="name" id="name" class="form-control text-capitalize" value="{{ $company->name }}" required readonly>
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="cnpj">CNPJ: *</label>
                                <input type="text" name="cnpj" id="cnpj" class="form-control cnpj" value="{{ $company->cnpj }}" required readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="corporate_name">Razão Social: *</label>
                                <input type="text" name="corporate_name" id="corporate_name" value="{{ $company->corporate_name }}" class="form-control" required readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="street">Logadouro:</label>
                                <input type="text" name="street" id="street" value="{{ $company->street }}" class="form-control text-capitalize" readonly>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="number">Número:</label>
                                <input type="text" name="number" id="number" value="{{ $company->number }}" class="form-control" maxlength="10" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="district">Bairro:</label>
                                <input type="text" name="district" id="district" value="{{ $company->district }}" class="form-control text-capitalize" readonly>
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="city">Cidade:</label>
                                <input type="text" name="city" id="city" value="{{ $company->city }}" class="form-control text-capitalize" readonly>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="uf">UF:</label>
                                <input type="text" name="uf" id="uf" value="{{ $company->uf }}" class="form-control text-uppercase" maxlength="2" readonly>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('companies') }}" class="btn btn-dark"><i class="fa fa-reply"></i> Voltar</a>
                </form>
            </div>
        </div>

        <div class="card my-3">
            <div class="card-header"><i class="fa fa-group"></i> {{ __('Contatos da Empresa') }}</div>

            <div class="card-body">
                @if (1 == 0)
                    <div class="card-body">
                        <p>Você ainda não tem nenhum contato!</p>
                        <a href="{{ route('contacts.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Novo Contato</a>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table" style="min-width: 900px">
                            <thead class="bg-white">
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th class="text-center">CPF</th>
                                <th class="text-center">Cargo</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td class="text-center">{{ $contact->cpf }}</td>
                                    <td class="text-center">
                                        @if($contact->role_id == 0)
                                            -
                                        @endif

                                        @foreach($roles as $role)
                                            @if($role->id == $contact->role_id)
                                                {{ $role->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
