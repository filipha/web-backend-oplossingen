<div id="main">
<h2>De TODO-app</h2>
<h3>Wat moet er allemaal gebeuren ?</h3>
<?php echo form_open('dashboardController/addTask') ?>
	<ul>
		<li><label for "task">Taak : </label><input type = "text" name ="task" value=""></li>
		<li><input type="submit" name="submit" value="toevoegen"></li>
	</ul>
</form>
<h2>ToDo overzicht</h2>
<?php foreach ($tasks as $task) : ?>
	<img src="<?php echo base_url();?>public/img/icon-delete.png" alt="valid icon">
	<img src="<?php echo base_url();?>public/img/icon-valid.png" alt="valid icon">
	<?php echo $task->task.'<br>' ?>
<?php endforeach ;?>

</div><!-- end main-->	