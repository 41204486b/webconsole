<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
 -->

<!DOCTYPE html>
 <html>
 <head>
     <title></title>

    <style type="text/css">
       /* th{width: 150px;}*/
    </style>
 </head>
 <body>
     <?= $this->Form->create($user) ?>
    <div class="container-fluid">
        <table class="table-responsive" style="width:400px;">
            <tbody>
                <tr>
                    <th style="text-align: left;width: 150px;">Username</th>
                    <td ><?= $this->Form->control('username',['label'=>false,'class'=>'form-control','disabled','cursor'=>'default']) ?></td>
                </tr>
            </tbody>
        </table>
        <table class="table-responsive" style="width:400px;">
            <tbody  >
                <tr>
                    <th style="text-align: left;width: 150px;">Password</th>
                    <td><?= $this->Form->control('password',['label'=>false,'class'=>'form-control','value'=>'']) ?></td>
                </tr>
            </tbody>
        </table>
        <table class="table-responsive" style="width:400px;">
            <tbody  >
                <tr>
                    <th style="text-align: left;width: 150px;">Confirm Password</th>
                    <td><?= $this->Form->control('confirmPassword',['label'=>false,'class'=>'form-control']) ?></td>
                </tr>
            </tbody>
        </table><br/>
              
        <?= $this->Form->button('Submit',['class'=>'btn btn-primary']) ?>
        <a href="#" id="btnDone" class="btn btn-primary" style="color: white;">Cancel</a>
    </div>
    <?= $this->Form->end() ?>
 </body>
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
 </html>