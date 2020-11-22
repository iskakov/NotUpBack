<?php
if (!empty($_GET)) {
  $arr=[];
  $myObj = new stdClass();
  $myObj->name = 'хуй';
  $arr[] = $myObj;
  return json_decode($arr);
}