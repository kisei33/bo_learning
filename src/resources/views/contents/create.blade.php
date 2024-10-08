@extends('app')

@section('title', 'コンテンツ投稿画面')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            <div class="card-text">
              <form method="POST" action="{{ route('contents.store') }}">
              @csrf
              <div class="md-form">
                <input type="number" name="user_id" class="form-control" placeholder="user_id" required value="{{ old('user_id') }}">
                <input type="number" name="course_id" class="form-control" placeholder="course_id" required value="{{ old('content_id') }}">
                <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
              </div>
              <div class="form-group">
                <label></label>
                <!-- <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ old('body') }}</textarea> -->
                <textarea class="form-control" name="body" id="summernote" cols="30" rows="10">{{ old('body') }}</textarea>
              </div>
              <button type="submit" class="btn blue-gradient btn-block">投稿する</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $('#summernote').summernote({
      placeholder: 'Hello Bootstrap 4',
      tabsize: 2,
      height: 100,
      toolbar: [
        ['style', ['style', 'fontsize', 'fontsizeunit']],
        ['font', ['bold', 'italic', 'strikethrough', 'underline', 'height', 'superscript', 'subscript', 'clear', 'hr']],
        ['fontname', ['fontname']],
        ['color', ['color', 'forecolor', 'backcolor']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['undo', 'redo', 'fullscreen', 'codeview', 'help']]
      ]
    });
  </script>
@endsection
