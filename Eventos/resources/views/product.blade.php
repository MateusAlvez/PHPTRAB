@extends('layouts.main')

@section('title', 'XINGLING Produtos')

@section ('content')

@if ($id != null)
<p>Exibindo produto id: {{$id}}</p>
@endif
@endsection