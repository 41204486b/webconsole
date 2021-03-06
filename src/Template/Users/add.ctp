<?php
/**
  * @var \App\View\AppView $this
  */
?>
 <!DOCTYPE html>
 <html>
 <head>
     <title></title>

    <style type="text/css">
       
    </style>
 </head>
 <body>
     <?= $this->Form->create() ?>
    <div class="container-fluid">
        <table class="table-responsive" style="width:400px;">
            <tbody>
                <tr>
                    <th style="text-align: left;width: 150px;">Username</th>
                    <td><?= $this->Form->control('username',['label'=>false,'class'=>'form-control']) ?></td>
                </tr>
            </tbody>
        </table>
        <table class="table-responsive" style="width:400px;">
            <tbody  >
                <tr>
                    <th style="text-align: left;width: 150px;">Level</th>
                    <td><?= $this->Form->select('level',['Guest'=>'Guest','Administrator'=>'Administrator'],['class'=>'form-control']) ?></td>
                </tr>
            </tbody>
        </table>
        <table class="table-responsive" style="width:400px;">
            <tbody  >
                <tr>
                    <th style="text-align: left;width: 150px;">Password</th>
                    <td><?= $this->Form->control('password',['label'=>false,'class'=>'form-control']) ?></td>
                </tr>
            </tbody>
        </table>
        <!-- <table class="table-responsive" style="width:400px;">
            <tbody  >
                <tr>
                    <th style="text-align: left;width: 150px;">Confirm Password</th>
                    <td><?= $this->Form->control('confirmPassword',['label'=>false,'class'=>'form-control']) ?></td>
                </tr>
            </tbody>
        </table> --><br/>
              
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