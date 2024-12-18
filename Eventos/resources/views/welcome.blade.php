@extends('layouts.main')

@section('title', 'XINGLING Eventos')

@section ('content')
    <h1>XINGLING</h1>
      <img src="/img/evento_1.jpg" alt="Eventos">

        @if(10>5)
        <p>  a condição é true </p>
        @endif
        <p>{{$nome}}</p>
        elseif ($nome == "Mateus")
        <p>Nome é {{$nome}} e ele tem {{$idade}} anos.</p>
        @if ($nome == "Pedro")
        <p> O nome é pedro</p>
        @else
        <p> o nome não é pedro</p>
        @endif
        
        @for($i = 0; $i < count ($arr); $i++)
        
            <p>{{$arr[$i]}} - {{$i}}</p>
            @if ($i == 2)
            <p>O i é 2 </p>
            @endif
        @endfor

        @foreach($nomes as $nome)
            <p>{{$loop -> index}}</p>
           <p> {{$nome}} </p>
        @endforeach

        @php
             $name= "joão";
             echo $name;
        @endphp
@endsection