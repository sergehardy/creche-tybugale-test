<?php

$page= $_GET['p'] ?? "home";


include __DIR__."/pages/$page.php";
