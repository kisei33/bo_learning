@extends('app')

@section('title', '記事一覧')

@section('content')
  <div class="container-custom">
  @foreach($courses as $course)
    <div class="card mt-3 mr-3">
      <a href="{{ route('courses.show', ['id'=>$course->id]) }}">
      <div class="card-body d-flex flex-row">
        <i class="fas fa-user-circle fa-3x mr-1"></i>
        <div>
          <div class="font-weight-lighter">
            {{ $course['opened'] }}
          </div>
        </div>
      </div>
      <div class="card-body pt-0 pb-2">
        <h3 class="h4 card-title">
          {{ $course['title'] }}
        </h3>
        <div class="card-text">
          {{ $course['introduction'] }}
        </div>
      </div>
    </div>
  @endforeach
  </div>
@endsection

<style>
  .container-custom {
    display: flex;
    flex-wrap: wrap;
  }

  .container-custom > .card {
    flex-basis: calc(31.333%); /* 3列表示・枠を均等にする */
}
</style>