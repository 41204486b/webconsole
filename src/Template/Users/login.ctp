<div>
	<h1 style="text-align: center;">Please login</h1>
</div>
<fieldset>
<div class="container">
	<?= $this->Form->create() ?>
	<div>
		<div style="margin: auto;width: 25%">
		<?= $this->Form->control('username',['placeholder'=>'Username','class'=>'form-control','label'=>'Username','label'=>false]) ?>
		</div>
		<div style="margin: auto;width: 25%;margin-top: 10px">
		<?= $this->Form->control('password',['placeholder'=>'Password','class'=>'form-control','label'=>'Password','label'=>false]) ?>
		</div>
		<div style="margin: auto;display: flex;align-items: center;justify-content: center;margin-top: 50px;">
		<?= $this->Form->button('Login',['class'=>'btn btn-primary','style'=>'width:15%']) ?>
		</div>
	</div>
</div>
</fieldset>