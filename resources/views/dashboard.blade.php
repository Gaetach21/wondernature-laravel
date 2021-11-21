@extends('layouts.app',['title'=>'Tableau de bord'])
@section('content')

<div class="text-center text-2xl text-green-700 py-4">Vous etes connecté <div>{{ Auth::user()->name }}</div></div>




@endsection
