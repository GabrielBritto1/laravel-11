@extends('admin.layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')

<h1>Detalhes do Usuário {{ $user->name }}</h1>

<ul>
    <li>Nome: {{ $user->name }}</li>
    <li>Email: {{ $user->email }}</li>
</ul>
<x-alert />
<form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Excluir</button>
</form>

@endsection