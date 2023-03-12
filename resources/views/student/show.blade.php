@extends('../layouts/app')
@section('title', 'Student')
@section('content')

<div class="container">
<div class="card">
<div class="card-body">
<h2>{{ $student->name }}</h2>

<p>Date of birth : {{ $student->DOB }}</p>
<p>Email : {{ $student->email }}</p>
<p>Phone : {{ $student->phone }}</p>
<p>Address : {{ $student->address }}</p>


<!-- button -->
<button type="button" class="btn btn-primary"><a href="{{ route('student.edit', $student->id) }}">Edit</a></button>
<button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>

<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Deleting student</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Are you sure you want to delete this student ?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <form id="delete-frm" class="" action="" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection