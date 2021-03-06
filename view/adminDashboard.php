<?php
	session_start();
	include_once "../includes/dbconnection.php";
	include_once "../includes/user.inc.php";
	include '../includes/requests.inc.php';
	require_once '../includes/session.inc.php';
	require_once '../functions/display_fn.php';
	
	include '../functions/headers.php';

	do_html_header('Administrator View');
	header2();

	include '../functions/navigations.php';
	admin_navigation2();

	require_once '../functions/content.inc.php';
	adminSideBar($_SESSION['login_user']);
	$login_sess = $_SESSION['login_user'];

	$sessionObj = new Session;
	$sessionObj->sessionCheck($login_sess);
	
	display_admin_dashboard();

	include '../includes/footer-2.php'; 
?>