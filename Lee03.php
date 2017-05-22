<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/5/19
 * Time: 下午 03:11
 */

$score = rand(0, 100);
echo $score, '<br>';
if ($score >= 90) {
    echo "A";
} else {
    if ($score >= 80) {
        echo 'B';
    } else {
        if ($score >= 70) {
            echo 'c';
        } else {
            if ($score >= 60) {
                echo 'd';
            } else {
                echo 'e';
            }
        }
    }
}