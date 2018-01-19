<?php
include_once("pdoCrud.php");

$obj=new pdoCrud();

if(isset($_GET['l'])){
	$req_val = $obj->getData($_GET['l']);
}

if(isset($req_val['actual_url']) && !empty($req_val['actual_url'])){
    header('Location: ' . $req_val['actual_url']);
}
else{
    header('HTTP/1.0 404 Not Found');
    echo 'Unknown link.';
}