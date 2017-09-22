
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<meta charset="utf-8">
	<?= $this->Html->css('bootstrap.min.css') ?>
	<?= $this->Html->css('bootstrap.css') ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<?= $this->Html->script('https://code.jquery.com/jquery-1.12.4.js') ?>
    <?= $this->Html->script('https://code.jquery.com/ui/1.12.1/jquery-ui.js') ?> 
    <?= $this->Html->css('https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css') ?>
</head>
<body>
	<?= $this->Flash->render(); ?>
	<div class="container"></div>
	<div><h1 style="text-align: center;">Please login</h1></div>

	<div class="container">
	<?= $this->Form->create() ?>
		<div class="input-group" style="margin: auto;width: 300px;">
			<span class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
			<?= $this->Form->control('username',['placeholder'=>'Username','class'=>'form-control','label'=>false,'required'=>true]) ?>
		</div> 
		
		<div class="input-group" style="margin: auto;width: 300px;margin-top: 10px">
			<span class="input-group-addon"><i class="fa fa-lock fa-fw" aria-hidden="true"></i></span>
			<?= $this->Form->control('password',['placeholder'=>'Password','class'=>'form-control','label'=>false,'required'=>true]) ?>
		</div>

		<div style="margin: auto;display: flex;align-items: center;justify-content: center;margin-top: 50px;">
		<?= $this->Form->button('Login',['class'=>'btn btn-primary','style'=>'width:200px','onclick'=>'checkLogin']) ?>
		</div>
	</div>
	
<script type="text/javascript">
	function checkLogin(){

	}
</script>
</body>
</html>


