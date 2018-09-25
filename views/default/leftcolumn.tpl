{* левый столбец*}
<div id="LeftColumn">
    <div id="LeftMenu">
        <div class="menuCaption">Меню:</div>
        {foreach $rsCategories as $value}
            <a href="#">{$value['name']}</a><br>
            {if isset($value['children'])}
                {foreach $value['children'] as $child}
                    --<a href="#">{$child['name']}</a><br>
                {/foreach}                    
            {/if}
        {/foreach}   
    </div>
</div>