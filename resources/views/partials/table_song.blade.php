<table class="table table-success table-striped">
    <thead>
        <tr>
          <th scope="col">Titolo</th>
          <th scope="col">Album</th>
          <th scope="col">Autore</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($songs as $song)
        <tr>
            <td>{{ $song->title}}</td>
            <td>{{ $song->album}}</td>
            <td>{{ $song->author}}</td>
            <td><a href="{{ route('songs.show', $song) }}">dettaglio</a></td>
        </tr>
        @endforeach
      </tbody>
  </table>