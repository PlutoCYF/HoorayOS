<?php
	require('../../global.php');
	require('inc/setting.inc.php');
	require('inc/smarty.php');
	
	switch($ac){
		case 'update':
			$db->update(0, 0, 'tb_member', "skin = '$skin'", 'and tbid = '.$_SESSION['member']['id']);
			break;
		default:
			$smarty->display('sysapp/skin/index.tpl');
	}
?>