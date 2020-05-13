<?php
abstract class library
{
    public $total,$book,$price;
    abstract public function getinput();
    abstract public function total():float;    
}
class student extends library
{
    private $discount;
    function __construct($num,$dis)
    {
        $this->price=$num;
        $this->discount=$dis;
    }
public function getinput()
{
    $this->book=(int)readline();
}
public function total():float{
    $this->total=($this->book*$this->price)-($this->discount*$this->book*$this->price);
    return $this->total;
}
}
class teacher extends library
{
    private $discount;
    function __construct($num,$dis)
    {
        $this->price=$num;
        $this->discount=$dis;
    }
public function getinput()
{
    $this->book=(int)readline();
}
public function total():float{
    $this->total=($this->book*$this->price)-($this->discount*$this->book*$this->price);
    return $this->total;
}
}
class outsider extends library
{
    function __construct($num)
    {
        $this->price=$num;
    }
public function getinput()
{
    $this->book=(int)readline();
}
public function total():float{
    $this->total=$this->book*$this->price;
    return $this->total;
}
}
end:
echo "0.teacher\n1.student\n2.outsider\n";
$choice=(int)readline();
switch($choice)
{
case 0:
$t=new teacher(100,0.15);
$t->getinput();
$result=$t->total();
echo "amount to paid:$result";
break;
case 1:
$s=new student(100,0.05);
$s->getinput();
$result=$s->total();
echo "amount to paid:$result";
break;
case 2:
$o=new outsider(100);
$o->getinput();
$result=$o->total();
echo "amount to paid:$result";
break;
default:
    goto end;
}
?>