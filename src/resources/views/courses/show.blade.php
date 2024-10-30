@extends('app')

@section('title', '記事詳細')

@section('content')
  <div>
    <div class="card-body pt-0 course-container">
        <section>
          <h3 class="card-title">
              {{ $course->title }}
          </h3>
        </section>
        <section>
          <h3 class="card-text">
            {{ $course->introduction }}
          </h3>
        </section>
    </div>
  </div>
  <div class="container">
    <h3 class="curriculum">カリキュラム</h3>
    <div class="card-body pt-0">
      @foreach ($contents as $content)
        <h3 class="h4 card-title section">
          <a href="{{ route('contents.show', ['id' => $content->id]) }}">
          {{ $content->title }}
        </h3>
      @endforeach
    </div>
  </div>
  <style>
    .course-container {
      color: white;
      background-color :orange;
      height: 300px;
    }
    .curriculum {
      margin-top: 20px;
      margin-bottom: 37px;
      border-left: 5px solid #1e5099;
    }
    .section {
      height: 60px;
      display: flex;
      align-items: center;
      border-top: 1px solid hsla(0, 0%, 43.9%, .53333);
      font-size: 20px;
      font-weight: 700;
    }
  </style>
@endsection
