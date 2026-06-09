<a href="" data-bs-toggle="modal" data-bs-target="#showCategory{{$category->id}}">View</a>

<!-- Modal -->
<div class="modal fade" id="showCategory{{ $category->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Catgory: {{ $category->name }}</h1>
    </div>
    <div class="modal-body">
        <p>Description: {{ $category->desc }}</p>
        <p>Movie: 
        @foreach ($category->movies as $movie)
            <span>{{ $movie->name }} | </span>
        @endforeach
        </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
    </div>
</div>
</div>
