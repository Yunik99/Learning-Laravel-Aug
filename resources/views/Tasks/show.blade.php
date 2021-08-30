@extends('layout.master')

@section('title')
    Task | {{ $task->name }}
@endsection

@section('content')
    <div class=".container-fluid text-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"> {{ $task->name }}</h5>
                <div class="row">
                    <div class="col">
                        {{ $task->start_date }}
                    </div>
                    <div class="col">
                        {{ $task->due_date }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
