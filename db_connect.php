<?php
$host='localhost';
$user='_madandj';
$password='UZEw{guy';
$dbase='finance_app';

try {
  $db = new PDO('mysql:host=localhost; dbname=finance_app', $user, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $ex) {
  echo $ex->getMessage();
}
include_once'CRUD.php';
$crud = new CRUD($db);
?>
