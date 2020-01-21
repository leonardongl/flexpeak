@extends('layouts.app')

@section('title', 'Remover Empresa')

@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header"><i class="fa fa-eraser"></i> {{ __('Remover Empresa') }}</div>

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

                    <hr/>

                    <div class="row">
                        <div class="col-sm-12">
                            <h5>Deseja realmente remover essa empresa?</h5>
                            <p>Todos os dados desse registros serão perdidos</p>
                        </div>
                    </div>
                    <a href="{{ route('companies.destroy',['id' => $company->id]) }}" class="btn btn-danger"><i class="fa fa-close"></i> Remover</a>
                    <a href="{{ route('companies') }}" class="btn btn-dark"><i class="fa fa-reply"></i> Voltar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
