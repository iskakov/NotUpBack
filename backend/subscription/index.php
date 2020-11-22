<?php
header( "Content-type: application/json" );
header( "Access-Control-Allow-Origin: *" );
if (!empty($_GET)) {
  $arr=[];
  $myObj = new stdClass();
  $myObj->name = 'хуй';
  $arr[] = $myObj;
  echo json_encode($arr);
}