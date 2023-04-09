<?php
include_once("../model/ConDB.php");
include_once("../model/Register.php");
// echo $_SERVER["REQUEST_METHOD"];
  $data_register = array();
  $data_register['re_email'] = $_POST['re_email'];
  $data_register['re_title'] = $_POST['re_title'];
  $data_register['re_name'] = $_POST['re_name'];
  $data_register['re_phonenumber'] = $_POST['re_phonenumber'];
  $data_register['re_IDuser'] = $_POST['re_IDuser'];
  $data_register['re_educational'] = $_POST['re_educational'];
  $data_register['re_image_URL'] = $_POST['re_image_URL'];
  foreach ($data_register as $value) {
    echo gettype($value), ' ', $value, "\n";
  }
  $obj_name = new Register();
  $rs2 = $obj_name->registerCourse($data_register);
  if ($rs2) {
    echo "<script type='text/javascript'>alert('เพิ่มข้อมูลสำเร็จ');</script>";
    header('Location: ../view_course.php');
    exit();
  }
?>