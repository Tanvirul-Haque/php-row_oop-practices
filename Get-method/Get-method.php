<?php

use second as GlobalSecond;
use student as GlobalStudent;

class first{
    private $second= "This is a number";
    public function __get($name)
    {
        echo "You are trying to not exist property<br>";

    }
}

$mix=new first();
$mix->second;

//-------------------------------------------------------------------------------//


class nishat{
    private $niloy;
    public function __get($name)
    {
        echo "You are trying not exixt property<br>";
    }
}
$mixer=new nishat();
$mixer->niloy;

//-------------------------------------------------------------------------------//


class student{

    private $detail=["name"=>"Nishat","roll"=>"141290"];
    public function __get($name)
    {
        echo "you are trying not exist property<br>";
    }
}

$cal=new student();
$cal->detail;

//-------------------------------------------------------------------------------//


class online{
    private $class=["online"=>"buisness","time"=>"10am","dep"=>"computer"];
    public function __get($name)
    {
        echo "This is not exist<br>";
    }
}

$calculate=new online();
print_r($calculate->class);

//-------------------------------------------------------------------------------//

class lion{
    private $tiger;
    public function __get($name)
    {
        echo "This is a not exits property<br>";
    }
}

$animal= new lion();
$animal->tiger;

//-------------------------------------------------------------------------------//

class tiger{
    private $lion=["king"=>"forest","name"=>"lion","place"=>"forest"];
    public function __get($name)
    {
        echo "This is a lion but not exists property<br>";
    }
}

$animals= new tiger();
print_r($animals->lion);

//-------------------------------------------------------------------------------//


class second{
    private $info=["Name"=>"Nishat","dep"=>"cmt","sem"=>"5th"];

    public function __get($detail)
    {
        if(array_key_exists($detail,$this->info)){
            return $this->info[$detail];
        }else{
            return "The key($detail) is not define<br>";
        }
    }
}

$mixed= new second();
echo $mixed->info;

//-------------------------------------------------------------------------------//


class third{
    private $college=["Name"=>"ak school","palce"=>"dhaka"];
    public function __get($details)
    {
        if(array_key_exists($details,$this->college)){
            return $this->college[$details];
        }else{
            return "The key is not exists";
        }
    }
}

$calcu= new third();
echo $calcu->college;
?>