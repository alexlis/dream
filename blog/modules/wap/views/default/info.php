<div class="am-paragraph am-paragraph-default">
    <article class="am-article">
        <div class="am-article-hd">
            <h1 class="am-article-title"><?=$info["title"];?></h1>
            <p class="am-article-meta">
                作者：<?=$info["author"]['nickname'];?>
                更新时间：<?=$info['date'];?>
            </p>
        </div>
        <hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
        <div class="am-article-bd">
            <?=$info["content"];?>
        </div>
    </article>
</div>
