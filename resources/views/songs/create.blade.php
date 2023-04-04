@extends('layouts.app')

@section('page_name', 'Nuova canzone')
    
@section('main_content')
<h2 class="py-5 text-center">Modulo di inserimento nuova canzone</h2>

 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action=" {{ route('songs.store') }} " method="POST" class="row">
    @csrf
    
    <div class="mb-3 col-4">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control @error ('title') is-invalid @enderror" id="title " name="title" placeholder="Nome della canzone" value="{{ old('title' )}}">
        @error('title')
        <div class="invalid-feedback">
          {{ $message}}
        </div>

        @enderror
      </div> 

      <div class="mb-3 col-4">
        <label for="album" class="form-label">Album</label>
        <input type="text" class="form-control @error ('album') is-invalid @enderror" id="album" name="album" placeholder="Nome album" value="{{ old('album') }}">
        @error('album')
        <div class="invalid-feedback">
          {{ $message}}
        </div>

        @enderror
      </div>

      <div class="mb-3 col-4">
        <label for="author" class="form-label">Autore</label>
        <input type="text" class="form-control @error ('author') is-invalid @enderror" id="author" name="author" placeholder="Nome autore"  value="{{ old('author') }}">
        @error('author')
        <div class="invalid-feedback">
          {{ $message}}
        </div>

        @enderror
      </div>

      <div class="mb-3 col-4">
        <label for="editor" class="form-label">Editore</label>
        <input type="text" class="form-control @error ('editor') is-invalid @enderror" id="editor" name="editor" placeholder="Editore" value="{{ old('editor') }}">
        @error('editor')
        <div class="invalid-feedback">
          {{ $message}}
        </div>

        @enderror
      </div>

      <div class="mb-3 col-4">
        <label for="length" class="form-label">Durata</label>
        <input type="text" class="form-control @error ('length') is-invalid @enderror" id="length" name="length" placeholder="durata (hh:mm:ss)" value="{{ old('length') }}">
        @error('length')
        <div class="invalid-feedback">
          {{ $message}}
        </div>

        @enderror
      </div>


      <div class="mb-3 col-4">
        <label for="poster" class="form-label">Immagine (url)</label>
        <input type="text" class="form-control @error ('poster') is-invalid @enderror" id="poster" name="poster" placeholder="url immagine" value="https://picsum.photos/300"  value="{{ old('poster') }}">
      </div>
      <div class="col-12 d-flex">
          <button type="submit" class="btn btn-success ms-auto">Salva</button>
        </div>
        @error('poster')
        <div class="invalid-feedback">
          {{ $message}}
        </div>

        @enderror
</form>

{{-- title
album
author
editor
length
poster --}}
    
@endsection