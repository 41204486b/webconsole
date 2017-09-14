<!DOCTYPE html>
<html>
<head>
    <title>USER MANAGEMENT</title>
</head>
<body>
    
    <?= $this->Form->create() ?>

    <div class="container">
        <p class="title">User Management</p>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Level</th>
                </tr>
            </thead>
            <thead>
                <?php foreach($users as $user):?>
                    <tr>
                        <td><?= h($user->username) ?></td>
                        <td><?= h($user->level)?></td>
                    </tr>
            </thead>
                <?php endforeach; ?>
        </table>
    </div>
</body>

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
    table{margin-top: 20px;}
</style>
</html>