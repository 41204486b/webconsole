<div class="container">
<p class="title">TCP/IP</p>

<?= $this->Form->create( ) ?>

<table class="table-responsive" >
	<tbody  >
		<tr>
			<th width="150px">IPv4 Address</th>
			<td><?= $this->Form->input('IPv4_Address',['label'=>false,'class'=>'form-control']) ?></td>
		</tr>
	</tbody>
</table><br/>
<table class="table-responsive">
	<tbody  >
		<tr>
			<th width="150px">IPv4 Subnetmask</th>
			<td><?= $this->Form->input('IPv4_Subnetmask',['label'=>false,'class'=>'form-control']) ?></td>
		</tr>
	</tbody>
</table><br/>
<table class="table-responsive">
	<tbody  >
		<tr>
			<th width="150px">IPv4 Default Gateway</th>
			<td><?= $this->Form->input('IPv4_DefaultGateWay',['label'=>false,'class'=>'form-control']) ?></td>
		</tr>
	</tbody>
</table><br/>

<table class="table-responsive">
	<tbody  >
		<tr>
			<th width="150px">MTU</th>
			<td><?= $this->Form->input('MTU',['label'=>false,'class'=>'form-control']) ?></td>
		</tr>
	</tbody>
</table><br/>

<p class="title">DNS</p>

<table class="table-responsive">
	<tbody  >
		<tr>
			<th width="150px">Preferred DNS Server</th>
			<td><?= $this->Form->input('Preferred_DNS_Server',['label'=>false,'class'=>'form-control']) ?></td>
		</tr>
	</tbody>
</table><br/>
<table class="table-responsive">
	<tbody >
		<tr>
			<th width="150px">Alternate DNS Server</th>
			<td><?= $this->Form->input('Alternate_DNS_Server',['label'=>false,'class'=>'form-control']) ?></td>
		</tr>
	</tbody>
</table>
	

	<div style="margin-left: 50px;margin-top: 50px;">
     	<?= $this->Form->button($this->Html->meta('i', '&nbsp;', array('class' => 'fa fa-floppy-o fa-fw fa-lg')).'&nbsp;Save',['class'=>'btn btn-primary'],['action'=>'edit']) ?>
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