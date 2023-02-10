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
    <h1>Project</h1>
      <div class="d-flex flex-column align-items-center justify-content-center">
        
        <div class="card col-6 d-flex flex-column align-items-center justify-content-center">
          <h4>{{$project -> name}}</h4>
          <img src="{{$project -> mainImage}}" alt="{{$project -> name}}">
          <p>{{$project -> description}}</p>
          <p>{{$project -> description}}</p>
          <p>{{$project -> description}}</p>
          <a href="{{$project -> repoLink}}">Github Link</a>

        </div>
     
      </div>
</div>
@endsection