@extends('app')

@section('title', '記事投稿画面')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            <div class="card-text">
              <form method="POST" action="{{ route('courses.store') }}">
              @csrf
              <div class="md-form">
                <input type="number" name="user_id" class="form-control" placeholder="user_id" required value="{{ old('user_id') }}">
                <input type="text" name="title" class="form-control" placeholder="title" required value="{{ old('title') }}">
              </div>
              <div class="form-group">
                <label></label>
                <textarea name="introduction" required class="form-control" rows="16" placeholder="本文">{{ old('introduction') }}</textarea>
              </div>
              <button type="submit" class="btn blue-gradient btn-block">投稿する</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
