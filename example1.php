<?php
$var = '-Example-';
$var1 = '-Example one-';

echo 'Echo $va :: '.$var . '<br>';
echo 'Echo $$va :: '.$$var . '<br>';

echo $var,$var1;


echo "<br>-----------------------------------------------------------------------------------------------------";


$string = "Hello:How:Are:You";
list($hello,$how,$are,$you) = explode(":", $string);

echo '<br>'.$hello. '<br>';
echo $you. '<br>';



$str = 'one|two|three|four';

// positive limit
print_r(explode('|', $str, 2));

// negative limit (since PHP 5.1)
print_r(explode('|', $str, -1));


echo "<br>-----------------------------------------------------------------------------------------------------";


class Customer {
	
	public function setName($name) {
	  $this->name = $name;
	}
	
	public function setAge($age) {
	  $this->age = $age;
	}
	
	function __sleep() {
	  return array('age');
	}
	function __wakeup() {
	  $this->type = "sa";
	}
}

$y = new Customer();
$y -> setName("Sajin");
$y -> setAge(25);

$z = serialize($y);
$m = unserialize($z);echo  '<br>';
print_r($z);echo  '<br>';

print_r($m);echo  '<br>';

echo" __Sleep() Definition: When we seralize() and object it will first check the class has a function with the magical name __sleep(). 
if it contain this magical function then this will return an array with the name of all variables of the 
object that should be seralized.". '<br>'. '<br>';

echo" __wakeup() Definition: When we unserialized an object it will first check the class has the function with the magical name __wakeup(). 
if it contain this magical name then it will reconstruct any resources that object may have. ". '<br>'. '<br>';

echo"The intended use of __wakeup is to reestablish any database connections that may have been lost during serialization and perform other reinitialization tasks.";

?>

<?php

class Foo {
    public $a, $b, $c;
    
    public function __construct() {
        $this->a = 'foobar';
        $this->b = 'raboof';
        $this->c = array('a', 'b', 'c');
    }

    public function __sleep() {
        $this->c = array('d', 'e', 'f');
        return array('b', 'c'); // $b en $c moeten geserialized worden
    }
}

$foo = new Foo();
echo serialize($foo);

?>


.....................................................................................................................

__autoload — Attempt to load undefined class

__autoload function will calls automatically if the call is undefined

<?php
// we've writen this code where we need
function __autoload($classname) {
    $filename = "./". $classname .".php";
    include_once($filename);
}

// we've called a class ***
$obj = new myClass();
?>


*** At this line, our "./myClass.php" will be included! This is the magic that we're wondering... And you get this result "myClass init'ed successfuly!!!".

So, if you call a class that named as myClass then a file will be included myClass.php if it exists (if not you get an include error normally). If you call Foo, Foo.php will be included, and so on...

..........................................................................................................................

Difference Between Include() Vs Include_once() In Php

The include_once() statement includes and evaluates the specified file during the execution of the script. 
This is a behavior similar to the include() statement, with the only difference being that if the code from a file has already been included, 
it will not be included again.










