<table class="table table-success table-striped">
    <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Titolo</th>
          <th scope="col">Album</th>
          <th scope="col">Autore</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($songs as $song)
        <tr>
          <th scope="row"> {{ $song->id }} </th>
            <td>{{ $song->title}}</td>
            <td>{{ $song->album}}</td>
            <td>{{ $song->author}}</td>
            <td><a href="{{ route('songs.show', $song) }}"><i class="bi bi-info-circle"></i></a></td>
        </tr>
        @endforeach
      </tbody>
  </table>