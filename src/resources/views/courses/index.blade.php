@extends('app')

@section('title', '記事一覧')

@section('content')
  <div class="container container-custom">
  @foreach($courses as $course)
    <div class="card mt-3">
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
    height: 330px; /* 幅をカスタマイズ */
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
  }
</style>