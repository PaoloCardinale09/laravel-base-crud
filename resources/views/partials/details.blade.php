
    <div class="card" style="width: 18rem;">
      <img  src="{{ $song->poster }}" class="card-img-top" alt="poster">
      <div class="card-body">
        <h5 class="card-title text-center text-uppercase">{{ $song->title }}</h5>
        <p class="card-text text-center text-uppercase"> <strong>Album: </strong>{{ $song->album }}</p>
        <p class="card-text text-center"><strong>Autore: </strong>{{ $song->author }}</p>
        <p class="card-text text-center"><strong>Editore: </strong>{{ $song->editor }}</p>
        <p class="card-text text-center"><strong>Lunghezza: </strong>{{ $song->length }}</p>
        <div class="text-center"> 
          <a href="{{ route('songs.index') }}" class="btn btn-primary ">Torna indietro </a>
        </div>
      </div>
    </div>

  