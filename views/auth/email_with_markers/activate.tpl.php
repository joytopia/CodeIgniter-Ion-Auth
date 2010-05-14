###subject###

<?php echo $this->config->item('site_title', 'ion_auth') . ' - Account Activation' ?>

###message###

<html>
<body>
	<h1>Activate account for <?php echo $identity;?></h1>
	<p>Please click this link to <?php echo anchor('auth/activate/'. $id .'/'. $activation, 'Activate Your Account');?>.</p>
</body>
</html>


###alt_message###

Activate account for <?php echo $identity;?>


Please click this link to Activate Your Account:
<?php echo site_url('auth/activate/'. $id .'/'. $activation);?>
