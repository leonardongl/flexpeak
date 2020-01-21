@extends('layouts.app')

@section('title', 'Remover Cargo')

@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header"><i class="fa fa-eraser"></i> {{ __('Remover Cargo') }}</div>

            <div class="card-body">
                <form action="">
                    @csrf

                    <div class="row">
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label for="name">Nome:</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $role->name }}" readonly>
                            </div>
                        </div>
                    </div>

                    <hr/>

                    <div class="row">
                        <div class="col-sm-12">
                            <h5>Deseja realmente remover esse cargo?</h5>
                            <p>Todos os dados desse registros serão perdidos</p>
                        </div>
                    </div>
                    <a href="{{ route('roles.destroy',['id' => $role->id]) }}" class="btn btn-danger"><i class="fa fa-close"></i> Remover</a>
                    <a href="{{ route('roles') }}" class="btn btn-dark"><i class="fa fa-reply"></i> Voltar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
