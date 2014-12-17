<?php
error_reporting( E_ALL );

class Person{

	public $name;

	public function __construct($name){
		$this->name = $name;
	}

	public function setName ($name){
		$this->name = $name;
	}

	public function getName ($name){
		return $this->name;
	}
}

class AnotherPerson extends Person{

	public function setAge($age){
		$this->age = $age;
	}
	public function getAge( ){
		return $this->age;
	}
}



$sajin = new Person ('Sajin');
$sajin->setName("Nikhil");
$sajin->getName();


$saleem = new Person ('Mohammed');
$saleem->setName("Mohammed");
$saleem->getName();



$child = new AnotherPerson();
$child->setName("Child Name");
echo $child->getName();

$child->setAge(30);
echo $child->getAge();




?>