@extends('app')

@section('title', 'コンテンツ詳細')

@section('content')
  <div class="container">
    <div class="card-body pt-0">
        <h3 class="h4 card-title">
            {{ $content->title }}
        </h3>
        <div class="card-text">
            {{ $content->body }}
        </div>
    </div>
  </div>
@endsection
