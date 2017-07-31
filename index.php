<?php
require "vendor/autoload.php";

use Obinna\User;
use Obinna\Page;


$page = new Page();

$helloUser = $page->sayhello();
$hellopage = $page->another();

echo $helloUser."\n\n".$hellopage;