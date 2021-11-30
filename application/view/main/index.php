<p>Главная страница</p>
Name:<? foreach ($news as $val):?>
<h3><?=$val['title']?></h3>
<p><?=$val['desc']?></p>
    <hr>
<?php
endforeach;?>
