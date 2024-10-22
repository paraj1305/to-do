@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
    <h4 class="text-center">Edit Task</h4>

    <form action="{{ route('tasks.update', $task) }}" method="POST" class="needs-validation" novalidate>
        @csrf
        @method('PUT')

        <!-- Task Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Task Title</label>
            <input type="text" class="form-control list-group-item" name="title" id="title" value="{{ $task->title }}" required>
            <div class="invalid-feedback">
                Please provide a task title.
            </div>
        </div>

        <!-- Task Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Task Description</label>
            <textarea class="form-control list-group-item" name="description" id="description" rows="4">{{ $task->description }}</textarea>
        </div>

        <!-- Schedule Date -->
        <div class="mb-3">
            <label for="scheduled_at" class="form-label">Schedule Date</label>
            <input type="datetime-local" class="form-control list-group-item" name="scheduled_at" id="scheduled_at" value="{{ $task->scheduled_at->format('Y-m-d\TH:i') }}" required>
            <div class="invalid-feedback ">
                Please provide a valid schedule date.
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update Task</button>

        <!-- Cancel Button -->
        <a href="{{ route('tasks.index') }}" class="btn btn-danger">Cancel</a>
    </form>
@endsection
