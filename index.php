<?php
require("rb/Rockabilly.class.php");

$myRockabilly = new Rockabilly();

if (!empty($_POST)) { 
	$myRockabilly->bindForm();
}

//$myRockabilly->getStorage()->saveArticle('test', 'SAN & GBO: let\'s Go !! :)');
echo $myRockabilly->getStorage()->getArticle('test', '4f7debb5e0374');

echo '<br />';

$myRockabilly->renderForm('index.php');
