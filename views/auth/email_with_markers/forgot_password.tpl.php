###subject###

<?php echo $this->config->item('site_title', 'ion_auth') . ' - Forgotten Password Verification' ?>
 
###message###
<html>
<body>
	<h1>Reset Password for <?php echo $identity;?></h1>
	<p>Please click this link to <?php echo anchor('auth/reset_password/'. $forgotten_password_code, 'Reset Your Password');?>.</p>
</body>
</html>

###alt_message###

Reset Password for <?php echo $identity;?>


Please click this link to 
<?php echo site_url('auth/reset_password/'. $forgotten_password_code);?>