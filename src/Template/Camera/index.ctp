<!DOCTYPE html>
<html>
<head>
	<title>CAMERA</title>
</head>
<body>
	<div class="container">
	<p class="title">Camera</p>
	<?= $this->Html->link('Add',['controller'=>'camera','action'=>'edit'],['class'=>'btn btn primary']) ?>
	<?= $this->Html->link('Delete',['controller'=>'camera','action'=>'delete'],['class'=>'btn btn [primary']) ?>
</div>
<?= $this->Form->create() ?>

<div class="container">
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Function</th>
				<th>Host</th>
				<th>Enabled</th>
				<th>Maximun FPS</th>
				<th>Capture Width</th>
				<th>Capture Height</th>
			</tr>
		</thead>
		<thead>
		<?php foreach($cameras as $camera):?>
			<tr>
				<td><?= h($camera->name) ?></td>
				<td><?= h($camera->function)?></td>
				<td><?= h($camera->host) ?></td>
				<td><?= h($camera->enabled) ?></td>
				<td><?= h($camera->maxFPS) ?></td>
				<td><?= h($camera->width) ?></td>
				<td><?= h($camera->height) ?></td>
			</tr>
		</thead>
	<?php endforeach; ?>
	</table>	
</div>
</body>
</html>

<style type="text/css">
	th,td{
		text-align: center;
	}
</style>

