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

@section('modal')

    @foreach ($songs as $song)
        <!-- Modal -->
        <div class="modal fade" id="delete-modal-{{ $song->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma di cancellazione</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Sei sicuro di voler eliminare il brano selezionato? <br> L'operazione non è reversibile
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="{{ route('songs.destroy', $song) }}" method="POST">
                    @csrf
                    @method('delete')

                    <button type="submit" class="btn btn-primary">Elimina</button>
                </form> 
                </div>
            </div>
            </div>
        </div>
    @endforeach
@endsection

