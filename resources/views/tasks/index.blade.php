@extends('layouts.app')

@section('content')
    <div style="margin-top: 40px; margin-bottom: 40px;">
        <h1>Task List</h1>
        @foreach ($tasks as $task)
            <div class="card @if ($task->isCompleted()) border-success @endif" style="margin-bottom: 20px;">
                <div class="card-body">
                    <p>
                        <b>Task : </b><span
                            style="background-color:blue; color: white; border-radius:5px; padding: 5px;">{{ $task->description }}</span>
                    </p>

                    <p>
                        <b>Due Date : </b><span
                            style="background-color: red; color: white; border-radius:5px; padding: 5px;">{{ $task->due_date }}</span>
                    </p>

                    <p>
                        <b>Created at : </b><span
                            style="background-color: green; color: white; border-radius:5px; padding: 5px;">{{ $task->created_at }}</span>
                    </p>

                    @if (!$task->isCompleted())
                        <form action="/tasks/{{ $task->id }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <button class="btn btn-light btn-block" input="submit">Complete</button>
                        </form>
                    @else
                        <form action="/tasks/{{ $task->id }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-block" input="submit">Delete</button>
                        </form>
                    @endif

                    {{-- <form action="/tasks/{{ $task->id }}/update" method="POST">
                        @method('PUT')
                        @csrf
                        <button class="btn btn-light btn-block" input="submit">Update</button>
                    </form> --}}
                </div>
            </div>
        @endforeach
        <a href="/tasks/create" class="btn btn-primary btn-lg btn-block">New Task</a>
    </div>
@endsection
