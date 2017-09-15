<div class="container">
<p class="title">Mode</p>

<?= $this->Form->create() ?>

<table class="table-responsive" >
	<tbody  >
		<tr>
			<th width="150px">Mode</th>
			<td><?= $this->Form->select('function',['A'=>'A','B'=>'B','C'=>'C'],['class'=>'form-control','style'=>'display:inline-block']) ?></td>
		</tr>
	</tbody>
</table><br/>

<p class="title">Storage</p>

<table class="table-responsive">
	<tbody  >
		<tr>
			<th width="150px">Synchronized time</th>
			<td><?= $this->Form->input('synchronized_time',['label'=>false,'class'=>'form-control']) ?></td>
		</tr>
	</tbody>
</table><br/>

<table class="table-responsive">
	<tbody  >
		<tr>
			<th width="150px">Stored time</th>
			<td><?= $this->Form->input('stored_time',['label'=>false,'class'=>'form-control']) ?></td>
		</tr>
	</tbody>
</table><br/>

	

<div style="margin-left: 50px;margin-top: 50px;">
    <?= $this->Form->button($this->Html->meta('i', '&nbsp;', array('class' => 'fa fa-floppy-o fa-fw fa-lg')).'&nbsp;Save',['class'=>'btn btn-primary']) ?>
 </div>
 
 <?= $this->Form->end() ?>
</div>
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
	table{width: 450px;}
	
</style>