@extends('layouts.main')

@section('title', 'Produto')
@section('header')
@section('content')

@if ($calca != "")
<p>Exibindo produto id:{{ $calca }}</p>
@endif

@endsection
