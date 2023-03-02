<?php
/**
 * @cmsmasters_package 	Flower Shop
 * @cmsmasters_version 	1.0.0
 */


list($cmsmasters_layout) = flower_shop_theme_page_layout_scheme();


echo '<!-- Start Content -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content entry">' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content entry fr">' . "\n\t";
} else {
	echo '<div class="middle_content entry">';
}
