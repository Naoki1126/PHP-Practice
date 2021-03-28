<?php
class Human
{
    #static クラス変数の定義
    static $class_name = "Human";

    function init(){
        $this->name = "大泉";
    }

    public function show() {
        print($this->name."\n");
    }
}

$human = new Human();
$human->show();
print(Human::$class_name);

class Person
{
    #
    public static $class_call_count = 0;

    #Rubyで言うところのinitialize?
    function __construct(){
        self::$class_call_count += 1;
    }
}

new Person();
print(Person::$class_call_count."\n");

new Person();
print(Person::$class_call_count."\n");
?>

<?php
class Human2
{
    public static $str = null;
    public static $num = 0;
}

Human2::$str = "hello";
Human2::$num = 42;

print(Human2::$str."\n");
print(Human2::$num);

?>

<?php
class Hoge
{
    function __construct(){
        $this->name = "大泉";
        $this->age = 44;
    }
}

$hoge = new Hoge();

$hoge->name = 'fujimura';
$hoge->age = 54;
$hoge->city = 'tokyo';

print($hoge->name);
print($hoge->age);
print($hoge->city);
?>

<?php
class Human3{

    function __construct(){
        $this->name = null;
        $this->address = null;
    }
    function show(){
        print($this->name."\n");
        print($this->address);
    }
}

class Actor extends Human3{}

$actor = new Actor();

$actor->name = "大泉";
$actor->address = "北海道";

$actor->show();
?>