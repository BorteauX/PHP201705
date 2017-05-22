<form>
    判斷是否為潤年。請輸入年份
    <input type="text" name="xx" id="x"/>
    <input type="submit" name="yy" id="y" value="執行" onclick="cal()"/>
    <input type="reset" value="清除">
    <!--<span id ="r" name="result"></span>-->
    <!--<script>-->
    <!--    function cal(){-->
    <!--        var a = document.getElementById("x");-->
    <!--        var aa = x.value;-->
    <!--        if(aa%4 ==0)-->
    <!--            document.getElementById("r").innerText = 是閏年;-->
    <!---->
    <!--    }-->
    <!--</script>-->


</form>
<?php
if (isset($_GET['xx'])) {

    $vara = $_GET['xx'];


    if ($vara % 4 == 0) {
        if ($vara % 100 == 0) {
            if ($vara % 400 == 0) {
                echo '是閏年';
            } else {
                echo '不是閏年';
            }

        } else {
            echo '是閏年';
        }
    } else {
        echo '不是閏年';
    }
}
?>