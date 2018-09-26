<?php
require './vendor/autoload.php';
require './classes/SColorss.php';

$scolorss = new SColorss();
$scolorss->setColor('#FF6600');
$scolorss->generateScheme();
