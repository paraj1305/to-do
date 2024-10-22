@extends('layouts.app')

@section('title', 'Task Scheduler')

@section('content')

<h4 class="text-center"><i class="fas fa-tasks"></i> Task Scheduler</h4>

<div class="d-flex justify-content-end mb-3">
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Add New Task
    </a>
</div>


    <ul class="list-group">
        @foreach($tasks as $task)
            <li class="list-group-item my-2">
                <div class="row align-items-center">
                    <!-- Title and Scheduled at -->
                    <div class="col-md-8 d-flex flex-column">
                        <div class="row">
                            <div class="col-10 d-flex align-items-center">
                                <i class="fas fa-tasks mx-2"></i>
                                <span class="mx-3 font-weight-bold text-truncate">{{ $task->title }}</span>
                            </div>
                            <div class="col-2 text-right">
                                <small class="text-warning">{{ $task->scheduled_at }}</small>
                            </div>
                        </div>
                        <!-- Description -->
                        <div class="mx-5 mt-1">
                            <span class="text-wrap">{{ $task->description }}</span>
                        </div>
                    </div>

                    <!-- Action buttons -->
                    <div class="col-md-4 text-right">
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-warning mx-2">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                            @if (!$task->completed)
                                <form action="{{ route('tasks.complete', $task) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-sm btn-info mx-2">
                                        <i class="fas fa-check-circle"></i>
                                    </button>
                                </form>
                            @else
                                <span class="btn btn-sm btn-success mx-2">
                                    <i class="fas fa-thumbs-up"></i>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>


@endsection
