<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset('utf-8'); ?>
	<title>DETAIL</title>
</head>
<body>
	<div class="container">
		<p class="title">Detail</p>
 		<?= $this->Form->create($local) ?> 
 				
 		<table class="table-responsive" style="width:680px;">
			<tbody  >
				<tr>
					<th>Location</th>
					<td><?= $this->Form->control('location',['class'=>'form-control','label'=>false]) ?></td>
				</tr>
			</tbody>
		</table><br/>

		<table class="table-responsive" style="width:250px;">
			<tbody>
				<tr>
					<th>Version</th>
					<td><?= $this->Form->control('version',['label'=>false,'class'=>'form-control','disabled']) ?></td>
				</tr>
			</tbody>
		</table>			
 		
 		<div style="margin-left: 50px;margin-top: 50px;">
     	<?= $this->Form->button($this->Html->meta('i', '&nbsp;', array('class' => 'fa fa-floppy-o fa-fw fa-lg')).'&nbsp;Save',['class'=>'btn btn-primary']) ?>
 		</div>
 		<?= $this->Form->end() ?>
	</div>
</body>
<style type="text/css">
	p.title{
		background: #234990;
		font-size: 16px;
		border: 1px solid black;
		border-radius: 10px;
		color: white;
		padding-left: 20px;
		margin-top: 30px;
		line-height: 25px;
	}
	
	td,th{text-align: left;}
	th{width: 100px;}
	
</style>

</html>
