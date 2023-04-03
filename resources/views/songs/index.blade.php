@extends('layouts.app')

@section('page_name', 'index')


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

@endsection

@section('footer')
    footer
@endsection