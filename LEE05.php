<form action="LEE06.php" method="get">

    name:<input type="text" name="account" /><br>
    password<input type="password" name="passwd" /><br>
    生日:<input type="date" name="birthday">
    <br>
    <!--郵遞區號-->
    <select name="area">
        <option value="401"> 北屯區</option>
        <option value="402"> 溪屯區</option>
        <option value="403"> 南屯區</option>
    </select><br>
    <!--    性別-->
    <input type="radio" name="gender" value="f" checked>Female
    <input type="radio" name="gender" value="m">male
    <br>
    <!--    興趣-->
    <input type="checkbox" name="like[]" value="1">打電動
    <input type="checkbox" name="like[]" value="2">打毛線
    <input type="checkbox" name="like[]" value="3">打電腦 <br>
    <input type="checkbox" name="like[]" value="4">打籃球
    <input type="checkbox" name="like[]" value="5">打排球
    <input type="checkbox" name="like[]" value="6">打羽球<br>
    <!--    留言板-->
    <textarea name="memo"></textarea><br>

    <input type="file" name="upload"><br>

    <input type="submit" value="送出">

</form>
