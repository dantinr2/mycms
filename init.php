<?php
	$pdo = new PDO('mysql:host=192.168.5.197;dbname=test', "root","123456");
	$redis = new Redis();
	$redis->connect('192.168.5.197',6379);
