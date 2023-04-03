@extends('layouts.app')

@section('page_name', 'index')


@section('cdn')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
@endsection


@section('main_content')
<div class="row py-3">
    <form class="col-6 d-flex">
        <input type="text" class="form-control" name="term" placeholder="Search">
        <button class="btn btn-success ms-3" type="submit">Search</button>
    </form>
    <div class="col-6 d-flex">
        <a class="ms-auto" href=" {{ route('songs.create') }} ">
            <button class="btn btn-primary " type="submit">Inserisci nuova canzone</button>
        </a>
    </div>
</div>

    @include('partials.table_song')

    {{ $songs->links('pagination::bootstrap-5') }}
@endsection

