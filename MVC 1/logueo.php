<?php
require_once("includes\config.inc.php");

if ($_SERVER["REQUEST_METHOD"]='POST'){
  if (strlen($_POST["nombre"])>0 && strlen($_POST["correo"])>0) {
    //print_r($_POST);
    $datauser = new stdClass;
    $datauser-> nom=$_POST["nombre"];
    $datauser-> correo=$_POST["correo"];
  }else {
    die("No hay datos");
  }
}

require_once(VIEW_PATH."logueo.view.php");
