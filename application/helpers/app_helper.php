<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('cek_sesi')) {
	function cek_sesi() {
		$CI =& get_instance();
		$sesi = $CI->session->userdata('logged');
		if ($sesi != 'true') {
			echo $CI->session->set_flashdata('warning','Maaf Anda Belum Login');
			redirect('');
		}
	}
}
if (!function_exists('cek_sesi_login')) {
	function cek_sesi_login() {
		$CI =& get_instance();
		$sesi = $CI->session->userdata('logged');
		if ($sesi == 'true') {
			echo $CI->session->set_flashdata('success','Selamat Datang Kembali');
			redirect('home');
		}
	}
}

if (!function_exists('hasPermission')) {
	function hasPermission($arr) {
		$CI =& get_instance();
		$current = $CI->session->userdata('role');
		if (in_array($current, $arr)) {
			return true;
		} else {
			echo $CI->session->set_flashdata('error','You do not have access to this page');
			redirect('home');
		}
	}
}

function generate($input, $strength = 16) {
	$input_length = strlen($input);
	$random_string = '';
	for($i = 0; $i < $strength; $i++) {
		$random_character = $input[mt_rand(0, $input_length - 1)];
		$random_string .= $random_character;
	}

	return $random_string;
}
?>