{* левый столбец*}
        <div id="LeftColumn">
            <div id="LeftMenu">
                <div class="menuCaption">Меню:</div>
                {foreach $rsCategories as $value}
                    <a href="#">{$value['name']}</a><br>
                 {/foreach}   
            </div>
        </div>