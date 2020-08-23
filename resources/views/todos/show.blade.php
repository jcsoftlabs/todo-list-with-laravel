@extends('layouts.app')

@section('content')
<h3 class="text-center my-5"> {{$todo->name}}</h3>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">
                Details
            </div>


            <div class="card-body">
                {{$todo->description}}
            </div>
        </div>
        <a href="/todos/{{$todo->id}}/edit" class="btn btn-info bt-sm my-2">Edit
        </a>
    </div>
</div>
< @endsection