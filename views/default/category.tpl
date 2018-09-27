{*шаблон категорий*}
 
<h3>Товары категории {$rsCategory['name']}</h3>
{if $rsProducts eq null and $rsCategory['parent_id'] neq 0}
    <h2>Товара {$rsCategory['name']} нет в наличии </h2>
{/if}

{foreach $rsProducts as $item name=products}
    <div style="float: left; padding: 0px 30px 40px 0px;">
        <a href="/product/{$item['id']}">
            <img src="/images/products/{$item['image']}" width="50">
        </a>
        <a href="/product/{$item['id']}">{$item['name']}</a>
    </div>
 
            {if $smarty.foreach.products.iteration mod 3 == 0}
                <div style="clear: both"></div>
            {/if}
{*{foreachelse}
    <h3> Товаров категории {$rsCategory['name']} нет в наличии</h3>*}
{/foreach}
{foreach $rsCatsChildren as $item name=childCats}
    <h2><a href="/category/{$item['id']}/">{$item['name']}</a></h2>
{/foreach}


