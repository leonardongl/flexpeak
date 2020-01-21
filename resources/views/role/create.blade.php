@extends('layouts.app')

@section('title', 'Novo Cargo')

@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header"><i class="fa fa-plus"></i> {{ __('Novo Cargo') }}</div>

            <div class="card-body">

                <form action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label for="name">Nome: *</label>
                                <input type="text" name="name" id="name" class="form-control text-capitalize" required>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Adicionar</button>
                    <a href="{{ route('roles') }}" class="btn btn-dark"><i class="fa fa-reply"></i> Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
