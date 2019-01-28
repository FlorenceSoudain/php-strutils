<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 28/01/2019
 * Time: 15:59
 */

require 'classes/StrUtils.php';

$test = new StrUtils();
$test->getStr('Bonjour<br>');

echo $test->bold();
echo $test->italic();
echo $test->underline();
echo $test->capitalize();
echo $test->uglify();

$test2 = new StrUtils();
echo $test2->uglify();