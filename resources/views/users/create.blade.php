@extends('layouts.app')

@section('title', 'Novo Usuário')
    

@section('content')
    <h1>Novo Usuário</h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $erro)
                <li class="error">{{ $erro }}</li>
                
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.store') }}" method="post">
        {{-- {{ csrf_token() }} --}}
        @csrf
        <input type="text" name="name" placeholder="Nome:" value="{{ old('name')}}"> 
        <input type="email" name="email" placeholder="E-mail:" value="{{ old('email')}}"> 
        <input type="password" name="password" placeholder="Password:"> 

        <button type="submit">
            Enviar
        </button>
    </form>

@endsection