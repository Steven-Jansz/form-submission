<?php
$theResult = '';$errMsg = '';
// ============================================
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if(isset($_POST['inputName'])){$inputName = $_POST['inputName'];}else{$inputName = '';}
	if(isset($_POST['inputPhone'])){$inputPhone = $_POST['inputPhone'];}else{$inputPhone = '';}
	if(isset($_POST['inputEmail'])){$inputEmail = $_POST['inputEmail'];}else{$inputEmail = '';}
	if(isset($_POST['inputMessage'])){$inputMessage = $_POST['inputMessage'];}else{$inputMessage = '';}
	
	if($inputName == ''){$errMsg .= '<strong>&bull;</strong> Please enter your name.<br />';}
	if($inputPhone == ''){$errMsg .= '<strong>&bull;</strong> Please enter your phone number.<br />';}
	if($inputEmail == ''){$errMsg .= '<strong>&bull;</strong> Please enter your email.<br />';}
	if($inputMessage == ''){$errMsg .= '<strong>&bull;</strong> Please enter your message.<br />';}
	
	if ($errMsg != ""){
		$theResult.=' <div class="grid-12 form-group item-required">'.$errMsg.'</div>';
	} else {
		$theResult.='<div class="grid-12  thank-you"><strong>Thank you for your Message!</strong>.</div>';
	}
	echo($theResult);
}

?>
