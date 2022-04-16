@extends('layouts.app')

@section('title', 'Editar o Usuário')
    

@section('content')
    <h1>Editar o Usuário {{ $user->name }}</h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $erro)
                <li class="error">{{ $erro }}</li>
                
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="post">
        {{-- {{ csrf_token() }} --}}
        @csrf
        @method('PUT')
        {{-- <input type="hidden" name="_method" value="PUT"> --}}
        <input type="text" name="name" placeholder="Nome:" value="{{ $user->name }}"> 
        <input type="email" name="email" placeholder="E-mail:" value="{{ $user->email }}"> 
        <input type="password" name="password" placeholder="Password:"> 

        <button type="submit">
            Enviar
        </button>
    </form>

@endsection