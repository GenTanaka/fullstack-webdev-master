<?php
/**
 * クラス継承
 */
class Person
{
	protected $name;
	public $age;
	public const WHERE = 'Earth';

	function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

	function hello() {
		echo 'hello, ' . $this->name;
		return $this;
	}

	static function bye() {
		echo 'bye';
	}
}

class Japanese extends Person {
	function hello() {
		echo 'こんにちは、' . $this->name;
		return $this;
	}
}

$bob = new Japanese('Bob', 18);
$bob->hello();
// $bob->hello()->bye();

// $tim = new Person('Tim', 32);
// $tim->hello();