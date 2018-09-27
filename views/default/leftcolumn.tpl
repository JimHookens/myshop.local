{* левый столбец*}
<div id="LeftColumn">
    <div id="LeftMenu">
        <div class="menuCaption">Меню:</div>
        {foreach $rsCategories as $value}
            <a href="/?controller=category&id={$value['id']}">{$value['name']}</a><br>
            {if isset($value['children'])}
                {foreach $value['children'] as $child}
                    --<a href="/?controller=category&id={$child['id']}">{$child['name']}</a><br>
                {/foreach}                    
            {/if}
        {/foreach}   
    </div>
</div>