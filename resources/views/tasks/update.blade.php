@extends('layouts.app')

@section('content')
    <h1>Update Task</h1>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/tasks">
        @csrf
        <div class="form-group">
            <label for="description">Task Description</label>
            <input class="form-control" name="update_description" />
        </div>
        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" class="form-control" name="update_due_date" />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Task</button>
        </div>
    </form>
@endsection
