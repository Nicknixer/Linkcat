<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="left-side-bar">
    <div class="left-side-menu">Меню</div>
    <div class="left-side-items"><a href="/admin/panel">Модерация </a>(<?php echo $new; ?>)</div>

    <div class="left-side-menu">Категории</div>
    <div class="left-side-items"><a href="/admin/panel/edit_category/-1"><span class="add-site">Добавить категорию</span></a></div>
    <?php
    foreach ($cats as $cat)
    {
        echo '<div class="left-side-items"><a href="/cat/show/'.$cat['id'].'">'.$cat['name'].'</a> ('.$cat['count'].') (<a href="/admin/panel/delete_category/'.$cat['id'].'" onclick ="return confirm(\'Удалить категорию '.$cat['name'].'?\');">Уд</a>|<a href="/admin/panel/edit_category/'.$cat['id'].'">Изм</a>)</div>';
    }
    ?>
</div>
