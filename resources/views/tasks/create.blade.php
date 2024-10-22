@extends('layouts.app')

@section('title', 'Add New Task')

@section('content')
    <h4 class="text-center">Add New Task</h4>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Task Title</label>
            <input type="text" class="form-control list-group-item" name="title" id="title" required>
        </div>

        <div class="form-group">
            <label for="description">Task Description</label>
            <textarea class="form-control body.dark-mode list-group-item" name="description" id="description" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="scheduled_at">Schedule Date</label>
            <input type="datetime-local" class="form-control body.dark-mode list-group-item" name="scheduled_at" id="scheduled_at" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Task</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-danger body.dark-mode">Cancel</a>
    </form>
@endsection
