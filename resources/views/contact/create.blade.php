@extends('layouts.app')

@section('title', 'Novo Contato')

@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header"><i class="fa fa-plus"></i> {{ __('Novo Contato') }}</div>

            <div class="card-body">

                @if(isset($error) && $error=='photo')
                    <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Erro!</strong> Extensão de arquivo inválida.
                    </div>
                @endif

                <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-sm-12">
                            <label for="customFile">Foto:</label>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="photo">
                                <label class="custom-file-label" for="customFile">Escolher foto</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label for="name">Nome: *</label>
                                <input type="text" name="name" id="name" class="form-control text-capitalize" required>
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="email">E-mail: *</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cpf">CPF: *</label>
                                <input type="text" name="cpf" id="cpf" class="form-control cpf" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone">Telefone: *</label>
                                <input type="text" name="phone" id="phone" class="form-control phone_with_ddd" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label for="company_id">Empresa:</label>
                                <select name="company_id" id="company_id" class="custom-select mb-3">
                                    <option selected></option>
                                    @foreach($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="role_id">Cargo:</label>
                                <select name="role_id" id="role_id" class="custom-select mb-3">
                                    <option selected></option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="street">Logadouro:</label>
                                <input type="text" name="street" id="street" class="form-control text-capitalize">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="number">Número:</label>
                                <input type="text" name="number" id="number" class="form-control" maxlength="10">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="district">Bairro:</label>
                                <input type="text" name="district" id="district" class="form-control text-capitalize">
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="city">Cidade:</label>
                                <input type="text" name="city" id="city" class="form-control text-capitalize">
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="uf">UF:</label>
                                <input type="text" name="uf" id="uf" class="form-control text-uppercase" maxlength="2">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Adicionar</button>
                    <a href="{{ route('contacts') }}" class="btn btn-dark"><i class="fa fa-reply"></i> Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
