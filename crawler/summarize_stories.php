<?php

include_once('simple_html_dom.php');

function findCategories() {

	$target_url = 'http://www.wattpad.com/home';
	$html = new simple_html_dom();
	$html->load_file($target_url);
	
	$categoriesObject = $html->find('div.discover_categories');
	$categoriesList = array();

	foreach($categoriesObject[0]->find('a') as $link) {
		$url = $link->href;
		$categoriesList[] = 'http://www.wattpad.com' . $url; 
	}

	$randNumber = rand(0, count($categoriesList) - 1);
	return $categoriesList[$randNumber];

}

function getStory() {

	$target_url = findCategories();

	$html = new simple_html_dom();
	$html->load_file($target_url);

	$item = $html->find('table.text_item_table');
	$randNumber = rand(0, count($item) - 1);

	echo $item[$randNumber];

}
	
getStory();

?>