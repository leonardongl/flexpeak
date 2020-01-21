@extends('layouts.app')

@section('title', 'Editar Contato')

@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header"><i class="fa fa-pencil-square-o"></i> {{ __('Editar Contato') }}</div>

            <div class="card-body">

                @if(isset($error) && $error=='photo')
                    <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Erro!</strong> Extensão de arquivo inválida.
                    </div>
                @endif

                <form action="{{ route('contacts.update',['id' => $contact->id]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')

                    @csrf

                    <div class="row">
                        <div class="col-sm-12">
                            <label for="customFile">Trocar Foto:</label>
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
                                <input type="text" name="name" id="name" class="form-control text-capitalize" value="{{ $contact->name }}">
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="email">E-mail: *</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $contact->email }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cpf">CPF: *</label>
                                <input type="text" name="cpf" id="cpf" class="form-control cpf" value="{{ $contact->cpf }}">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone">Telefone: *</label>
                                <input type="text" name="phone" id="phone" class="form-control phone_with_ddd" value="{{ $contact->phone }}">
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
                                        @if($company->id == $contact->company_id)
                                            <option selected value="{{ $company->id }}">{{ $company->name }}</option>
                                        @else
                                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                                        @endif
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
                                        @if($role->id == $contact->role_id)
                                            <option selected value="{{ $role->id }}">{{ $role->name }}</option>
                                        @else
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="street">Logadouro:</label>
                                <input type="text" name="street" id="street" class="form-control text-capitalize" value="{{ $contact->street }}">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="number">Número:</label>
                                <input type="text" name="number" id="number" class="form-control" maxlength="10" value="{{ $contact->number }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="district">Bairro:</label>
                                <input type="text" name="district" id="district" class="form-control text-capitalize" value="{{ $contact->district }}">
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="city">Cidade:</label>
                                <input type="text" name="city" id="city" class="form-control text-capitalize" value="{{ $contact->city }}">
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="uf">UF:</label>
                                <input type="text" name="uf" id="uf" class="form-control text-uppercase" maxlength="2" value="{{ $contact->uf }}">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Salvar</button>
                    <a href="{{ route('contacts') }}" class="btn btn-dark"><i class="fa fa-reply"></i> Voltar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
