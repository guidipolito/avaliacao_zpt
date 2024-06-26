<?php
namespace Company;
use Company\Company;

class CompanyClient extends Company{
    private int $registration;

	public function greetings() {
		return "Greetings. Your ID is $this->id and your registration is $this->registration";
	}
}
