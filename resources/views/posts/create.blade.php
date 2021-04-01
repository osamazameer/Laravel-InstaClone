@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                    <input id="caption" type="caption" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption">

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>
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
