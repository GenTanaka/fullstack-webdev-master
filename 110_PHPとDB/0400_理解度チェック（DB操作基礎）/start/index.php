<?php
/**
 * 理解度チェック（DB操作基礎）
 */

$user = 'test_user';
$pwd = 'pwd';
$host = 'localhost';
$dbName = 'test_phpdb';
$dsn = "mysql:host={$host};port=8889;dbname={$dbName};";
$conn = new PDO($dsn, $user, $pwd);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// 以下の操作を行ってみてください。
// またtry, catchによってコードを囲んでください。

/**
 * 問１：
 * 店舗Cの全ての商品の在庫数に+10を足し合わせる
 */
// $update_rows = $conn->exec("
// update txn_stocks set amount = amount + 10;
// ");
// echo $update_rows;

/**
 * 問２：
 * 店舗Dを以下のように追加してください。
 */
/**
 * name: '店舗D'
 * pref_id: 4
 */
// $insert_rows = $conn->exec("
// 	insert into test_phpdb.mst_shops(id,name,pref_id,updated_by) values (4,'店舗D',4,'GenTanaka');
// ");
// echo $insert_rows;
/**
 * 問３：
 * 店舗Aの椅子の在庫数を取得してください。
 */
$p_id = $conn->query("
select id from mst_products mp
where mp.name = '椅子'
");

echo $p_id->fetchAll()[0]["id"];