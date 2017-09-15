<!DOCTYPE html>
<html>
<head>
	<title>CAMERA</title>
	<?= $this->Html->script('jquery-ui.js') ?>
	<?= $this->Html->script('jquery-1.12.4.js') ?>
</head>
<body>
	<div class="container">
		<button id="create-user">Create new user</button>
	<p class="title">Camera</p>
	<?= $this->Html->link(__('Add new camera', true),['controller'=>'camera','action'=>'add'],['class'=>'overlay','title'=>'Add Camera']) ?>


	<?= $this->Html->link('Delete',['controller'=>'camera','action'=>'delete'],['class'=>'btn btn [primary']) ?>
</div>
<?= $this->Form->create() ?>
<div id="dialogModal">
	<div class="contentWrap"></div>
</div>
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
<script type="text/javascript">
	$(document).ready(function(){
		$('#dialogModal').dialog({
			autoOpen:false,
			show:{
				effect:'blind',
				duration:500
			},
			hide:{
				effect:'blind',
				duration:500
			},
			modal:true,
			height:560, width:800
		});

		$('.overlay').click(function(event){
			event.preventDefault();
			$('#contentWrap').load($(this).attr('href'));
			$('#dialogModal').dialog('option','title',$(this).attr('title'));
			$('#dialogModal').dialog('open');
		})
	})

</script>
<style type="text/css">
	th,td{
		text-align: center;
	}
</style>

