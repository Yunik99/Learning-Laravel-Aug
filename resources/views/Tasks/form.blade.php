@extends('layout.master')


@section('content')
    <div class=".container">
        <h1 class="text-center">Enter Detail For New Task</h1>
        <br>
        <form method="post" action="@yield('form-action')">
            @csrf
            <div class="form-group">
                <label for="taskName">Task Name</label>
                <input type="text" id="taskName" name="name">
            </div>
            <div class="form-group">
                <label for="startDate">Start Date</label>
                <input type="datetime-local" id="startDate" name="start_date">
            </div>

            <div class="form-group">
                <label for="dueDate">Due Date</label>
                <input type="datetime-local" id="dueDate" name="due_date">
            </div>

            <button type="submit" class="btn btn-primary">@yield('submit-btn-name')</button>
        </form>
    </div>

@endsection

