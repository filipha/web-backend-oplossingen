<div id="main">
<!--<p><?= base_url() ?></p>-->
<h2>Aanmelden</h2>
<?php echo validation_errors(); ?>	
<!--<form action="<?php echo base_url();?>dashboard" method="post" >-->
<?php echo form_open('LoginController/login') ?>
	<ul>
		<li><label for "email">email : </label><br><input type = "text" name ="email" value="jan@domain.com"></li>
		<li><label for "paswoord">paswoord : </label><br><input type = "password" name ="password" value="labophp"></li>
		<li><input type="submit" name="submit" value="login"></li>
	</ul>
</form>
</div><!-- end main-->	
