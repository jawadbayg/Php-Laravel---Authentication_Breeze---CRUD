@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">{{ $task->title }}</div>

            <div class="card-body">
                <p>{{ $task->description }}</p>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit</a>

                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
