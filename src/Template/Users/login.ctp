
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
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                {% with messages = get_flashed_messages() %}
                {% if messages %}
                <ul class=flashes>
                    {% for message in messages %}
                    <li>{{ message }}</li>
                    {% endfor %}
                </ul>
                {% endif %}
                {% endwith %}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
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
	$(document).ready(function(){
		var messages = "{{ get_flashed_messages()}}";
		if(typeof messages != 'undefined' && messages != '[]')
		{
			$('#myModal').modal('show');
		}
	})
</script>
</body>
</html>


