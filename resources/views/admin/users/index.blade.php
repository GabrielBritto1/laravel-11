@extends('admin.layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')

<h1>Usuarios</h1>

<a href="{{ route('users.create') }}">Novo</a>

@if(session('success'))
<p>{{ session('success') }}</p>
@endif


<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('users.edit', $user->id) }}">Editar</a>
            </td>
            <td>-</td>
        </tr>
        @empty
        <tr>
            <td colspan="3">Nenhum usuário no banco</td>
        </tr>
        @endforelse
    </tbody>
</table>

{{$users->links()}}

@endsection