<?php
require_once('functions.php');
if(isset($_GET['logged_in']))
	if($_GET['logged_in'] == '1')
		redirect_to('001-headers.php');
	else redirect_to('002-page_redirection.php');
else redirect_to('/');
