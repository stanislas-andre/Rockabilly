<?php
require("rb/Rockabilly.class.php");

$myRockabilly = new Rockabilly();
$myRockabilly->getStorage()->saveArticle('test', 'SAN & GBO: let\'s Go !! :)');
echo $myRockabilly->getStorage()->getArticle('test', '4f59260ee5491');


echo $myRockabilly->renderForm();
