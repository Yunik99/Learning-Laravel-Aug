@extends('layout.master')

@section('title')
    Tasks
@endsection

@section('content')
    <div class=".container-fluid">
            <h1 class="text-center">Tasks</h1>
        <br>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Task Id</th>
                <th scope="col">Task</th>
                <th scope="col">Status</th>
                <th scope="col">Start Date</th>
                <th scope="col">Due Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
            <tr>
                <th scope="row">{{$task->id}}</th>
                <td><a href="/task/{{$task->id}}">{{ $task->name }}</a></td>
                <td>0</td>
                <td>{{ $task->start_date}}</td>
                <td>{{ $task->due_date }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="text-center">
            <a  href="/task/create" class="btn btn-primary"> Create a new task</a>
        </div>

    </div>

@endsection
