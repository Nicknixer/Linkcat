<?php
defined('BASEPATH') OR exit('No direct script access allowed');
get_header();
foreach ($sites as $site)
{
    echo '
				<div class="site-block">
				<div class="title-site"><b>'.$site['title'].'</b></div>
				<div class="info-site"><b>Адрес:</b> <a href="/cat/go/'.$site['id'].'">'.$site['url'].'</a></div>
				<div class="info-site"><b>Переходов:</b> '.$site['passes'].'</div>
				<div class="info-site"><b>Дата добавления:</b> '.$site['date'].'</div>
				<div class="info-site"><b>Описание:</b> '.$site['description'].'</div>
				</div>
			';
}
get_footer();

