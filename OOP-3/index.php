<?php

require 'helper.php';

$db1 = new Database();
$db1->connect();
$user1 = new User(1, 'Quinn', 'loots.quinn@gmail.com', 'passwd', 'no');
$user2 = new User(2, 'test', 'test@gmail.com', 'password', 'no');
$db1->addUser($user1);
$db1->addUser($user2);
$db1->deleteUser($user1);
