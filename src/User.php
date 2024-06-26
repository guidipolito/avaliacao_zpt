<?php
namespace User;

use BaseClass;

class User extends BaseClass{
	public function find_many($ids) {
		$users = [];

        $users[] = $this->db->q('SELECT username FROM user WHERE id IN (' . implode(',', $ids) . ')');

		return $users;
	}
}

?>
