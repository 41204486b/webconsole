<!DOCTYPE html>
<html>
<head>
    <title>USER MANAGEMENT</title>
</head>
<body>
    
    <?= $this->Form->create() ?>
    <div id="dialogModal">
        <div id="contentWrap"></div>
    </div>
    <div class="container" >
        <p class="title">User Management</p>
        <table class="table table-bordered table-striped" style="width: 480px;">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Level</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <thead>
                <?php foreach($users as $user):?>
                    <tr>
                        <td><?= h($user->username) ?></td>
                        <td><?= h($user->level)?></td>
                        <td><?= $this->Html->link('Edit',['controller'=>'users','action'=>'edit',$user->id],['class'=>'overlay','title'=>'Edit user']) ?></td>
                    </tr>
            </thead>
                <?php endforeach; ?>
        </table>
        <?= $this->Html->link('Add new user',['controller'=>'users','action'=>'add'],['class'=>'overlay btn btn-primary','title'=>'Add new user']) ?>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function(){
        $('#dialogModal').dialog({
            autoOpen:false,
            show:{
                effect:'blind',
                duration:50
            },
            hide:{
                effect:'blind',
                duration:50
            },
            modal:true,
            height:560, width:480,
        });

        $('.overlay').click(function(event){
            event.preventDefault();
            $('#contentWrap').load($(this).attr('href'));
            $('#dialogModal').dialog('option','title',$(this).attr('title'));
            $('#dialogModal').dialog('open');
        })

    })
</script>
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
    
    td,th{text-align: center;}
    table{margin-top: 20px;width: 640px;}
</style>
</html>