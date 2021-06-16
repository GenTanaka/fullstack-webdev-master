<?php 
namespace db;

use db\DataSource;
use model\UserModel;

class UserQuery {
	public static function fetchbyId($id) {

		$db = new DataSource;
		$sql = 'select * from pollapp.users where id = :id;';

		$result = $db->selectOne($sql,[
			':id' => $id
		], DataSource::CLS, UserModel::class);

		return $result;
	}
}