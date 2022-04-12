@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-header">{{ __('Create Task') }}</div>

                <div class="card-body">
                    @include('tasks._create_form')
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">{{ __('Todo List') }}</div>

                <div class="card-body">
                    @include('tasks._todo_list')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
