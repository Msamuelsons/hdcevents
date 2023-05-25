@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
<img src="/img/banner.jpg" alt="banner">
<h1>Algum título</h1>
@if(10 > 5)
<p>A condição e true</p>
@endif
@if ($meu_nome === "Samuel")
    <h1>Meu nome é: {{ $meu_nome }}: true</h1>

@elseif ($meu_nome === "Marcos")
    <h1>Seu nome é {{ $meu_nome }}: true</h1>
@else
    <h1>Seu nome não é nem Marcos ou Samuel é {{ $meu_nome }}</h1>
@endif

<p>Sua profissão: {{ $profissao }}</p>
<p>Sua idade: {{ $idade }} anos</p>

@for ($i = 0; $i < count($lista); $i++)
    <p>{{ $lista[$i] }} - {{$i}}</p>
@endfor

@php
    $nome = "Marcos Samuel";

    echo $nome;
@endphp

<!--Olá, mundo-->
{{--  Olá, mundo  --}}


@foreach($alfabeto as $alphabet)
    <p>{{ $alphabet }}</p>
    <p>{{ $loop->index }}</p> <!-- pega o índice dos elementos -->
@endforeach


@endsection
