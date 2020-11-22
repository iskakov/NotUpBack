<?php
if (!empty($_GET)) {
  $arr=[];
  $myObj = new stdClass();
  $myObj->name = 'хуй';
  $arr[] = $myObj;
  echo json_encode($arr);
}