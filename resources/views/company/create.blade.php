@extends('layouts.app')

@section('title', 'Nova Empresa')

@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header"><i class="fa fa-plus"></i> {{ __('Nova Empresa') }}</div>

            <div class="card-body">

                <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label for="name">Nome Fantasia: *</label>
                                <input type="text" name="name" id="name" class="form-control text-capitalize" required>
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="cnpj">CNPJ: *</label>
                                <input type="text" name="cnpj" id="cnpj" class="form-control cnpj" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="corporate_name">Razão Social: *</label>
                                <input type="text" name="corporate_name" id="corporate_name" class="form-control" required>
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
                    <a href="{{ route('companies') }}" class="btn btn-dark"><i class="fa fa-reply"></i> Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
