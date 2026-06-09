<a href="" data-bs-toggle="modal" data-bs-target="#deleteMovie{{$movie->id}}">Delete</a>

<!-- Modal -->
<div class="modal fade" id="deleteMovie{{ $movie->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
    <form action="{{ route('movie.delete', $movie->id) }}" method="POST">
        @csrf
        @method('DELETE');
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete: {{ $movie->name }}</h1>
            </div>
            <div class="modal-body">
                Are u sure?
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </form>
</div>
</div>
