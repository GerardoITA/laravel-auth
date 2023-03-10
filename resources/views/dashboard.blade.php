@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <h1>Projects</h1>
    <h6><a href="/dashboard/create">Create a project</a></h6>
      <div class="d-flex flex-column align-items-center justify-content-center">
        @foreach ($projects as $project)
          <div class="card col-6 d-flex flex-column align-items-center justify-content-center">
            <h4>{{$project -> name}}</h4>
            <img src="{{asset('storage/' . $project -> mainImage)}}" alt="{{$project -> name}}">
            <p>{{$project -> description}}</p>
            <a href="{{$project -> repoLink}}">Github Link</a>
            <div class="d-flex gap-1">
                <a href="/project/show/{{$project -> id}}">Show</a>
                <a href="">Edit</a>
                <a href="/project/delete/{{$project -> id}}">Delete</a>
            </div>
          </div>
        @endforeach
      </div>
</div>
@endsection
