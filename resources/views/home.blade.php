@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class="fa fa-dashboard"></i> Dashboard</div>

                <div class="card-body text-black-50">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($numberContacts == 0)
                        <i class="fa fa-group"></i> Você não tem nenhum contato!
                    @else
                        <i class="fa fa-group"></i> Você tem {{ $numberContacts }} contatos salvos!
                    @endif

                    <hr/>

                    @if ($numberCompanies == 0)
                        <i class="fa fa-building"></i> Você não tem nenhuma empresa cadastrada!
                    @else
                        <i class="fa fa-building"></i> Você tem {{ $numberCompanies }} empresas cadastradas!
                    @endif

                    <hr/>

                    @if ($numberRoles == 0)
                        <i class="fa fa-id-badge"></i> Você não tem nenhum contato!
                    @else
                        <i class="fa fa-id-badge"></i> Você tem {{ $numberRoles }} cargos cadastrados!
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
