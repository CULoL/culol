﻿<?php	/*what we want to do here is just redirect to the page controller,
	so we don't have to have two copies of the same page to manage.	*/
	$_GET['page'] = 'index.php';
 include( 'page.php' ); ?>