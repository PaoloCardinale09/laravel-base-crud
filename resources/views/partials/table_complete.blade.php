<table class="table table-success table-striped">
    <thead>
        <tr>
          <th scope="col">title</th>
          <th scope="col">album</th>
          <th scope="col">author</th>
          <th scope="col">editor</th>
          <th scope="col">length</th>
          <th scope="col">poster</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($songs as $song)
        <tr>
            <td>{{ $song->title}}</td>
            <td>{{ $song->album}}</td>
            <td>{{ $song->author}}</td>
            <td>{{ $song->editor}}</td>
            <td>{{ $song->length}}</td>
            <td>{{ $song->poster}}</td>
            <td><a href="{{ route('songs.show', $song) }}">dettaglio</a></td>
        </tr>
        @endforeach
      </tbody>
  </table>