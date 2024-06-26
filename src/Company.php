<?php
namespace Company;

use BaseClass;

class Company extends BaseClass{
	private int $id;

	public function greetings() {
		return "Greetings. Your ID is $this->id";
	}
}

?>
