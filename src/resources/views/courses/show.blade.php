@extends('app')

@section('title', '記事詳細')

@section('content')
  <div class="container">
    <div class="card-body pt-0">
        <h3 class="h4 card-title">
            {{ $course->title }}
        </h3>
        <div class="card-text">
        {{ $course->introduction }}
        </div>
    </div>
    <div class="card-body pt-0">
      @foreach ($contents as $content)
        <h3 class="h4 card-title">
          <a href="{{ route('contents.show', ['id' => $content->id]) }}">
          {{ $content->title }}
        </h3>
      @endforeach
    </div>
  </div>
@endsection
