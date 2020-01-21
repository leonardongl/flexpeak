@extends('layouts.app')

@section('title', 'Contatos')

@section('content')
    <div class="container my-3">
        <div class="card">
            <div class="card-header"><i class="fa fa-group"></i> {{ __('Contatos') }}</div>

            @if ($numberContacts == 0)
                <div class="card-body">
                    <p>Você ainda não tem nenhum contato!</p>
                    <a href="{{ route('contacts.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Novo Contato</a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table" style="min-width: 1100px">
                        <thead class="bg-white">
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th class="text-center">Telefone</th>
                            <th class="text-center">CPF</th>
                            <th class="text-center">Ações</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td class="text-center">{{ $contact->phone }}</td>
                                <td class="text-center">{{ $contact->cpf }}</td>
                                <td class="text-center">
                                    <a href="{{ url('contatos/abrir/'.$contact->id) }}" class="btn btn-primary" style="padding: 2px 5px"><i class="fa fa-eye"></i> Ver</a>
                                    <a href="{{ url('contatos/editar/'.$contact->id) }}" class="btn btn-success" style="padding: 2px 5px"><i class="fa fa-pencil-square-o"></i> Editar</a>
                                    <a href="{{ url('contatos/remover/'.$contact->id) }}" class="btn btn-danger" style="padding: 2px 5px"><i class="fa fa-eraser"></i> Remover</a>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="5">
                                <a href="{{ route('contacts.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Novo Contato</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            @endif

        </div>
    </div>
@endsection
