<div id="news">
    <div class="container-news">
<div class="articles">
{foreach from=$result_list item=article}
    <article>
        <h2>{$article.title }</h2>
        <h3 class="thick">{$article.headline}</h3>
        <p>{$article.date}</p><br />

        <div class="content">
            <div class="read-more">
        <content>{$article.content}</content> <br />
        <img src="{$article.image}" alt="{$article.alt}" />
        <br /><br />
            </div>
        </div>

    </article>

{/foreach}

</div>

<div id="sidebar">
    <h3>NBA Finals</h3>

        {foreach from=$result_list2 item=image}
            <img src="{$image.image} alt={$image.alt}" /><br />
    {/foreach}
</div>
</div>
</div>