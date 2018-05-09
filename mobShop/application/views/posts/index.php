<!-- <style type="text/css">
	header{display: none;}
</style> -->

<h2><? echo $title; ?></h2>
<?php foreach($Product as $post) : ?>
	<h3><?php echo $post['Name']; ?></h3>
	<p><?php echo $post['Price']; ?></p>
<?php endforeach; ?>

<script type="text/javascript">
	scrllNav('login');
</script>