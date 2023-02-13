


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
    <h1>Create a new project</h1>
    <form method="POST" action="{{ route('storeProject') }}" enctype="multipart/form-data">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="description">Description</label>
        <input type="text" name="description">
        <br>
        <label for="mainImage">mainImage</label>
        <input type="file" name="mainImage">
        <br>
        <label for="releaseDate">releaseDate</label>
        <input type="text" name="releaseDate">
        <br>
        <label for="repoLink">repoLink</label>
        <input type="text" name="repoLink">
        <br>
        <input type="submit" value="CREATE NEW PROJECT ">
    </form>
</div>
@endsection