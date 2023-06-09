@extends('base')
@section('titre')
    {{$titre}}
@endsection

@section('main')
<ul>
    <li>Nom & Prenom : {{$user->nm.' '.$user->np}} </li>
    <li>Niveau : {{$user->abclearn->niveau}}</li>
</ul>
<hr>

@endsection
