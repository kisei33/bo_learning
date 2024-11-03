<?php

namespace App\Services;

use Illuminate\Support\Str;

class HtmlProcessorService
{
    // リッチテキストのHTMLを加工するサービスクラス

    /**
     * 指定されたHTMLコンテンツ内のすべての <pre> タグの上にタブ要素を追加する。
     * @param string
     */
    public function addTabToPreTags($htmlContent): string
    {
        return Str::replace('<pre>', '<div class="tab">Code</div><pre>', $htmlContent);
    }
}

