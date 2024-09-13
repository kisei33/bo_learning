@extends('app')

@section('title', '記事詳細詳細')

@section('content')
  <div class="container">
    <div class="card-body pt-0">
        <h3 class="h4 card-title">
            {{ $course->title }}
        </a>
        </h3>
        <div class="card-text">
        {{ $course->introduction }}
        </div>
    </div>
  </div>
@endsection
