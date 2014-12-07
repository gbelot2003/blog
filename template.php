<?php

/**
 * @file
 * template.php
 */

function blog_preprocess_node(&$vars){
	$node = $vars['node'];

	$vars['date_day'] = format_date($node->created, 'custom', 'j');
	$vars['date_month'] = format_date($node->created, 'custom', 'M');
	$vars['date_year'] = format_date($node->created, 'custom', 'Y');

}