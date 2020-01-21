@extends('layouts.app')

@section('title', 'Editar Cargo')

@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header"><i class="fa fa-pencil-square-o"></i> {{ __('Editar Cargo') }}</div>

            <div class="card-body">

                <form action="{{ route('roles.update',['id' => $role->id]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')

                    @csrf

                    <div class="row">
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label for="name">Nome: *</label>
                                <input type="text" name="name" id="name" class="form-control text-capitalize" value="{{ $role->name }}">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Salvar</button>
                    <a href="{{ route('roles') }}" class="btn btn-dark"><i class="fa fa-reply"></i> Voltar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
