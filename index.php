<?php
require "vendor/autoload.php";

use Obinna\User;
use Obinna\Page\Page;


$user = new User();
$page = new Page();

$helloUser = $user->sayhello();
$hellopage = $page->another();

echo $helloUser."\n\n".$hellopage;