<?php
var_dump($_POST);

if (!empty($_GET)) {
  $arr=[];
  $myObj = new object();
  $myObj->name = 'хуй';
  $arr[] = $myObj;
  var_dump(json_encode($arr));
}