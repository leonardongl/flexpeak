@extends('layouts.app')

@section('title', 'Editar Empresa')

@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header"><i class="fa fa-pencil-square-o"></i> {{ __('Editar Empresa') }}</div>

            <div class="card-body">

                <form action="{{ route('companies.update',['id' => $company->id]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')

                    @csrf

                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label for="name">Nome Fantasia: *</label>
                                <input type="text" name="name" id="name" class="form-control text-capitalize" value="{{ $company->name }}" required>
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="cnpj">CNPJ: *</label>
                                <input type="text" name="cnpj" id="cnpj" class="form-control cnpj" value="{{ $company->cnpj }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="corporate_name">Razão Social: *</label>
                                <input type="text" name="corporate_name" id="corporate_name" value="{{ $company->corporate_name }}" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="street">Logadouro:</label>
                                <input type="text" name="street" id="street" value="{{ $company->street }}" class="form-control text-capitalize">
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="number">Número:</label>
                                <input type="text" name="number" id="number" value="{{ $company->number }}" class="form-control" maxlength="10">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="district">Bairro:</label>
                                <input type="text" name="district" id="district" value="{{ $company->district }}" class="form-control text-capitalize">
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="city">Cidade:</label>
                                <input type="text" name="city" id="city" value="{{ $company->city }}" class="form-control text-capitalize">
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="uf">UF:</label>
                                <input type="text" name="uf" id="uf" value="{{ $company->uf }}" class="form-control text-uppercase" maxlength="2">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Salvar</button>
                    <a href="{{ route('companies') }}" class="btn btn-dark"><i class="fa fa-reply"></i> Voltar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
