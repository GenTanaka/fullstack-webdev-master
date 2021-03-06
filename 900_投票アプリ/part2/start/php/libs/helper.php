<?php
function get_param($key,$default_val, $is_post = true) {
	$arry = $is_post ? $_POST : $_GET;
    return $arry[$key] ?? $default_val;
}

function redirect($path) {
	if($path === GO_HOME){
		$path = '';
	} elseif ($path === GO_REFERER) {
		$path = $_SERVER['HTTP_REFERER'];
	} else {
		$path = get_url($path);
	}
	header("Location: {$path}");
	die();
}

function get_url($path) {
	return BASE_CONTEXT_PATH . trim($path, '/');
}
