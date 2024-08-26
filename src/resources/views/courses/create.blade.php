@extends('app')

@section('title', '記事投稿画面')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            <div class="card-text">
              <form method="POST" action="">
              @csrf
              <div class="md-form">
                <label>タイトル</label>
                <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
              </div>
              <div class="form-group">
                <label></label>
                <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ old('body') }}</textarea>
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
