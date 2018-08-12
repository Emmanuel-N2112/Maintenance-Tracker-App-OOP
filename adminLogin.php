<?php

	include_once "includes/dbconnection.php";
	include_once "includes/user.inc.php";
	require_once 'functions/display_fn.php';
	
	include 'functions/headers.php'; 
	
	do_html_header('Administrator Login');
	header1();
	
	include 'functions/navigations.php';
	navigation2();

	display_admin_log_in_form();

	include 'includes/footer.php'; 
?>