<?php
require 'config.php';
if(!$_SESSION['index']) {
	exit(header("location: ".$url."/landing/index"));
}

 ?>