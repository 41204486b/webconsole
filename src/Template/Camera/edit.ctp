<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#btnDone').click(function(){
			$('#dialogModal').dialog('close');
		})
	})
</script>

<script type="text/javascript">
	$('#CameraEditForm').ajaxForm({
		target: '#contentWrap',
		resetForm:false,
		beforeSubmit:function(){
			$('#contentWrap').html('Waiting...');
		},
		success:function(response){
			if(response=='saved'){
				$('#dialogModal').dialog('close');
			}
		}
	})
</script>
<style type="text/css">
	th{}
</style>
</head>
<body>
	<?= $this->Form->create($editCamera) ?>
	<div class="container" style="width: 450px;">
		<table class="table table-bordered">
			<tr>
				<th style="text-align: left;">Name</th>
				<th><?= $this->Form->input('name',array('placeholder'=>__('Monitor Name'),'label'=>false,'class'=>'form-control')) ?></td>
			</tr>
			<tr>
				<th style="text-align: left;">Function</th>
				<th><?= $this->Form->select('function',['None'=>'None','Record'=>'Record','Monitor'=>'Monitor'],['class'=>'form-control']) ?></th>
			</tr>
			<tr>
				<th style="text-align: left;">Enabled</th>
				<th><?= $this->Form->checkbox('enabled',['value'=>'Yes','hiddenField'=>'No']) ?></th>
			</tr>
			<tr>
				<th style="text-align: left;">Remote Host Name</th>
				<th><?= $this->Form->control('host',array('label'=>false,'class'=>'form-control')) ?></th>
			</tr>
			<tr>
				<th style="text-align: left;">Port</th>
				<th><?= $this->Form->control('port',array('label'=>false,'class'=>'form-control')) ?></th>
			</tr>
			<tr>
				<th style="text-align: left;">Capture Width (pixels)</th>
				<th><?= $this->Form->control('width',array('label'=>false,'class'=>'form-control')) ?></th>
			</tr>
			<tr>
				<th style="text-align: left;">Capture Height (pixels)</th>
				<th><?= $this->Form->control('height',array('label'=>false,'class'=>'form-control')) ?></th>
			</tr>
			<tr>
				<th style="text-align: left;">Maximum FPS</th>
				<th><?= $this->Form->control('maxFPS',array('label'=>false,'class'=>'form-control')) ?></th>
			</tr>
		</table>

		<?= $this->Form->button($this->Html->meta('i', '&nbsp;', array('class' => 'fa fa-floppy-o fa-fw fa-lg')).'&nbsp;Save',['class'=>'btn btn-primary']) ?>
		<a href="#" id="btnDone" class="btn btn-primary" style="color: white;">Cancel</a>
		<?= $this->Form->end() ?>
	</div>
</body>


</html>