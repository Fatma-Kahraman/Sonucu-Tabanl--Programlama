<?php
ob_start();
session_start();

require_once 'admin/netting/class.crud.php';
$db=new crud();



//Ayarlar
$sql=$db->qSql("SELECT * FROM settings");

$row=$sql->fetchAll(PDO::FETCH_ASSOC);


foreach ($row as $key) {
	$settings[$key['settings_key']]=$key['settings_value'];

}

?>