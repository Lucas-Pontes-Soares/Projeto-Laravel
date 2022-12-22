@extends('layout.base')

@section('titulo', 'Cadastro de usuario')

@section('conteudo')
    <form action={{route('salvar')}} method="post">
        {{ csrf_field() }}

        <input type="text" name="nome" placeholder="Digite seu nome">
        @if($errors->has('nome'))
            @foreach($errors->get("nome") as $erro)
                <strong class="erro">{{ $erro}}</strong>
            @endforeach
        @endif

        <input type="email" name="email" placeholder="Digite seu email">
        @if($errors->has('email'))
            @foreach($errors->get("email") as $erro)
                <strong class="erro">{{ $erro}}</strong>
            @endforeach
        @endif

        <input type="password" name="senha" placeholder="Digite sua senha">
        @if($errors->has('senha'))
            @foreach($errors->get("senha") as $erro)
                <strong class="erro">{{ $erro}}</strong>
            @endforeach
        @endif

        <button type="submit">Enviar</button>
    </form> 
@endsection