<!DOCTYPE html>
<html>
<head>
	<title>CAMERA</title>
</head>
<body>

<div id="dialogModal">
	<div id="contentWrap"></div>
</div>
<div class="container">
	<p class="title">Camera</p>
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
				<th>Action</th>
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
				<td class="actions">
				<?= $this->Html->link('Edit',['controller'=>'camera','action'=>'edit',$camera->id],['class'=>'overlay','title'=>'Edit camera']) ?>
				<?= $this->Form->postLink('Delete',['controller'=>'camera','action'=>'delete',$camera->id],['confirm' => __('Are you sure you want to delete {0}?', $camera->name)]) ?>
				</td>
			</tr>
		</thead>
	<?php endforeach; ?>
	</table>

	<?= $this->Html->link('Add new camera',['controller'=>'camera','action'=>'add'],['class'=>'overlay button','title'=>'Add camera']) ?>	
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#dialogModal').dialog({
			autoOpen:false,
			show:{
				effect:'blind',
				duration:50
			},
			hide:{
				effect:'blind',
				duration:50
			},
			modal:true,
			height:560, width:480,
		});

		$('.overlay').click(function(event){
			event.preventDefault();
			$('#contentWrap').load($(this).attr('href'));
			$('#dialogModal').dialog('option','title',$(this).attr('title'));
			$('#dialogModal').dialog('open');
		})

	})

</script>
</body>
</html>

<style type="text/css">
	th,td{
		text-align: center;
	}
</style>

