<?php
namespace Department;

use BaseClass;

require_once './User.php';

class Department extends BaseClass{
	private User\User $user;

	public function __construct() {
		$this->user = new User\User(); // @todo fixme
	}

    public static function largest(){
        return $this->db->q('SELECT id, name FROM department ORDER BY employees DESC LIMIT 1')[0];
    }
}
?>
