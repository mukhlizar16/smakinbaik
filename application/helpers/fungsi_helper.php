<?php defined('BASEPATH') or exit('No direct script access allowed');

if (! function_exists('check_login')){
	function check_login()
	{
		if(empty($_SESSION['id'])){
			redirect('login');
		}
		return true;
	}
}

function is_login()
{
	if (!empty($_SESSION['id'])){
		return true;
	}
	return false;
}
