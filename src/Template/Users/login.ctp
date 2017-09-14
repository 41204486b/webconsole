<?= $this->layout=false ?>
<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('bootstrap.css') ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<div>
	<h1 style="text-align: center;">Please login</h1>
</div>

<div class="container">
	<?= $this->Form->create() ?>
	<div>
		<div class="input-group" style="margin: auto;width: 300px;">
			<span class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>

			<?= $this->Form->control('username',['placeholder'=>'Username','class'=>'form-control','label'=>false]) ?>
		</div> 
		
		<div class="input-group" style="margin: auto;width: 300px;margin-top: 10px">
			<span class="input-group-addon"><i class="fa fa-lock fa-fw" aria-hidden="true"></i></span>

			<?= $this->Form->control('password',['placeholder'=>'Password','class'=>'form-control','label'=>false]) ?>
		</div>

		<div style="margin: auto;display: flex;align-items: center;justify-content: center;margin-top: 50px;">
		<?= $this->Form->button('Login',['class'=>'btn btn-primary','style'=>'width:200px']) ?>
		</div>
	</div>
</div>
