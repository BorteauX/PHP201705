<?php
if (isset($_GET['xx'])) {

    $x = $_GET['xx'];  //抓第一文字框的值
    $y = $_GET['yy'];  //抓第二文字框的值
    $sell = $_GET ['sel']; //抓select值
    $pl = $x + $y;
    $mi = $x - $y;
    $mu = $x * $y;
    $di = $x / $y;



    if($sell == "plus1"){
        echo $pl;
    }else if($sell == "minus1"){
        echo $mi;
    }else if($sell == "muti1"){
        echo $mu;
    }else if($sell == "divide1"){
        echo $di;
    }

}

?>
<form>
    <input type="text" name= "xx" id="x" value= <?php echo $x; ?>>

    <select name="sel" id ="sele">
        <option id = "plus" value="plus1" <?php if($sell =='plus1') {echo 'selected';}?>>+</option>
        <option id="minus"  value="minus1" <?php if($sell =='minus1') {echo 'selected';}?>>-</option>
        <option id="muti"   value="muti1"<?php if($sell =='muti1') {echo 'selected';}?>>*</option>
        <option id="divide" value="divide1"<?php if($sell =='divide1') {echo 'selected';}?>>/</option>
    </select>

    <input type="text" name="yy" id="y" value = <?php echo $y; ?>>

    <input type="submit" value="="/>





</form>
