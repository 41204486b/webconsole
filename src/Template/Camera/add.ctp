<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#btnDone').click(function(){
			$('#dialogModal').dialog('close');
		})
	})
</script>

<script type="text/javascript">
	$('#CameraAddForm').ajaxForm({
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
	
</head>
<body>
	<?= $this->Form->create($addCamera) ?>
	<div class="container">
		<table>
			<tr>
				<th>Name</th>
				<th><?= $this->Form->input('name',array('placeholder'=>('Camera Name'),'label'=>false,'class'=>'form-control')) ?></td>
			</tr>
			<!-- <tr>
				<th>Function</th>
				<th><?= $this->Form->select('function',['None'=>'None','Record'=>'Record','Monitor'=>'Monitor'],['class'=>'form-control']) ?></th>
			</tr> -->
			<tr>
				<th>Enabled</th>
				<th><?= $this->Form->checkbox('enabled',['value'=>'Yes','hiddenField'=>'No']) ?></th>
			</tr>
			<tr>
				<th>Remote Host Name</th>
				<th><?= $this->Form->control('host',array('label'=>false,'class'=>'form-control')) ?></th>
			</tr>
			<tr>
				<th>Port</th>
				<th><?= $this->Form->control('port',array('label'=>false,'class'=>'form-control')) ?></th>
			</tr>
			<tr>
				<th>Capture Width (pixels)</th>
				<th><?= $this->Form->control('width',array('label'=>false,'class'=>'form-control')) ?></th>
			</tr>
			<tr>
				<th>Capture Height (pixels)</th>
				<th><?= $this->Form->control('height',array('label'=>false,'class'=>'form-control')) ?></th>
			</tr>
			<tr>
				<th>Maximum FPS</th>
				<th><?= $this->Form->control('maxFPS',array('label'=>false,'class'=>'form-control')) ?></th>
			</tr>
		</table>

		<?= $this->Form->button($this->Html->meta('i', '&nbsp;', array('class' => 'fa fa-floppy-o fa-fw fa-lg')).'&nbsp;Save',['class'=>'btn btn-primary']) ?>
		<a href="#" id="btnDone" class="button">Cancel</a>
		<?= $this->Form->end() ?>
	</div>
</body>


</html>