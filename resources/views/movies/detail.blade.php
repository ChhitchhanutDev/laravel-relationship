<a href="" data-bs-toggle="modal" data-bs-target="#showMovie{{$movie->id}}">View</a>

<!-- Modal -->
<div class="modal fade" id="showMovie{{ $movie->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Title: {{ $movie->name }}</h1>
    </div>
    <div class="modal-body">
        <p>Date: {{ $movie->date }}</p>
        <p>Description: {{ $movie->desc }}</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
    </div>
</div>
</div>
