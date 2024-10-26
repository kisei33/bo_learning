@extends('app')

@section('title', 'コンテンツ詳細')

@section('content')
  <div class="main">
    <div class="card-body pt-0">
        <h3 class="h4 card-title">
            {{ $content->title }}
        </h3>
        <div class="card-text">
            {!!$content->body!!}
        </div>
    </div>
  </div>
  <nav class="menu">
    <ul>
      <li class="list">Item 1 iiiiiiiiiiiii<li class="list">Item 2 <li class="list">Item 3 <li class="list">Item 4 <li class="list">Item 5
      <li class="list">Item 6 <li class="list">Item 7 <li class="list">Item 8 <li class="list">Item 9 <li class="list">Item 10
      <li class="list">Item 1 <li class="list">Item 2 <li class="list">Item 3 <li class="list">Item 4 <li class="list">Item 5
      <li class="list">Item 6 <li class="list">Item 7 <li class="list">Item 8 <li class="list">Item 9 <li class="list">Item 10
    </ul>
  </nav>
  <style>
    pre {
      /* background-color: #f4f4f4; */
      border: 1px solid #aaa;
      border-radius: 0 .2rem .2rem .2rem;
      padding: .4rem;
      margin-bottom: 1rem;
      font-family: Consolas, "Meiryo UI";
      padding: 10px;
      width: 50%;
    }
    .tab {
      width: 3.5rem;
      color: #666;
      background-color: #e8e8e8;
      border-top: 1px solid #aaa;
      border-right: 1px solid #aaa;
      border-left: 1px solid #aaa;
      border-radius: .3rem .3rem 0 0;
      text-align: center;
      font-size: 8pt;
    }
    .menu {
      position: fixed;
      top: 0px;
      left: 0px;
      width: 15%;
      height: 100vh;
      background: #f4f4f4;
      font-size: 24px;
      /* font-family: Roboto, Noto Sans, -apple-system, BlinkMacSystemFont, sans-serif; */

      /* 縦方向のスクロールバーを表示 */
      overflow-y: scroll;

      /* IE などのスクロールバーの色設定 */
      scrollbar-face-color: #999;
      scrollbar-track-color: #eee;

      /* スマホ用の慣性スクロール */
      /* -webkit-overflow-scrolling: touch; */
    }

    .main {
      width: 85%;
      margin-left: 200px;
    }

    .list {
      margin-bottom:20px;
      list-style:none;
    }
  </style>
@endsection
