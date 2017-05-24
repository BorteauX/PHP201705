<?php
if (isset($_GET['twid'])){
    //檢查
    if(preg_match('/^[A-Z][12][0-9]{8}/',$twid)>0){
        $n12 = substr($twid,0,1);

    }





    $twid = $_GET['twid'];


}
$str = '0987654321';
$phone = '/^09[0-9]{8}$/';
$value = preg_match($phone,$str);
echo $value;




?>

<form>
<input type="text" name="twid">

<input type="submit" value="check">

</form>