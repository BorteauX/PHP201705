<?php
class Cart {
    private $member;
    private $list;
    function __construct($members){
        $this->list = array();
        $this->member = $members;
    }
    function addItem($pid, $qty){
        $this->list[$pid] = $qty;
    }
    function removeItem($pid){
        unset($this->list[$pid]);
    }
    function getList(){
        return $this->list;
    }
    function getMember(){
        return $this->member;
    }
}

 class Member {
     var $twid;  // Member Object has-a TWID Object
     function __construct($twid){
         $this->twid = new TWID($twid);
     }
 }

    class id{
        function __construct($ids)
        {
            $this->id = $ids;
        }

        function get_gender{
            return true;
        }
        function get_area{
            return "Taipei";
        }
        function checked{


        }
    }
    $twid = new $twid('A123456789');


class Bike{
    protected $speed;
    function __construct()  // 建構式  建構是永遠沒有return值
    {
        echo
    }

    function upSpeed(){     //方法
        $this->speed = ($this->speed <1)?1:$this->speed*1.2;
    }function downSpeed(){
    $this->speed = ($this->speed <1)?0:$this->speed*0.7;
}
    function getspeed(){
        return $this->speed;
    }

}

class Scooter extends Bike{    //scooter extends繼承 Bike
    function __construct(){    //子類別繼承父類別建構式時，若有自己的建構式則不繼承
        parent::__construct(); //子類別也可用parent先繼承父類別建構式
    }

    function upSpeed(){
        parent::upSpeed();
        $this->speed*=2;
    }

}




$myBike = new Bike;
$urBike = new Bike;

$myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();
$urBike->upSpeed();$myBike->upSpeed();$myBike->downSpeed();



echo $myBike->getspeed();


echo "<hr>";

$myScooter = new Scooter();    //產生一個新的Scooter物件
$myScooter -> upSpeed();
$myScooter -> upSpeed();
$myScooter -> upSpeed();

echo "my Scooter = {$myScooter->getspeed()}";