@extends('layouts.app')

@section('page_name', 'homepage')
    
@section('main_content')
<div class="text-center">
    <h1>Benvenuto sulla nostro super fantastico sito </h1>
    <h2 class="p-5 "><a href="{{ route('songs.index') }}">Clicca per vedere la lista delle canzoni</a></h2>@endsection
</div>