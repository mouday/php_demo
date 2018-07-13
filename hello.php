<?php  
echo "hello world"

# 单行注释
// 单行注释
/*
    多行注释
*/
?>

<?php 

// 八种数据类型: 整型 浮点型 布尔值 空 字符串 数组 对象 资源
// PHP所有变量有一个美元符号($)
// 变量赋值
$name = "Tom";
echo $name;

// 变量赋值多行内容
$detail = "\nthis is first line
this is second line\n";

echo $detail;


// 全局变量
$a = 20;

function global_func(){
    // print($a);  // Undefined variable
    global $a;  // 访问全局变量
    print($a);  // 20
    $GLOBALS['a'] += 30;  // 修改全局变量
    echo "\n";
}

global_func();
print($a);  // 50
echo "\n";


// 静态变量
function static_func(){
    static $a = 1;
    echo "a=";
    echo $a;
    echo "\n";
    $a += 1;
}

static_func();  // a=1
static_func();  // a=2
static_func();  // a=3


// 常量定义
define("MAX", 20);

// 常量访问
print MAX;  // 20
print "\n";

print(constant("MAX"));  // 20
print "\n";


// PHP比较运算符 == ===（值和类型都相同） <> !=   !==(值不同或类型不同)
?>

<?php 
// 结构控制
if (1 < 2){
    print("1<2");
}
else{
    print("1>=2");
}
print "\n";
// 1<2


// 循环类型

// 有4种方式：for、while、do...while、foreach，前面3种和C语言中类似
for($i=1; $i<=3; $i++){
    print($i);
    print "\n";
}
// 1 2 3 

$i = 1;
while ($i<=3) {
    print $i;
    print " ";
    $i++;
}
print "\n";
// 1 2 3

do{
    print $i;
    print " ";
    $i--;
} while($i>0);
print "\n";
// 4 3 2 1

// 遍历数组， 指针移动
$list = array(1, 2, 3, 4, 5);
foreach ($list as $value) {
    print "value = $value ";
}
print "\n";
// value = 1 value = 2 value = 3 value = 4 value = 5 


// 数组 3种
// 数字数组
$numbers = array(1, 2, 3, 4, 5);
foreach ($numbers as $value) {
    print("$value ");
}
print "\n";
// 1 2 3 4 5

// 修改数组元素
$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";

foreach ($numbers as $value) {
    print("$value ");
}
print "\n";
// one two three 4 5

// 新建数组
$names[0] = 1;
$names[2] = 2;
foreach ($names as $value) {
    print("$value ");
}
print "\n";
// 1 2 


// 获取数组长度
$length = count($numbers);
for($i=0; $i<$length; $i++){
    print($numbers[$i]);
    print(" ");
}
print "\n";
// one two three 4 5 


// 关联数组 PHP 5.5.36， 相当于python的字典
$people = ["Tom"=>"20", "Jack"=>"30", "Jimi"=>"40"];

// 访问数组元素
print($people["Tom"]);
print(" ");
print($people["Jack"]);
print(" ");
print($people["Jimi"]);
print("\n");
// 20 30 40

// 修改数组元素
$people["Tom"] = 50;
$people["Jack"] = 60;
$people["Jimi"] = 70;

// 遍历数组元素
foreach ($people as $key => $value) {
    print("$key=>$value\n");
}
print("\n");
// Tom=>50
// Jack=>60
// Jimi=>70


// 多维数组
$cars = array(
    "first" => [
        "name" => "car1", 
        "color" => "white"
    ],
    "second" => [
        "name" => "car2",
        "color" => "black"
    ]);

// 访问多维数组元素
print($cars["first"]["name"]);  # car1
print("\n");


// PHP数组排序函数
/*
sort() - 对数组进行升序排列
rsort() - 对数组进行降序排列
asort() - 根据关联数组的值，对数组进行升序排列
ksort() - 根据关联数组的键，对数组进行升序排列
arsort() - 根据关联数组的值，对数组进行降序排列
krsort() - 根据关联数组的键，对数组进行降序排列
*/


// 字符串
// 双引号串 中的内容可以被解释而且替换
// 单引号串 中的内容总被认为是普通字符

// 字符串并置运算符(.)：把两个变量连接在一起
$a = "hello";
$b = "world";
print($a . " " . $b);  // hello world
print("\n");

// 计算字符串的长度
$c = "中国";
print(strlen($a));  // 5
print(strlen($c));  // 6

// 查找字符串
print(strpos($a, "ll")); // 2
print(strpos($a, "xx")); // FALSE
print("\n");

// 函数
// $a普通参数， &$b引用参数， $c默认参数 
function func_args($a, &$b, $c=2){
    $a += 1;
    $b += 1;
    $c += 1;
    print("a=$a b=$b c=$c\n"); // a=2 b=2 c=3
    return $a;  // 返回值
}

$args_a = 1;
$args_b = 1;

$ret = func_args($args_a, $args_b);
print("ret=$ret\n");  // ret=2

print("args_a=$args_a args_b=$args_b\n");
// args_a=1 args_b=2
?>

<?php 

// 继承 PHP不支持多继承

/*
访问控制
public（公有）：公有的类成员可以在任何地方被访问。
protected（受保护）：受保护的类成员则可以被其自身以及其子类和父类访问。
private（私有）：私有的类成员则只能被其定义所在的类访问。
*/
// 类属性必须定义为公有，受保护，私有之一, 默认为公有, var 定义，则被视为公有
// Final 关键字
// 方法被声明为 final，则子类无法覆盖该方法。
// 如果一个类被声明为 final，则不能被继承。

class Father{
    public $name = "Tom";
    protected $age = 40;
    private $address = "北京";

    function print_info(){
        print("public name: " . $this->name . "\n");
        print("protected age: " . $this->age . "\n");
        print("private address: " . $this->address . "\n");
    }

    final function work(){
        print("龙生龙，凤生凤，老鼠生儿会打洞\n");
    }
}

// 子类继承父类
class Child extends Father{
    protected $age = 20;  // 重写父类的protected属性

    function print_info(){
        print("public name: " . $this->name . "\n");
        print("protected age: " . $this->age . "\n");
        // print("private address: " . $this->address . "\n"); // Undefined property
    }

    // function work(){
    //     print("子类不要父类的工作\n");
    // }  
    // Cannot override final method
}

$father = new Father();
$father->print_info();
/*
public name: Tom
protected age: 40
private address: 北京
*/

$child = new Child();
$child->print_info();
/*
public name: Tom
protected age: 20
*/



// 构造函数和析构函数

class People{
    function __construct($name){
        $this->name = $name;
        print("父类构造函数 " . $this->name);
    }

    function __destruct(){
        print("父类析构函数");
    }
}

class Human extends People{
    function __construct($name){
        parent::__construct($name);  // 调用父类的构造方法
        print("子类构造函数 " . $this->name);
    }
}

$people = new People("老王");
print("\n");
/*
父类构造函数 老王
父类析构函数
*/

$human = new Human("小王");
print("\n");
// 父类构造函数 小王子类构造函数 小王 父类析构函数


// 接口
// 指定某个类必须实现哪些方法，但不需要定义这些方法的具体内容
// 接口中定义的所有方法都必须是公有，这是接口的特性
// 类可以实现多个接口

interface ISleep{
    public function sleep($time);
}

interface IEat{
    public function eat();
}

// 实现多接口
class Dog implements ISleep, IEat{
    public function sleep($time){
        print("sleep... time: $time\n");
    }
    public function eat(){
        print("eating ...\n");
    }
}

$dog = new Dog();
$dog->sleep(5);
$dog->eat();
/*
sleep... time: 5
eating ...
*/

// 抽象类

// 任何一个类，如果它里面至少有一个方法是被声明为抽象的，那么这个类就必须被声明为抽象的。
// 定义为抽象的类不能被实例化。
// 继承一个抽象类的时候，子类必须定义父类中的所有抽象方法

abstract class AbsBase{

    // 抽象方法
    abstract public function sleep();

    // 普通方法
    public function eat(){
        print("eat...\n");
    }

}

class Cat extends AbsBase{
    public function sleep(){
        print("cat sleep...\n");
    }
}

class Pig extends AbsBase{
    public function sleep(){
        print("pig sleep...\n");
    }
}

// $abs = new AbsBase(); // Cannot instantiate abstract class

$cat = new Cat();
$cat->eat();  // eat...
$cat->sleep();  // cat sleep...

$pig = new Pig();
$pig->eat();  // eat...
$pig->sleep();  // pig sleep...


// 静态属性 static
// 不实例化类而直接访问

class Foo{
    public static $name = "static name";

    public function get_name(){
        print(self::$name);  // 用一个变量来动态调用类的静态属性
        print("\n");
    }
}

print(Foo::$name);  // static name  // 通过类直接调用静态属性

$foo = new Foo();
$foo->get_name();  // static name


// 参考
// [PHP快速入门](https://www.cnblogs.com/abc-begin/p/7898757.html)
?>
 