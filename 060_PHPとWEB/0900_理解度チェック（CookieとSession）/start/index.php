<?php
/**
 * SessionとCookieの理解度チェック
 * 
 * index.phpに訪問するたびに訪問回数が
 * １ずつ増える処理を実装してみてください。
 * Session、Cookieの二つのパターンで実装してみましょう。
 * 
 * １回目
 * 訪問回数は 1 回目です。
 * 
 * ２回目
 * 訪問回数は 2 回目です。
 * 
 */


// Sessionを使った場合
session_start();
if (!isset($_SESSION["VISIT_COUNT1"])) {
	$_SESSION['VISIT_COUNT1'] = 0;
}
$_SESSION['VISIT_COUNT1'] += 1;

echo "訪問回数は{$_SESSION['VISIT_COUNT1']}回目です。";
// Cookieを使った場合
$visit_count = 1;
if (isset($_COOKIE['VISIT_COUNT2'])) {
	$visit_count = $_COOKIE['VISIT_COUNT2'] + 1;
}
setcookie('VISIT_COUNT2',$visit_count);
echo "訪問回数は{$_COOKIE['VISIT_COUNT2']}回目です。";