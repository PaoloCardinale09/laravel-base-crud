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
            <td class="d-flex justify-content-evenly">
              <a href="{{ route('songs.show', $song) }}">
                <i class="bi bi-info-circle"></i></a>
              <a href="{{ route('songs.edit', $song) }}">
                <i class="bi bi-pencil"></i></a>

                <button class="btn-icon bi bi-trash text-primary" data-bs-toggle="modal" data-bs-target="#delete-modal-{{ $song->id }}"></button>

                

{{-- 
              <form action="{{ route('songs.destroy', $song) }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn-icon bi bi-trash text-primary"></button>
              </form> --}}
              
            </td>
        </tr>
        @endforeach
      </tbody>
  </table>


