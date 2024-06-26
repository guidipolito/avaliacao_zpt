<?php
namespace Company;

use BaseClass;

class Company extends BaseClass{
	protected int $id;

	public function greetings() {
		return "Greetings. Your ID is $this->id";
	}
}

?>
