<?php

require 'helper.php';

$helper1 = new Html();
echo $helper1->stylesheet('./style.css');
echo $helper1->metaTag();
echo $helper1->imageLink('https://via.placeholder.com/150');
echo $helper1->linkTag('https://google.be', 'Google');
