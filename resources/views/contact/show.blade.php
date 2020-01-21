@extends('layouts.app')

@section('title', 'Ver Contato')

@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header"><i class="fa fa-eye"></i> {{ __('Ver Contato') }}</div>

            <div class="card-body">
                <form action="">
                    @csrf

                    <div class="row">

                        @if(!empty($contact->photo))
                            <div class="col-sm-3">
                                <img src="{{ env('APP_URL') }}storage/{{ $contact->photo }}" class="img-thumbnail" style="width: 100%">
                            </div>
                        @else
                            <div class="col-sm-3">
                                <img src="{{ env('APP_URL') }}storage/images/padrao.jpg" class="img-thumbnail" style="width: 100%">
                            </div>
                        @endif

                        <div class="col-sm-9">
                            <div class="form-group">
                                <label for="name">Nome:</label>
                                <input type="text" name="name" id="name" class="form-control text-capitalize" value="{{ $contact->name }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $contact->email }}" readonly>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="cpf">CPF:</label>
                                        <input type="text" name="cpf" id="cpf" class="form-control" value="{{ $contact->cpf }}" readonly>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Telefone:</label>
                                        <input type="text" name="phone" id="phone" class="form-control" value="{{ $contact->phone }}" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <label for="company_id">Empresa:</label>
                                        @if($contact->company_id == 0)
                                            <input type="text" name="company_id" id="company_id" class="form-control" value="" readonly>
                                        @endif

                                        @foreach($companies as $company)
                                            @if($company->id == $contact->company_id)
                                                <input type="text" name="company_id" id="company_id" class="form-control" value="{{ $company->name }}" readonly>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="role_id">Cargo:</label>
                                        @if($contact->role_id == 0)
                                            <input type="text" name="company_id" id="company_id" class="form-control" value="" readonly>
                                        @endif

                                        @foreach($roles as $role)
                                            @if($role->id == $contact->role_id)
                                                <input type="text" name="role_id" id="role_id" class="form-control" value="{{ $role->name }}" readonly>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label for="street">Logadouro:</label>
                                        <input type="text" name="street" id="street" class="form-control text-capitalize" value="{{ $contact->street }}" readonly>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="number">Número:</label>
                                        <input type="text" name="number" id="number" class="form-control" maxlength="10" value="{{ $contact->number }}" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="district">Bairro:</label>
                                        <input type="text" name="district" id="district" class="form-control text-capitalize" value="{{ $contact->district }}" readonly>
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="city">Cidade:</label>
                                        <input type="text" name="city" id="city" class="form-control text-capitalize" value="{{ $contact->city }}" readonly>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="uf">UF:</label>
                                        <input type="text" name="uf" id="uf" class="form-control text-uppercase" maxlength="2" value="{{ $contact->uf }}" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="mailto:{{ $contact->email }}" class="btn btn-primary"><i class="fa fa-envelope"></i> Enviar e-mail</a>
                                    <a href="tel:{{ $contact->phone }}" class="btn btn-success"><i class="fa fa-phone"></i> Ligar</a>
                                    <a href="{{ route('contacts') }}" class="btn btn-dark"><i class="fa fa-reply"></i> Voltar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
