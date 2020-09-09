@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Edit Profile<h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Post title</label>

                    <input id="title" type="text" name="title" class="form-control @error('title') is-invalid @enderror" title="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Post description</label>

                    <input id="description" type="text" name="description" class="form-control @error('description') is-invalid @enderror" description="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">Post url</label>

                    <input id="url" type="text" name="url" class="form-control @error('url') is-invalid @enderror" url="url" value="{{ old('url') }}" required autocomplete="url" autofocus>

                    @error('url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="Image" class="col-md-4 col-form-label">Post Image</label>
                    <input type="file" class="form-control-file" id='image' name='image'>

                    @error('image')
                    <strong>{{ $message }}</strong>

                    @enderror
                </div>

                <div class="row pt-4">
                    <button class='btn btn-primary' type='submit'>Add New Post</button>
                </div>
            </div>
        </div>

    </form>

</div>
@endsection