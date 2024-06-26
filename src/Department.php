<?php
namespace Department;

require_once './User.php';

class Department {
    private $db;

	private User\User $user;

	public function __construct() {
		$this->user = new User\User(); // @todo fixme
	}

    public static function largest(){
        return $this->db->q('SELECT id, name FROM department ORDER BY employees DESC LIMIT 1')[0];
    }
}
?>
