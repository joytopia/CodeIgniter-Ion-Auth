###subject###

<?php echo $this->config->item('site_title', 'ion_auth') . ' - New Password' ?>

###message###

<html>
<body>
	<h1>New Password for <?php echo $identity;?></h1>
	
	<p>Your password has been reset to: <?php echo $new_password;?></p>
</body>
</html>

###alt_message###

New Password for <?php echo $identity;?>


Your password has been reset to: <?php echo $new_password;?>