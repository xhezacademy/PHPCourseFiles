<?php
namespace project\classes;

/**
 * Class Student
 */
class Student extends Person
{
	public $school = '';

	public function __construct($emri, $shkolla)
	{
		$this->name = $emri;
		$this->school = $shkolla;
	}
}
