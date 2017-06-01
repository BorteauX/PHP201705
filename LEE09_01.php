<?php
$upload = $_FILES['upload'];
if ($upload['error'] == 0) {
    echo ''
    if (copy($upload['tmp_name'] ./upload /)){
        echo 'upload.ok';
    }else{
        echo 'copy Fail';
    }else{
    echo'uploadFail';
    }
}

