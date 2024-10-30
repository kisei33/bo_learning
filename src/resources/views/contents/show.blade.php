@extends('app')

@section('title', 'コンテンツ詳細')

@section('content')
  <div class="main">
    <div class="card-body pt-0">
        <div class="card-text">
            {!!$content->body!!}
        </div>
    </div>
  </div>
  <nav class="menu">
    <ul class="contents-list">
      @foreach ($contents as $content)
      <li class="list">{{ $content->title }}
      @endforeach
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

    .contents-list {
      margin-top: 20px;
    }

    .main {
      width: 85%;
      margin: 85px 70px 150px 270px;
    }

    .list {
      margin-bottom:20px;
      list-style:none;
    }

    h1 {
      padding: 0.5em 0;/*上下の余白*/
      border-top: solid 3px #ffaf58;/*上線*/
      border-bottom: solid 3px #ffaf58;/*下線*/
    }

    h2 {
      padding: 0.2em;
      border-bottom: solid 1.5px #e0e0e0;
    }
  </style>
@endsection
