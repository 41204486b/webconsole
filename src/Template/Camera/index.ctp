
<div class="container">
	<p class="title">Camera</p>
	<?= $this->Html->link('Add',['controller'=>'camera','action'=>'edit'],['class'=>'btn btn primary']) ?>
	<?= $this->Html->link('Delete',['controller'=>'camera','action'=>'delete'],['class'=>'btn btn [primary']) ?>
</div>
<?= $this->Form->create() ?>

<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Function</th>
				<th>Host</th>
				<th>Enabled</th>
			</tr>
		</thead>
		<thead>
		<?php foreach($cameras as $camera):?>
			<tr>
				<td><?= h($camera->name) ?></td>
				<td><?= h($camera->function)?></td>
				<td><?= h($camera->host) ?></td>
				<td><?= h($camera->enabled) ?></td>
			</tr>
		</thead>
	<?php endforeach; ?>
	</table>	
</div>

