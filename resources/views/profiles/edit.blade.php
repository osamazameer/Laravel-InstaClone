@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/update" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="desc" class="col-md-4 col-form-label">Description</label>

                    <input id="desc" type="desc" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ $user->profile->desc}}"  autocomplete="desc">

                    @error('desc')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">URL</label>

                    <input id="url" type="url" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ $user->profile->url }}"  autocomplete="url">

                    @error('url')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                    <input id="image" name="image" type="file" class="form-control-file" />

                    @if($errors->has('image'))
                        <strong>{{ $message }}</strong>
                    @endif
                </div>
                <div class="row mt-4">
                    <input id="submit" name="submit" type="submit" class="form-control-file btn btn-primary" />
                </div>
            </div>
        </div>
    </form>




</div>
@endsection
